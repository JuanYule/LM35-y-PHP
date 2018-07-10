import serial
import time

arduino=serial.Serial('/dev/ttyACM0',baudrate=9600,timeout=1.0)
#Provocamos un reseteo manual de la placa
arduino.setDTR(False)
time.sleep(1)
arduino.flushInput()
arduino.setDTR(True)

while True:
	lectura=arduino.readline() #capturamos lo que envia arduino
	file=open("/var/www/html/LM35/LM35.txt","w")  #Abrimos el archivo de texto
	file.write(lectura) #Escribimo en el archivo el dato de arduino
	file.close()  #cerramos el archivo
	print (lectura)
