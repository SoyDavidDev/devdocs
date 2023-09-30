"""
3.4.- LISTA DE INVITADOS. Si pudiese invitar a cualquiera, vivo o muerto, a cenar, a quién invitaría. Haga una lista de al menos tres personas a las que le gustaría invitar
a una cena y úsela para imprimir un mensaje para cada persona invitándole a cenar. Python
"""

invitados = ['Stephen King', 'Edgar A.Poe', 'Phillip K. Dick']

mensaje0 = f"Querido/a {invitados[0]}, te invito cordialmente a cenar conmigo"
mensaje1 = f"Querido/a {invitados[1]}, te invito cordialmente a cenar conmigo"
mensaje2 = f"Querido/a {invitados[2]}, te invito cordialmente a cenar conmigo"

print(mensaje0)
print(mensaje1)
print(mensaje2)

"""
3.5. CAMBIAR LISTA DE INVITADOS.-
"""

popped_invitados = invitados.pop()

print(f"El invitado {popped_invitados}, lamentablemente no podrá asistir.")

invitados.append('H.P.Lovecraft')
mensaje0 = f"Querido/a {invitados[0]}, te invito cordialmente a cenar conmigo"
mensaje1 = f"Querido/a {invitados[1]}, te invito cordialmente a cenar conmigo"
mensaje2 = f"Querido/a {invitados[2]}, te invito cordialmente a cenar conmigo"

print(mensaje0)
print(mensaje1)
print(mensaje2)

"""
3.6.- MÁS INVITADOS.-	
"""

print(f"Hay una mesa más grande, por lo que informamos {invitados[0]}, {invitados[1]}, {invitados[2]}, que enseguida os haremos saber los nuevos comensales.")

invitados.insert(0, 'Michael Connelly')
invitados.insert(2, 'Isaac Asimov')
invitados.append('George Orwell')

print(invitados)

"""
3.7.- REDUCIR LA LISTA DE INVITADOS
"""

print("Hay una mesa más pequeña, al final sólo podrán venir dos")

print(popped_invitados)	

popped_invitados = invitados.pop()
print(popped_invitados)	

popped_invitados = invitados.pop()
print(popped_invitados)	

popped_invitados = invitados.pop()
print(popped_invitados)	

popped_invitados = invitados.pop()
print(popped_invitados)	


print(invitados)

print(f"Querríamos informar, {invitados[0]}, {invitados[1]}, siguen invitados al fiestón.")

del invitados[0]
del invitados[0]


print(invitados)

"""
3.8.- VER EL MUNDO. 
"""

lugares = ['San Sebastian', 'Zarautz', 'Biarritz', 'Cantabria', 'Fuerteventura']
print("Here is the original list:")
print(lugares)

print("Orden alfabético sin modificar la lista original")
print(sorted(lugares))

print("Here is the original list:")
print(lugares)

print("Lista en orden alfabético inverso sin modificar la lista original")
print(lugares)
lugares_ord_temporalmente_desc = sorted(lugares, reverse = True)
print(lugares_ord_temporalmente_desc)
print(lugares)

print("Cambiar el orden de la lista")
lugares.reverse()
print(lugares)

print("Cambiar el orden de la lista, de nuevo")
lugares.reverse()
print(lugares)

print("Ordenar alfabéticamente.")
lugares.sort()
print(lugares)

"""
3.8.- INVITADOS A LA CENA
"""

invitados = ['Stephen King', 'Edgar A.Poe', 'Phillip K. Dick']
print(len(invitados))




























