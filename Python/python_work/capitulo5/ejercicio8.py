""" HOLA, ADMIN
Haga una lista de cinco o más nombres de usuario, incluyendo el nombre 'admin'
Imagine que está escribiendo código que imprimirá un mensaje para cada usuario
cuando inicien sesión en un sitio web. 
Pase en bucle por la lista e imprima un saludo para cada usuario.
Si el nombre del usuario es admin, imprima un saludo especial
de lo contrario, imprima un saludo genérico """

usuarios = ['admin', 'juan', 'david', 'pepe', 'julia']

for usuario in usuarios:
    if usuario == 'admin':
        print(f"Hola {usuario}, quieres ver el informe de estado?")
    else:
        print(f"Hola, {usuario}, gracias por volver a entrar!")


""" SIN USUARIOS
añada una prueba uf al programad el ejercicio anterior para asegurarse de que la lista
no está vacía
si la lista está vacía, necesitamos encontrar algún usuario 
borramos todos los nombres del usuario de la lista para ver el mensaje"""
usuarios = []
if usuarios:
    for usuario in usuarios:
        print(f"Hola, {usuario}, gracias por volver a entrar!")
else:
    print("Necesitamos encontrar algún usuario!")

""" Comprobar nombres de usuario 
haga una lista con cinco o más nombres de usuario llamada current_users
otra lista de cinco nombres new_users. que coincida alguno de ellos
pasar bucle por la lista new users para ver si cada nuevo nombre está ya usado. 
si lo está imprimomos un mensaje diciendo que tendrá que introducir otro nombre, si no
se ha usado decimos que está disponible
asegurarse de que su comparación no distingue entre mayusc y minusc. 
"""
# Lista de usuarios actuales
current_users = ['Juan', 'Ana', 'Pedro', 'Elena', 'Carlos']

# Lista de nuevos usuarios
new_users = ['María', 'Carlos', 'Luis', 'JUAN', 'ELENA']

current_users_lower = [user.lower() for user in current_users]

for new_user in new_users:
    if new_user.lower() in current_users_lower:
        print(f"Nombre {new_user} repetido, intenta con otra opción")
    else:
        print(f"Nombre {new_user} disponible")

""" Números ORDINALES EN INGLÉS
guarde los números del 1 al 9 en una lista
pasar bucle por la lista
condición para saber si st nd o rd o th """

numeros = [1,2,3,4,5,6,7,8,9]

for numero in numeros:
    if numero == 1:
        print(f"{numero}st")
    elif numero == 2:
        print(f"{numero}nd")
    elif numero == 3:
        print(f"{numero}rd")
    else:
        print(f"{numero}th")




