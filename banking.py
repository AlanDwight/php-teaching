def main():
    balance = 0 
    banner()
    userInput = int(input("Please enter your choice: "))
    balance = userChoice(userInput,balance)

    while True: 
        userInput = input("Would you like to contiue [Y/n]") 
        if userInput.upper() == "Y":
            banner()
            userInput = int(input("Please enter your choice: "))
            balance = userChoice(userInput,balance)
        elif userInput == "n":
            print("Thank you for choosing us! Have a good day")
            break

def banner():
    print("************Welcome To Phyo Bank************")
    print("Press [1] to check your account balance.")
    print("Press [2] to withdraw balance from your account.")
    print("Press [3] to deposit balance to account.")
    print("Press [4] to exit program.")
    print("********************************************")

def deposit(balance):
    depositAmount = float(input("Please enter amount you wish to deposit: "))
    while(depositAmount <= 0 ):
        print("Please enter valid amount!")
        userLeave = input("Press Q to leave, Press Enter to continue: ")
        if userLeave.upper() == "Q":
            break
        depositAmount = float(input("Please enter amount you wish to deposit: "))
    balance += depositAmount
    return balance

def withdrwal(balance):
    withdrwalAmount = float(input("Please enter amount you wish to withdraw: "))
    while withdrwalAmount > balance or withdrwalAmount <= 0  : 
        if(withdrwalAmount > balance):
            print("Insufficient Balance")
            userLeave = input("Press Q to leave, Press Enter to continue: ")
            if userLeave.upper() == "Q":
                break
            withdrwalAmount = float(input("Please enter amount you wish to withdraw: "))
        else:
            print("Please enter valid amount!")
            userLeave = input("Press Q to leave, Press Enter to continue: ")
            if userLeave.upper() == "Q":
                break
            withdrwalAmount = float(input("Please enter amount you wish to withdraw: "))


    balance -= withdrwalAmount
    return balance

    
def checkBalance(balance):
    print(f"Your current balance is {balance}")

def userChoice(choice, balance):
    match choice: 
        case 1: checkBalance(balance)
        case 2: balance = withdrwal(balance)
        case 3: balance = deposit(balance)
    return balance

if __name__ == '__main__':
    main()