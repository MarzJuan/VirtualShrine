num = int(input())
while num >= 0:
    if num%2 == 0:
        num -= 8
    elif num%2 != 0:
        num -= 5
        print("Yo",end="")
    if num < 80 and num > 20:
        continue
    elif num > 0 and num < 8:
        break
        num -= 1
    print(f"{num}",end=".")