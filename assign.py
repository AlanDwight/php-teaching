import datetime
# ===== Student Profile =====
# Name: John
# Age: 19
# City: Yangon
# School: ABC University
# Favorite Language: Python
# ===========================


# currentYear = datetime.datetime.now().year

# userAge = int(input("Enter your age: "))

# targetAge = 30

# reminder = targetAge - userAge 

# print(f"You will be {targetAge} at year of {currentYear + reminder}")



# Mathematics  
# English
# Science
# Programming


# Total
# Average
# Grade

# 90–100 → A
# 80–89  → B
# 70–79  → C
# 60–69  → D
# Below 60 → F

# math = int(input("Enter your math score: "))
# while math < 0 or math > 100 :
#     print("Please enter valid score between 0 and 100")
#     math = int(input("Enter your math score: "))

# print(f"your math score is {math}")



numberList = [7,1,4,81,4, 6, 5,3,1,8,9,9,2,3,4,15,23,12]

# All numbers from 1 to N

# Sum of the numbers
# Sum of even numbers
# Sum of odd numbers
# Number of even numbers
# Number of odd numbers

# Largest number
# Smallest number

# factorial of each number in the list

# def recursionFunction(number):
#     if(number <= 1 ):
#         return 1 
#     return number * recursionFunction(number - 1 )


# max = numberList[0]
# min = numberList[0] 
# for number in numberList:   
#     if number > max:
#         max = number
#     elif number < min:
#         min = number
#     print(recursionFunction(number))


# print(f"maximum value in the list is {max}")
# print(f"minimum value in the list is {min}")



# Python is fun 123


# Requirements

# Given a sentence, calculate:

# Characters
# Words
# Vowels
# Alphabet
# Digits
# Spaces


sentence= "this is sentence"

for character in sentence:
    print(character)



# words = "hello,world"

# print((words.split(",")))