import requests
import speech_recognition as sr

recognizer = sr.Recognizer()

def recognize_speech():
    with sr.Microphone() as source:
        print("Say something:")
        audio = recognizer.listen(source)
    try:
        command = recognizer.recognize_google(audio).lower()
        return command
    except sr.UnknownValueError:
        print("Could not understand audio")
        return None
    except sr.RequestError as e:
        print(f"Error with the speech recognition service; {e}")
        return None

def main():
    print("Do you want to make an order or check status?")
    while True:
        choice = input("Type 'make order' or 'check status', or 'finish' to exit: ").lower()
        if choice == "finish":
            print("Exiting the program.")
            break
        elif choice == "make order":
            command = recognize_speech()
            if command:
                payload = {'voice': command}
                api_url = 'https://ygtr269b54.execute-api.eu-north-1.amazonaws.com/test/post'
                response = requests.post(api_url, json=payload)
                if response.status_code == 200:
                    result = response.json()
                    is_equal = result.get('is_equal')
                    if is_equal is not None:
                        if is_equal:
                            print("You're authorized, and your order has been placed.")
                        else:
                            print("You're not authorized.")
                    else:
                        print("Unexpected response from server.")
                else:
                    print("Error:", response.text)
        elif choice == "check status":
            print("What do you want to check, door or light?")
            item_to_check = input("Type 'door' or 'light': ").lower()
            if item_to_check not in ['door', 'light']:
                print("Invalid choice. Please type 'door' or 'light'.")
            else:
                payload = {'item': item_to_check}
                api_url = 'https://ygtr269b54.execute-api.eu-north-1.amazonaws.com/test/checking'
                response = requests.post(api_url, json=payload)
                if response.status_code == 200:
                    result = response.json()
                    status = result.get('status')
                    if status is not None:
                        print(f"The {item_to_check} status is: {status}")
                    else:
                        print(f"No status information available for {item_to_check}.")
                else:
                    print("Error:", response.text)
        else:
            print("Invalid choice. Please type 'make order', 'check status', or 'finish'.")

if __name__ == "__main__":
    main()
