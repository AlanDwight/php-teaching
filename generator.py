# Generators
# Generators are functions that can pause and resume their execution.

# When a generator function is called, it returns a generator object, which is an iterator.

# The code inside the function is not executed yet, it is only compiled. The function only executes when you iterate over the generator.


# def my_generator():
#     yield 2 * 3
#     yield 3 * 4
#     yield 5 * 6 

# myGeneratorObj = my_generator()

# # iterator object

# print(next(myGeneratorObj))
# print(next(myGeneratorObj))
# print(next(myGeneratorObj))


def large_seq_gen(large):
    for i in range(large):
        yield i*i



def large_seq_con(large):
    myList = [ i * i for i in range(large) ]
    return myList




# generator function 

# import tracemalloc

# tracemalloc.start()

# genObj = large_seq_gen(1000000)

# for _ in range(10):
#     print(next(genObj))

# current, peak = tracemalloc.get_traced_memory()

# print(f"current memory usage: {current/10**3:.2f} KB")
# print(f"peak memory usage: {peak/10**3:.2f} KB")

# tracemalloc.stop()




# # normal function

# tracemalloc.start()


# myList = large_seq_con(1000000)
# print(myList[:10])
# current, peak = tracemalloc.get_traced_memory()

# print(f"current memory usage: {current/10**3:.2f} KB")
# print(f"peak memory usage: {peak/10**3:.2f} KB")


# tracemalloc.stop()



# def feb_seq():
#     a,b = 0,1
#     while True: 
#         # yield a 
#         a,b = b, a+b
#         c = b/a 
#         yield c

# genObj = feb_seq()

# for _ in range(100):
#     print(f"{next(genObj):.30f}")


# myList = ["orange", "banana", "apple", "mango"]


# def myListSwapper(myList):

#     temp = myList[2]
#     myList[2] = myList[1]
#     myList[1] = temp
#     return myList


# print(myListSwapper(myList))

# import functools

# def changeToUpper(func):
#     @functools.wraps(func)
#     def inner():
#         return func().upper()
#     return inner

# def addGreetingOrTaunting(choice):
#     def firstLayer(func):
#         @functools.wraps(func)
#         def inner():
#             if choice == "greet" : 
#                 return "Hello morning sunshine " + func()
#             elif choice == "taunt":
#                 return "You can run but you can't hide " + func()
#             else:
#                 return "invalid choice"
#         return inner
#     return firstLayer

# @addGreetingOrTaunting("greet")
# @changeToUpper
# def proxyFunc():
#     return "win kyaw phyo"

# print(proxyFunc())
# print(proxyFunc.__name__)

import datetime

currentDate = datetime.datetime.now()

age = 19 
reminder = 30 - age
print(currentDate.year)
print(f"studend will turn 30 in year of {currentDate.year + reminder}")


for i in range(1,6):
    print("*" * i)


count = 5
for i in range(1,6):
    print("*" * count)
    count-=1

init = 1
end = 30
step = 2 
count = int((end/step) - init)
for j in range(init,end,step):
    print( " " * count  + "*" * j)
    count -=1 


rows = 5
for i in range(1, rows + 1):
    spaces = " " * (rows - i)
    stars = "*" * (2 * i - 1)
    print(spaces + stars)



# userInput = int(input("Enter your number: "))
# total = 0 
# soe = 0 
# sod = 0
# coe = 0 
# coo = 0
# max = 0 
# min = 0 
# for i in range(1, userInput + 1 ): 
#     total += i
#     if(i%2 == 0):
#         soe += i
#         coe +=1 
#     else:
#         sod += i
#         coo += 1
#     if(i > max):
#         max = i
#     elif (i < min):
#         min = i 
    
# print(total)
# print(soe)
# print(coe)
# print(coo)
# print(max)
# print(min)


# myList = [4,5,2,7,8,2,-1]

# minimum = 0 
# maximum = 0 
# for i in myList: 
#     if(i > maximum):
#         maximum = i 
#     elif(i < minimum ):
#         minimum = i 

# print(maximum)
# print(minimum)


numbers = [4 , 4 , 4, 4 , 7, 2, 4, 9, 7, 1, 2, 8, 9]

# for number in numbers:
#     unique_list = list(set(numbers))

# print(unique_list)

u_list  = []

for number in numbers:
    if number not in u_list: 
        u_list.append(number)

print(u_list)


freq_set = {}

for number in numbers:
    if number in freq_set:
        freq_set[number] += 1
    else:
        freq_set[number] =  1 

print(freq_set)

max_freq = 0
high_count = 0  
for number, freq in freq_set.items():
    if freq > max_freq:
        max_freq = freq
        high_count = number

print(f"max freq is {max_freq}")
print(f"highest count number is {high_count}")