""" Colores de ALIENS
Imagine que acaba de disparar a un alien en un juego. Cree una variable
llamada color_alien y asígnele como valor 'verde', 'amarillo' o 'rojo'
If para comporbar si el color del alien es verde. 5 puntos.
Escriba una versión del programa que pase la prueba if y otra que no. 
la que no, no tendrá salida.
 """
color_alien = 'verde'

if color_alien == 'verde':
    print("Has ganado 5 puntos")

color_alien = 'rojo'

if color_alien == 'verde':
    print("Has ganado 5 puntos")

""" Si el color alien es verde, imprima un mensaje informando al jugador que
ha ganado 5 puntos. 
si no es verde, 10 puntos 
una versión con if y otra con else"""

if color_alien == 'verde':
    print("Has ganado 5 puntos")
else:
    print("Has ganado 10 puntos")

""" ahora en if elif y else 
si alien verde 5 puntos
si alien amarillo 10 puntos
si alien rojo 15 puntos"""
if color_alien == 'verde':
    print("Has ganado 5 puntos")
elif color_alien == 'amarillo':
    print("Has ganado 10 puntos")
elif color_alien == 'rojo':
    print("Has ganado 15 puntos")

""" 5.6.- Etapas vitales.
Escriba una cadena if-elif-else para determinar la etapa vital de una persona.
Atribuya un valor a la variable edad y:
Si menos de 2 años, es un bebé.
Si entre 2 y 4 años, infante
Si mínimo 4 y menos de 13, niño
Si mínimo 13 y menos de 20, adolescente
Si mínimo 20, pero no llega a 65, adulto
si 65 o más, anciano """

age = 2
if age < 2:
    print("Es un bebé")
elif age < 4:
    print("Es un infante")
elif age < 13:
    print("Es un niño")
elif age < 20:
    print("Es un adolescente")
elif age < 65:
    print("Es un adulto")
elif age >=65:
    print("Es un anciano")

""" 5.7.- FRUTA FAVORITA
Haga una lista con sus frutas favoritras y escriba una serie de 
sentencias if independientes que comprueben ciertas frutas en su lista
haga una lista de frutas favoritas
cinco sentencias if, si está, pues sí que te gusta los platanos """

frutas_favoritas = ['platanos','melocotón', 'kiwi', 'uvas', 'naranja']

if 'platanos' in frutas_favoritas:
    print(f"Sí que te gustan los {frutas_favoritas[0]}")
if 'melocotón' in frutas_favoritas:
    print(f"Sí que te gustan el {frutas_favoritas[1]}")
if 'kiwi' in frutas_favoritas:
    print(f"Sí que te gustan el {frutas_favoritas[2]}")
if 'uvas' in frutas_favoritas:
    print(f"Sí que te gustan las {frutas_favoritas[3]}")
if 'naranja' in frutas_favoritas:
    print(f"Sí que te gustan la {frutas_favoritas[4]}")