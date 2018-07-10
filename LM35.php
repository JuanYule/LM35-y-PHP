<html>
 <head>
  <title>Sebastian Yule</title>
  <meta charset="utf-8">
 </head>
 <body>
 <?php
	$prueba=fopen("LM35.txt","r") or die ("Error al leer archivo"); //Se abre el abre el archivo .txt y se almacena en prueba, en caso de error aparece mensaje
 	echo '<p>Temperatura LM35 con Arduino, PHP y Python</p>';	//Mensaje 
	while(!feof($prueba)){
		$linea=fgets($prueba);		//se obtiene el texto del .txt
		$saltodelinea=nl2br($linea);
		echo $linea;			//Imprime el salto de linea
	}

	$self=$_SERVER['PHP_SELF'];	//Reinicio automatico de pagina
		header("refresh:5; url=$self");		//Tiempo de reinicio atomatico y la direccion de la pagina
 ?>
 </body>
</html>
