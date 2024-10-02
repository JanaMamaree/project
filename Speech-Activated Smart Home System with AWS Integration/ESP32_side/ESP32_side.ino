#include <pgmspace.h>
#include "secret.h"
#include <WiFiClientSecure.h>
#include <PubSubClient.h>
#include <ArduinoJson.h>
#include <WiFi.h>
#include <ESP32Servo.h>
#include <HTTPClient.h>

#define AWS_IOT_PUBLISH_TOPIC   "esp32/pub"
#define AWS_IOT_SUBSCRIBE_TOPIC "esp32/sub"

Servo myservo;
int servoPin = 13; 
int relayPin = 17; 
int lightSensorPin = 16; 

const char* lambdaEndpoint = "https://ygtr269b54.execute-api.eu-north-1.amazonaws.com/test/alert";

bool messageSent = false;

WiFiClientSecure net = WiFiClientSecure();
PubSubClient client(net);

void connectAWS() {
  WiFi.mode(WIFI_STA);
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);

  Serial.println("Connecting to Wi-Fi");

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  // Configure WiFiClientSecure to use the AWS IoT device credentials
  net.setCACert(AWS_CERT_CA);
  net.setCertificate(AWS_CERT_CRT);
  net.setPrivateKey(AWS_CERT_PRIVATE);

  // Connect to the MQTT broker on the AWS endpoint we defined earlier
  client.setServer(AWS_IOT_ENDPOINT, 8883);

  // Create a message handler
  client.setCallback(messageHandler);

  Serial.println("Connecting to AWS IOT");

  while (!client.connect(THINGNAME)) {
    Serial.print(".");
    delay(100);
  }

  if (!client.connected()) {
    Serial.println("AWS IoT Timeout!");
    return;
  }

  // Subscribe to a topic
  client.subscribe(AWS_IOT_SUBSCRIBE_TOPIC);

  Serial.println("AWS IoT Connected!");
}

void publishMessage(const char* message) {
  StaticJsonDocument<200> doc;
  doc["message"] = message;
  char jsonBuffer[512];
  serializeJson(doc, jsonBuffer); // print to client

  client.publish(AWS_IOT_PUBLISH_TOPIC, jsonBuffer);
}

void handleCommand(const char* command, bool fromSerial) {
  if (strcmp(command, "0") == 0) {
    Serial.println("Closing servo");
    myservo.write(0); // Close the servo
    publishMessage("Servo Closed");
    if (fromSerial) {
      
      sendLambda("Someone closed the door!");
    }
  } else if (strcmp(command, "1") == 0) {
    Serial.println("Opening servo");
    myservo.write(90); // Open the servo
    publishMessage("Servo Opened");
    if (fromSerial) {
      
      sendLambda("Someone opened the door!");
    }
  } else if (strcmp(command, "2") == 0) {
    Serial.println("Turning lamp on");
    digitalWrite(relayPin, HIGH); // Turn on the relay (and the lamp)
    delay(100); // Small delay to allow the light sensor to detect the light
    if (fromSerial && digitalRead(lightSensorPin) == HIGH) {
      
      sendLambda("Someone turned on the light!");
    }
    publishMessage("Lamp On");
  } else if (strcmp(command, "3") == 0) {
    Serial.println("Turning lamp off");
    digitalWrite(relayPin, LOW); // Turn off the relay (and the lamp)
    delay(100); // Small delay to allow the light sensor to detect the light
    if (fromSerial && digitalRead(lightSensorPin) == LOW) {
      
      sendLambda("Someone turned off the light!");
    }
    publishMessage("Lamp Off");
  } else {
    Serial.println("Invalid message received");
  }
}

void messageHandler(char* topic, byte* payload, unsigned int length) {
  Serial.print("Incoming: ");
  Serial.println(topic);

  StaticJsonDocument<200> doc;
  deserializeJson(doc, payload);
  const char* message = doc["message"];
  Serial.print("Message: ");
  Serial.println(message);

  handleCommand(message, false); // Handle command from MQTT
}

void setup() {
  Serial.begin(115200);
  myservo.attach(servoPin); // attaches the servo on the specified pin to the servo object
  pinMode(relayPin, OUTPUT); // Set relay pin as an output
  digitalWrite(relayPin, LOW); // Initialize the relay to be off

  // Initialize the light sensor pin
  pinMode(lightSensorPin, INPUT);

  // Test the relay
  digitalWrite(relayPin, HIGH); // Turn on the relay (and the lamp)
  delay(2000); // Wait 2 seconds
  digitalWrite(relayPin, LOW); // Turn off the relay (and the lamp)
  delay(2000); // Wait 2 seconds

  connectAWS();
}

void loop() {
  client.loop();

  // Check if data is available on the Serial port
  if (Serial.available() > 0) {
    String command = Serial.readStringUntil('\n'); // Read the command from the Serial input
    command.trim(); // Remove any leading/trailing whitespace
    handleCommand(command.c_str(), true); // Handle command from Serial
  }

  delay(1000);
}

void sendLambda(const char* message) {
  HTTPClient http;

  http.begin(lambdaEndpoint);

  // Set headers
  http.addHeader("Content-Type", "application/json");

  // Create JSON payload
  StaticJsonDocument<200> doc;
  doc["message"] = message;
  char jsonBuffer[512];
  serializeJson(doc, jsonBuffer);

  // Send POST request
  int httpResponseCode = http.POST(jsonBuffer);

  if (httpResponseCode > 0) {
   
    Serial.println("Message sent successfully");
    messageSent = true; // Set flag to true indicating message has been sent
  } else {
    Serial.print("Error code: ");
    Serial.println(httpResponseCode);
  }

  http.end();
}
