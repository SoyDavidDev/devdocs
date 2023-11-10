""" 5.2.- Más pruebas condicionales. Haz True y False para cada una de estas
condiciones. 
Pruebas de igualdad y desigualdad con cadenas.
Pruebas con el método lower()
Pruebas numéricas que impliquen igualdad y desigualdad, mayor que y menor que,
mayor o igual que y menor o igual que. 
Pruebas con las palabras clave and y or. 
Prueba para comprobar si un elemento está en una lista. 
Prueba para comprobar si un elemento no está en una lista. 
 """
cadena1 = 'Hola'
cadena2 = 'Mundo'
cadena3 = 'Hola'

#IGUALDAD
print(cadena1 == cadena3)
print(cadena2 == cadena3)

#DESIGUALDAD
print(cadena1 != cadena3)
print(cadena2 != cadena3)

#lower()
cadena4 = 'Python'
cadena5 = 'python'

print(cadena4.lower() == cadena5.lower())

#PRUEBAS NUMÉRICAS
num1 = 10
num2 = 5
#igualdad
print(num1 == num2)
#desigualdad
print(num1 != num2)
#mayor que
print(num1 > num2)
#menor que
print(num1 < num2)
#mayor o igual que
print(num1 >= num2)
#menor igual que
print(num1 <= num2)

#pruebas con las palabras clave and y or. 
condicion1 = True
condicion2 = False

print(condicion1 and condicion2)
print(condicion1 or condicion2)

#prueba para saber si un elemento está en la lista
mi_lista = [1, 2, 3, 4, 5]

item1 = 4
item2 = 6

print(item1 in mi_lista)
print(item2 in mi_lista)

#prueba para saber si un elemento no está en mi lista. 
print(item1 not in mi_lista)
print(item2 not in mi_lista)
