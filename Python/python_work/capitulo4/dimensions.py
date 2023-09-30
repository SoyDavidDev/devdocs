# Tupla.- Valores que no pueden cambiar como inmutables.- Hay que utilizarlas cuando se quiera guardar un conjunto de valores que no deberían cambiar durante la vida de un programa

dimensions = (200, 50)
print(dimensions[0])
print(dimensions[1])

"""
Las tuplas se definen técnicamente por la presencia de una coma, los paréntesis las hacen parecer más claras y legibles. 
Si queremos definir una tupla con un solo elemento, tendremos que incluir una coma
"""
my_t = (3,)

# Pasar en bucle por todos los valores de una dupla.-

for dimension in dimensions:
	print(dimension)

# Sobrescribir una tupla, no se puede modificar, pero sí asignar un nuevo valor
print("Original dimensions: ")
for dimension in dimensions:
	print(dimension)

dimensions = (400, 100)

print("\nModified dimensions: ")
for dimension in dimensions:
	print(dimension)
