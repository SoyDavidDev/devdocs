requested_topping = 'mushrooms'
if requested_topping != 'anchovies':
    print('Hold the anchovies!')


requested_toppings = ['mushrooms', 'anchovies', 'onions', 'pineapple']
if 'mushrooms' in requested_toppings:
    print('Tenemos champis!')

if 'paella' not in requested_toppings:
    print('No hay PAella!!')

""" si necesitamos ejecutar sólo una línea de código, usamos if elif else
si queremos ejecutar todas, utilizamos if separados. """

for requested_topping in requested_toppings:
    print(f"Adding {requested_topping}")


requested_toppings = []
if requested_toppings:
    for requested_topping in requested_toppings:
        print(f"Adding {requested_topping}")
else:
    print("Are you sure you want a plain pizza?")

available_toppings = ['mushrooms', 'olives', 'green peppers', 'pepperoni',
                      'pineapple', 'extra cheese']
requested_toppings = ['mushrooms', 'french fries', 'extra cheese']

for requested_topping in requested_toppings:
    if requested_topping in available_toppings:
        print(f"Adding {requested_topping}")
    else:
        print(f"Sorry, we don't have {requested_topping}")

