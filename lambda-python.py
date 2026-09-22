# someFuc = lambda x : x + 1 
# someOtherFunc = lambda a,b,c : a + b + c

# someList = [1,2,3,4]

# newList = list(map(lambda a : a ** 2 , someList))

# print(someFuc(5))
# print(someOtherFunc(5,5,5))
# print(newList)

# oddNumber = list(filter(lambda a : a%2 != 0, someList))

# print(oddNumber)


# def myfunc(n):
#   return lambda a : a * n

# print(myfunc(2)(3))


# sq_list = [ x * x for x in range(1000000)]
# print(sq_list)

# sq_list = (x * x for x in range(1000000))
# print(list(sq_list))

# def my_gen():
#     yield 1
#     yield 2
#     yield 3

# genObj = my_gen()

# print(next(genObj))
# print(next(genObj))
# print(next(genObj))


# for i in my_gen():
#     print(i)


# def my_gen():
#     count = 0 

#     while count < 3:
#         count+= 1 
#         yield count

# genObj = my_gen()

# print(next(genObj))
# print(next(genObj))
# print(next(genObj))

import tracemalloc

# def large_seq_gen(large):
#     for i in range(large):
#         yield i 


# def large_seq_con(large):
#     for i in range(large):
#         return i 




# tracemalloc.start()

# genObj = large_seq_gen(10000000000000)

# current, peak = tracemalloc.get_traced_memory()

# print(f"Current memory usage: {current / 10**6:.2f} MB")
# print(f"Peak memory usage: {peak / 10**6:.2f} MB")


# print(next(genObj))
# print(next(genObj))
# print(next(genObj))


# tracemalloc.stop()









# tracemalloc.start()

# list_com = [ x * x for x in range(1000000)]

# current, peak = tracemalloc.get_traced_memory()

# print(list_com[0:10])

# print(f"Current memory usage: {current / 10**6:.2f} MB")
# print(f"Peak memory usage: {peak / 10**6:.2f} MB")

# tracemalloc.stop()






# tracemalloc.start()

# list_com = ( x * x for x in range(1000000))

# newList = []

# for i in range(10): 
#     newList.append(next(list_com))

# print(newList)

# current, peak = tracemalloc.get_traced_memory()

# print(f"Current memory usage: {current / 10**3 :.2f} KB")
# print(f"Peak memory usage: {peak / 10**3:.2f} KB")

# tracemalloc.stop()










# sum of square 


# sos = sum(x * x for x in range(1,10,2))
# print(sos)
# 
# from decimal import Decimal, getcontext

# 1. Set the precision context high enough to hold your decimal places
# getcontext().prec = 45  

# def febo_seq():
#     a, b = 0 ,1 
#     while True: 
#         a , b = b , a + b
#         c = b/a
#         yield f"{c:.80f}"


# seq = febo_seq()

# for _ in range(100):
#     print(next(seq))

myList = []
for i in range(10):
    myList.append(i*i)

print(myList[:10])


myNewList = [ i*i for i in range(10)]
print(myNewList[:10])
myNextNewList = ( i*i for i in range(10))

for _ in range(10):
    print(next(myNextNewList))


# decorator 

def decorator(func):
    def toUpper(*args, **kwargs):
        return func(*args, **kwargs).upper()
    return toUpper

@decorator
def greeting(name, age):
    return "hello " + name + "and you are " + age

print(greeting("win", "30"))


def myDecorator(n):
    def firstLayer(func):
        def innerFunc():
            if n==1:
                return func().upper()
            else: 
                return func().title()
        return innerFunc
    return firstLayer

@myDecorator(0)
def newFunc():
    return "hello world"

print(newFunc())

import functools

def changeToUpper(func):
    @functools.wraps(func)
    def inner():
        return func().upper()
    return inner

def addGreeting(func):
    @functools.wraps(func)
    def inner():
        return "hello greeting " + func()
    return inner

@addGreeting
@changeToUpper
def myNewFunc():
    return "win kyaw phyo"

def somefUnc():
    return 0

print(myNewFunc())
print(myNewFunc.__name__)
print(somefUnc.__name__)
print(somefUnc.__class__)


myList = ["A", "B", "C", "D" , "E" , "F" , "G" , "H", "I", "J", "K"]
low = 0 
high = len(myList) - 1
search = input("Enter: ").upper()
index = -1

for i in range(len(myList)): 
    if search == myList[i]:
        index = i 

if index != -1 : 
    while not low > high:
        middle = low + (high - low )//2 
        print(middle)
        if middle > index: 
            high = middle -1 
            print("high " + str(high))
        elif middle < index: 
            low = middle + 1
            print("low " + str(low))
        else: 
            print("your value is at index " + str(index))
            break
else:
    print("NOT ON THE LIST")

def upperCaseEverything(elements: list[str])->list[str]:
    """
        type annotation: be extra obvious
    """
    return [element.upper() for element in elements]

print(upperCaseEverything(["apple", "orange", "banana"]))

myList: list[str,int] = [1,2,3,"string"]

print(myList)

print([x*x for x in [1,2,3,4]])
print([x.upper() for x in ["apple", "orange", "banana"]])

newArray = []
[newArray.append(x) if len(x) > 5 else None for x in ["apple", "orange", "banana"]]
print(newArray)