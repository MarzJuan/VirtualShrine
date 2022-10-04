x, y = 5, 10
print(1 if x % y == 0 else 0,end="")
y += 3
print(1 if x % y != 0 else 0,end="")
x, y=y, x
print(1 if x % y == 0 else 0,end="")
x, y = 5,x
print(1 if x % y != 0 else 0,end="")
x=10
print(1 if x % y == 0 else 0,end="")
