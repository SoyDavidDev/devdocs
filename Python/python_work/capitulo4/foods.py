#COPIAR UNA LISTA SEPARADA.- 
my_foods = ['pizza', 'falafel', 'carrot cake']
friend_foods = my_foods[:] # si igualamos sin el trozo [:], no serían listas separdas, si no iguales o asociadas, si añado en una, se añade en otra. las dos variables apuntan a la misma lista

my_foods.append('cannoli')
friend_foods.append('ice cream')

print("My favorite foods are:")
print(my_foods)

print("\nMy friend's favorite foods are:")
print(friend_foods)

