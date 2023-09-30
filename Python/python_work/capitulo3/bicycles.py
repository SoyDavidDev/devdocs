# Introducción a las listas

bicycles = ['trek', 'cannondale', 'redline', 'specialized']
print(bicycles)

# Acceder a los elementos en la lista
print(bicycles[0])

# Dar formato a los elementos de la lista
print(bicycles[0].title())

# Mostrar los elementos en la lista
print(bicycles[1])
print(bicycles[3])

# Mostrar el último elemento de la lista sin saber cuántos elementos hay, -2 el penúltimo, -3 antepenúltimo y así sucesivamente
print(bicycles[-1])

# Usa valores individuales de la lista

message = f"My first bicycle was a {bicycles[0].title()}."

print(message)

"""
3.1.- NOMBRES.- Guarde los nombres de unos cuantos amigos en una lista llamada nombres. Imprima el nombre de cada persona accediendo al elemento correspondiente de la lista, de uno en uno. 
"""

nombres = ['Jaz', 'Majo', 'Juan', 'Silvia', 'Esther', 'Maria']

print(nombres[0])
print(nombres[1])
print(nombres[2])
print(nombres[3])
print(nombres[4])
print(nombres[5])

"""
3.2.- SALUDOS.- Empiece con la lista del ejercicio 3.1. pero, en vez de solo imprimir el nombre de cada persona, imprima un mensaje para ellos. El texto de cada mensaje debería ser el mismo, 
pero cada mensaje debería personalizarse con el nombre de la persona.
"""

message = "Hola, eres únic@, "

print(message + nombres[0])
print(message + nombres[1])
print(message + nombres[2])
print(message + nombres[3])
print(message + nombres[4])
print(message + nombres[5])

