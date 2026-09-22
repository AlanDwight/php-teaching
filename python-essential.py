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

fruits: list[str] = ["apple", "orange", "banana"]
chosen : list[str] = [ fruit for fruit in fruits if len(fruit) > 5]
print(chosen)


def upperCaseDeco(func):
    def inner():
        return func().upper()
    return inner

def name(x):
    def inner(func):
        if x == 1: 
            def inner2():
                return func() + " win kyaw phyo"
        else : 
            def inner2():
                return func() + " phyo kyaw win"
        return inner2
    return inner

@name(1)
@upperCaseDeco
def main():
    return "hello world"

# print(main())


# dunder method

class Fruit:
    def __init__(self, type):
        self.type = type

    def __mul__(self, other) -> str:
        return self.type * other

    def __str__(self):
        return self.type

fruit: Fruit = Fruit("banana")
print(fruit.type)
print(fruit.type * 4 )
print(fruit.type.__mul__(4))
print(fruit)

n: int = 1_000_000_000
x: int = 1000000000
print(f"{n:_}")
print(f"{n:,}")

a: str = "var"
print(f"{a:>20}:")
print(f"{a:<20}:")
print(f"{a:*^20}:")
print(f"{a:_^20}:")

import datetime 

now: datetime = datetime.datetime.now()
print(f"{now:%d.%m.%y (%H:%M:%S)}")
print(f"{now:%c}")


i : int = 5 
k : int = 7

print(f"{i+k = }")


listlist = [1,2,3,4,5]
print(listlist[1:3])

newList = "hello,world"
print(newList.split(","))