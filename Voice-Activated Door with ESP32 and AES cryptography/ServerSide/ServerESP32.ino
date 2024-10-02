#include <WiFiClient.h>
#include <WiFiServer.h>
#include <WiFi.h>
#include <WiFiMulti.h>
#include <ESP32Servo.h>

Servo s1;
WiFiMulti WiFiMulti;
WiFiServer server(1444);

void setup() {
    Serial.begin(115200);
    delay(10);

    // We start by connecting to a WiFi network
    WiFiMulti.addAP("DD", "12345678");

    Serial.println();
    Serial.println();
    Serial.print("Waiting for WiFi... ");

    while(WiFiMulti.run() != WL_CONNECTED) {
        Serial.print(".");
        delay(500);
    }

    Serial.println("");
    Serial.println("WiFi connected");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());

    delay(500);
    
    s1.attach(13);
    server.begin();
}

void loop() {
    // Check for client connections
    WiFiClient client = server.available();
    if (client) {
        Serial.println("New client connected");

        // Read the command from the client
        String command = client.readStringUntil('\r');
        Serial.println("Received command: " + command);

        // Process the command (you can customize this part)
        if (command == "1") {
            // Code to turn on an LED, for example
            s1.write(90);
            delay(1000);
            Serial.println("Door is open");
            // digitalWrite(LED_PIN, HIGH);
        } else if (command == "0") {
            // Code to turn off an LED, for example
            s1.write(0);
            delay(1000);
            Serial.println("Door is closed");
            // digitalWrite(LED_PIN, LOW);
        }

        // Send a response back to the client
        client.println("Command received successfully");
        client.stop();
    }
}