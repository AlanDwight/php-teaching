newArray = []
[newArray.append(x) if len(x) > 5 else None for x in ["apple", "orange", "banana"]]
print(newArray)