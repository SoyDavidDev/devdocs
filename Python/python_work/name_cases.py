"""
2.3 Mensaje personal.- Use una vriable para representar el nombre d euna persona e imprima un mensaje para esa persona. 
El mensaje debería ser sencillo, por ejemplo: Hola, David, ¿te gustaría aprender Python hoy?
"""
name = "David"
print(f"Hola, {name}, ¿te gustaría aprender Python hoy?")

"""
2.4 GRAFÍA DE NOMBRES: Use una variable para representar el nombre de una persona e imprima ese nombre en minúsculas, mayúsculas
y con mayúscula inicial
"""

last_name = "Sánchez"
full_name = f"{name} {last_name}"

print(full_name.lower())
print(full_name.upper())
print(full_name.title())

"""
2.5 CITA CÉLEBRE: Busque una cita de un personaje al que admire. Imprima la cita y el nombre del autor.
"""

print('Una de las frases más conocidas de Marco Aurelio es: \n\t"La felicidad de tu vida depende de la calidad de tus pensamientos."')

"""
2.6 CITA CÉLEBRE2: Del ejercicio anterior, represente el nombre de la persona usando una variable llamada famous_person. Después, 
componga el mensaje y represéntelo con una nueva variable llamada message. Imprima su mensaje. 
"""

famous_person = "Marco Aurelio"
message = f'Una de las frases más conocidas de {famous_person} es: \n\t"La felicidad de tu vida depende de la calidad de tus pensamientos"'

print(message)

"""
2.7 ELIMINAR ESPACIOS DE NOMBRES: Use una variable para representear el nombre de una persona e incluya algunos caracteres de espacio en blanco al principio
y al final del nombre. Asegúrese de usar cada combinación de caracteres, t y n al menos una vez. imprima el nombre una vez, de modo que se muestren los espacios de alrededor. 
usar funciones strip()
"""

name = " David "
message = f"Hola {name}, cómo estás?"
print(message)

message = f"Hola {name.lstrip()}, cómo estás?"
print(message)

message = f"Hola {name.rstrip()}, cómo estás?"
print(message)

message = f"Hola {name.strip()}, cómo estás?"
print(message)
