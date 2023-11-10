age = 65
if age < 4:
    print("Entrada gratis!")
elif age <18:
    print("La entrada costará 25 euros")
else:
    print("La entrada cuesta 40 euros")



if age < 4:
    price = 0
elif age <18:
    price = 25
elif age < 65:
    price = 40
else:
    price = 20

print(f"El precio de tu entrada es ${price} euros.")

if age < 4:
    price = 0
elif age <18:
    price = 25
elif age < 65:
    price = 40
elif age >=65: # es más concreto utilizar elif que else ya que el segundo puede
    #inducir a errores, hay más garantías que funcinará sólo en las condiciones correctas
    price = 20

print(f"El precio de tu entrada es ${price} euros.")