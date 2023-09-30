# Ordenar una lista de manera permanente con el método sort() cambio permanente

cars = ['bmw', 'audi', 'toyota', 'subaru']
cars.sort()

print(cars)

# orden inverso. cambio permanente

cars.sort(reverse = True)
print(cars)

# Cambio temporal con la función sorted() .-
cars = ['bmw', 'audi', 'toyota', 'subaru']
print("Here is the original list:")
print(cars)

print("\nHere is the sorted list:") #lo ordena temporalmente en el método, pero en la lista original se mantiene.- Admite (reverse = True)
print(sorted(cars))

print("\nHere is the original list again:")
print(cars)

# Para invierte el orden de la lista, no ordena alfabeticamente

cars.reverse()
print(cars)

# Descubrir la longitud de una lista

print(len(cars))

