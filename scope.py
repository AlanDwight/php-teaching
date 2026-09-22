# x = 1 # global scope 

# def funct():
#     x = 2 # local scope
#     print(x)

# funct()

# print(x)


# def outerFunct(): # parent
#     global x
#     x = 100
#     def innerFunc(): # child
#         print(x)
#     innerFunc()

# outerFunct()
# print(x)


# def outerFunct():
#     x = "jane"
#     def innerFunct():
#         nonlocal x
#         x = "hello"
#     innerFunct()
#     print(x)


# x = outerFunct()
# print(x)


# lambda

# A lambda function is a small anonymous function.
# A lambda function can take any number of arguments, but can only have one expression.

# x = lambda a,b,c : a + b + c

# def normalFunction(a,b,c): 
#     return a + b + c


# print(f"Lambda function output: {x(10,20,30)}")

# print(f"Normal function output: {normalFunction(10,20,30)}")  


#  map(), filter(), and sorted()

def double(x):
    return x*x

numbers  = [1,2,3,4,5]

# myDoubledList = list(map(double, numbers))

# myDoubledList = list(map(lambda x : x * x, numbers))

# print(myDoubledList)

# for i in myDoubledList: 
#     print(i)

# myEvenNumberList = list(filter(lambda x : x % 2 == 0 , numbers))

# print(myEvenNumberList)

# students = [("win", 3),("aung", 2),("zin", 1)]

# sorted_studentList =  sorted(students, key=lambda x : x[1])

# print(sorted_studentList)

# words = ["apple", "pie", "banana", "cherry"]

# sorted_fruitList = sorted(words, key=lambda a : len(a))

# print(sorted_fruitList)


# def greet(name,age):
#     print(f"hello {name} and you are {age} years old")

# # position arguments
# greet("John", 40)

# # keyword arguments
# greet(age=50, name="Tin")

# greet("lin", age=60)





# def operation(base, exponent=1):
#     print(base**exponent)

# operation(2,3)


# *args and **kwargs

# arbitrary arguments *args
# keyword arguments **kwargs 

# def myFunct(*args):
#     print(type(args)) 

#     # for i in args: 
#     #     print(i)
#     print(args)

#     # print(args[2])


# myFunct("one", "two", "three")


# def sayHello(greeting, *names):
#     for name in names:
#         print(f"Hello {greeting} {name}")

# sayHello("Good Morning", "Win", "Zin", "Lin", "Aung")

def sumAll(*numbers):
    # numbers = (1,2,3,4)
    total = 0
    for number in numbers:
        total += number
    return total

print(sumAll(1,2,3,4))


def myFunction(**kwargs):
    print(type(kwargs)) # dict

    # kwargs = {
    #      "first_name" : "win kyaw", 
    #      "last_name" : "phyo",
    #      "location" : "yangon, Myanmar"
    # }

    print(f"My last name is {kwargs["last_name"]} and he live in {kwargs["location"]}")

    for key,value in kwargs.items():
        print(f"{key} : {value}")

myFunction(first_name="win kyaw", last_name = "phyo", location= "yangon, Myanmar")


def myOtherFunction(username, **kwargs):
    print(f"hello {username}")
    print("***************************************")
    print("Your information details are as follow")
    print("***************************************")
    for key,value in kwargs.items():
            print(f"{key} : {value}")

# myOtherFunction("alan", first_name="alan", last_name="dwight", location="united states" )


def myOtherOtherFunction(name, *args , **kwargs):
    print("Hello Good Morning " + name)
    print("My arbitary position arguments", args )
    print("My arbitary keyword arguments", kwargs)



# myOtherOtherFunction("win kyaw phyo", "zin", "lin", "mar", occupation= "Accountant", age= 40, location= "japan", salary= 4000000)

# unpacking
# spread operator 

# numbers = [1,2,3,4]

# def sum(a,b,c,d):
#      return a + b + c + d

# print(sum(*numbers))


# def sayName(first_name, last_name):
#      print(f"Hello your first name is {first_name} and your last name is {last_name}")

# myNameDict = {
#      "first_name" : "win kyaw",
#      "last_name" : "phyo"
# }

# sayName(**myNameDict)




# Recursion is when a function calls itself.

# Recursion is a common mathematical and programming concept. It means that a function calls itself. This has the benefit of meaning that you can loop through data to reach a result.

# The developer should be very careful with recursion as it can be quite easy to slip into writing a function which never terminates, or one that uses excess amounts of memory or processor power. However, when written correctly recursion can be a very efficient and mathematically-elegant approach to programming.



def factorial(n):
    return 1 if n <= 1 else n * factorial(n -1 ) # one liner 

print(factorial(5))


def evenOrOdd(number):
    return "Even" if number%2==0 else "Odd"

userInput = int(input("Enter your number: "))
print(f"Your number is {evenOrOdd(userInput)}")



# Generators
# Generators are functions that can pause and resume their execution.

# When a generator function is called, it returns a generator object, which is an iterator.

# The code inside the function is not executed yet, it is only compiled. The function only executes when you iterate over the generator.


def greeting():
    return 1

print(greeting())











# def re(n):
#     return 1 if(n <= 0) else n * re(n-1) 

# print(re(5))


# data = [1,2,3,4,5]

# temp = data[1]
# data[1] = data[2]
# data[2] = temp

# print(data)