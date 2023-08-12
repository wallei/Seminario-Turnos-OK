#leer el archivo de entrada
entradaArchivo = open("f1.txt", "rt")
#leer el contenido del archivo en una cadena
texto = entradaArchivo.read()
#reemplazar todas las ocurrencias de la cadena requerida
texto = texto.replace('gode', 'siburucha')
#cerrar el archivo de entrada
entradaArchivo.close()
 
#abrir el archivo de entrada en modo de escritura
entradaArchivo = open("f1.txt", "wt")
#sobreescribir el archivo de entrada con los datos resultantes
entradaArchivo.write(texto)
#cerrar el archivo
entradaArchivo.close()
int value =1