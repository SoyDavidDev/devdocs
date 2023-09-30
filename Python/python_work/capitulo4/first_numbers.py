#Utilizar la función range()

for x in range(1,5): #no imprime el último valor, el 5.
	print(x)


# Usar range() para generar una lista de números
numbers = list(range(1,5))
print(numbers)

# Si añadimos tercer valor nos da el tamaño de paso para ir saltanto números.-
even_numbers = list(range(2,11,2))
print(even_numbers)

# en py ** representa el exponente.- los 10 primeros números cuadrados en una lista:
squares = []
for value in range(1,11):
	square = value**2
	squares.append(square)

print(squares)

# Misma que anterior pero más simplificada.-
squares = []
for value in range(1,11):
	squares.append(value**2)

print(squares)

# Estadística sencilla lista de números.- min, max, sum
digits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0]
print(min(digits))
print(max(digits))
print(sum(digits))

# Listas por comprensión, mismo ejemplo que anterior squares.-
squares = [value**2 for value in range(1,11)]
print(squares)