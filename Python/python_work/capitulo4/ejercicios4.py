"""
4.1- PIZZAS 
"""
pizzas = ['vegetariana', 'margarita', 'tartufo']
for pizza in pizzas:
    print(f"Me gusta la pizza {pizza.title()}")

print("Me encanta la pizza!")

"""
4.2.-
"""
animales = ['gato', 'leon', 'ocelote']
for animal in animales:
    print(f"Un {animal.title()} sería una excelente mascota")

print("Cualquiera de estos animales sería una excelente mascota.")

"""
4.3.- Contar hasta 20
"""
for x in range(1, 21):
    print(x)

"""
4.4.-
"""
# numeros = list(range(1, 1000001))
# print(numeros)

"""
4.5- 
"""
numeros = list(range(1, 1000001))
print(min(numeros))
print(max(numeros))
print(sum(numeros))

"""
4.6 Números impares
"""
impares = list(range(1,21,2))
for impar in impares:
    print(impar)

"""
4.7.- Treses
"""
treses = list(range(3,31,3))
for tres in treses:
    print(tres)

"""
4.8.- Cubos con for
"""

cubos = []
for value in range(1,11):
    numero = value**3
    cubos.append(numero)

print(cubos)


"""
4.9.- Cubos con lista de comprensión
"""
cubos = [value**3 for value in range(1,11)]
print(cubos)

"""
4.10.- TROZOS
"""

players = ['charles', 'martina', 'michael', 'florence', 'eli']
print(f"Estos son los tres primeros elementos de la lista: {players[0:3]}")
print(f"Estos tres elementos están en medio de la lista: {players[1:4]}")
print(f"Estos son los tres últimos elementos de la lista: {players[-3:]}")

"""
4.11.- MIS PIZZAS, SUS PIZZAS.- 
"""
pizzas = ['vegetariana', 'margarita', 'tartufo']
friend_pizzas = pizzas[:]

pizzas.append('cuatro quesos')
friend_pizzas.append('jamon')

print("Mis pizzas favoritas son:")
for pizza in pizzas:
    print(pizza)


print("Las pizzas favoritas de mi amigo son:")
for pizzaAmigo in friend_pizzas:
    print(pizzaAmigo)

"""
4.13.-
"""
comidas = ('risotto', 'arroz senyoret', 'arroz meloso', 'paella verduras', 'berenjenas rellenas')

for comida in comidas:
    print(comida)

comidas = ('arroz', 'senyoret', 'arroz meloso', 'paella verduras', 'berenjenas rellenas')

for comida in comidas:
    print(comida)










