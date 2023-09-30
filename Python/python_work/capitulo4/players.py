# Partir una lista
players = ['charles', 'martina', 'michael', 'florence', 'eli']
print(players[0:3]) # mostraría desde charles hasta michael

# si omitimos el primer número, empieza desde el principio de la lista
print(players[:2]) # aquí mostraría desde charles hasta martina

# si omitimos el segundo número, empezará desde donde digamos hasta el final de la lista
print(players[2:]) #aquí mostraría desde michael hasta eli

# para sacar los números que queramos empezando desde atrás de la lista
print(players[-3]) # aquí mostraría SÓLO michael.- 
print(players[-3:]) # aquí mostraría DESDE michael.- 

# se puede añadir un tercer valor entre los paréntesis que indican un trozo. Dice cuántas veces tiene que saltar entre elementos en el rango especificado

# Pasar en bucle por un trozo

print("Here are the first three players on my team:")
for player in players[:3]:
	print(player)

