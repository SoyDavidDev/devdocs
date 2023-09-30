# Modificar elementos en una lista

motorcycles = ['honda', 'yamaha', 'suzuki']
print(motorcycles)

motorcycles[0] = 'ducati'
print(motorcycles)

# Adjuntar elementos a una lista. Se añade al final

motorcycles.append('honda')
print(motorcycles)

# Adjuntar elementos con una lista vacía

motocicletas = []
motocicletas.append('tesla')
print(motocicletas)

# Insertar elementos en una lista, donde queramos
motorcycles.insert(0,'koreana')
print(motorcycles)

# Eliminar elementos de una lista
del motorcycles[0]
print(motorcycles)


# Eliminar elementos de una lista con el elemento de un método pop(). Elimina el último elemento de la lista, pero permite trabajar con él después de quitarlo

popped_motorcycles = motorcycles.pop()

print(motorcycles)
print(popped_motorcycles)

# Se puede sacar cualquier elemento con el método pop()

first_owned = motorcycles.pop(0)
print(f"The first motorcycle I owned was a {first_owned.title()}.")
print(motorcycles)

# Eliminar un elemento por valor

motorcycles.remove('yamaha')
print(motorcycles)

# Método remove()
motorcycles = ['honda', 'yamaha', 'suzuki','ducati']
print(motorcycles)

too_expensive = 'ducati'
motorcycles.remove(too_expensive)
print(motorcycles)
print(f"\nA {too_expensive.title()} is too too expensive for me.")
