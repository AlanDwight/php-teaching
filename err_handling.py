# error handling
# exception handling
# graceful handling



# try: 
#     f = open("data.txt")
#     # print(f.read())
#     f.close()
#     # result = 3 / 0
#     number = "abc"
#     number = int(number)
#     print(number)

# except FileNotFoundError:
#     print("File doesn't exist")
# except ZeroDivisionError: 
#     print("Can't divided by zero")
# except ValueError:
#     print("can't convert to integer")
# except:
#     print("Unknown Error")
# finally:
#     print("always execute in the end")


# for port in [22,  80, 443, 8080 ]: 
#     if port == 443: 
#         print(f"port {port } found. Stopping scan")
#         break
#     print(f"checked {port} finished")


# x = 0 
# while True: 
#     x += 1
#     if x == 10:
#         break
#     else:
#         print(x)

# userlist = ["admin" , "", "user", "", "guest"]

# for user in userlist:
#     if user == "":
#         continue
#     print(user)


# switch case / match case

# 0 sunday
# 1 monday
# 2  3 4 5 6  

x = "sat"

# match x:
#     case "monday" | "tues" | "wed" | "thur" | "fri" : 
#         print("weekdays")
#     case "sat" | "sun" :
#         print("weekends")
#     case _: 
#         print("invalid day")




# List is a collection which is ordered and changeable. Allows duplicate members.
# Tuple is a collection which is ordered and unchangeable. Allows duplicate members.
# Dictionary is a collection which is ordered** and changeable. No duplicate members.

# Set is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.

# mySet = {"one", "two", "three", "one", "two", "three", "four"}

# for data in mySet:
#     print(data)


# with open("data.txt", "r") as f: 
#     print(f.read())



# import datetime

# x = datetime.datetime.now()

# print(x.year)
# print(x.month)
# print(x.day)
# print(x.time())

# # The strftime() Method, time formatter method

# print(x.strftime("%A")) # day of the week
# print(x.strftime("%B")) # month of the year

# day = int(x.strftime("%w"))

# print(x.strftime("%d/%m/%Y, %I:%M:%S %p"))


# custom datetime 

# myCustomDate = datetime.datetime(1990,5,3)

# print(myCustomDate.strftime("%A"))


# match day: 
#     case 0:
#         print("sun")
#     case 1:
#         print("mon")
#     case 2:
#         print("tues")
#     case _: 
#         print("notvalid day")



# range(start, stop, step)

# for i in range(4,11,2):
#     print(i)


# print(bool(None))

# import cowsay

# cowsay.cow("helooooooooooooooooo")

# def re(n): 
#     # if(n==0):
#     #     return 1 
#     # return n * re(n-1)
#     return 1 if n == 0 else n * re(n-1)

# print(re(5))


# mylist = [1,2,3,4,5]
# print(sum(mylist[0:]))

# def re(clist):
#     if len(clist) == 0 : 
#         return 0
#     else:
#         return clist[0] + re(clist[1:])

# print(re(mylist))


# def gen(n):
#     n += 1 
#     yield n

# n = 0 

# genO = gen(n)

# print(next(genO))


def fib_gen():
    a,b = 0,1
    while True: 
        yield a
        a,b = b, b+a
        # print(f"{(b/a):.40f}")


fib_obj = fib_gen()

# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
# print(next(fib_obj))
prev = 0 
nextNum = 0 
for _ in range(100): 
    nextNum = next(fib_obj)
    if prev == 0 :
        prev = nextNum
        continue  
    print(nextNum/prev)
    prev = nextNum


# for _ in range(100): 
#     next(fib_obj)