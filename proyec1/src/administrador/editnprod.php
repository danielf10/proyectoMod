<?php

include("conexion.php");


$precioNuevo=$_POST["precio"];
	$tamanonuevo=$_POST["tamano"];
	
	$cod=$_POST["codB"];




 $rutaEnServidor='producto';
	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreImagen=$_FILES['imagen']['name'];
	echo $nombreImagen;


	# code...

$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");






if($nombreImagen=="") {
		echo "Misma imagen";
		mysql_query("UPDATE producto SET precio='$precioNuevo', tamano='$tamanonuevo' WHERE codigoB='$cod'",$con);		
	    echo "Producto editado exitosamente";
		}


else {
		$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
		move_uploaded_file($rutaTemporal, $rutaDestino);
		mysql_query("UPDATE producto SET precio='$precioNuevo', tamano='$tamanonuevo', imagen='$nombreImagen' WHERE codigoB='$cod'",$con);
		
		
			echo "Producto editado exitosamente";
		}











 ?>







	