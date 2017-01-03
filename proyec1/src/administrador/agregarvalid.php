<?php

	include('conexion.php');

	$rutaEnServidor='producto';
	$rutaTemporal=$_FILES['imagen']['tmp_name'];
	$nombreImagen=$_FILES['imagen']['name'];
	$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
	move_uploaded_file($rutaTemporal, $rutaDestino);

if (isset($_POST['cb']) && !empty($_POST['cb']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['tipo'])&& !empty($_POST['tipo']) 
 && isset($_POST['precio'])&& !empty($_POST['precio']) && isset($_POST['tamano'])&& !empty($_POST['tamano']) ) {


	$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");

	
	
mysql_query("INSERT INTO producto (codigoB,nombre,tipo,imagen,precio,tamano) VALUES ('$_POST[cb]','$_POST[nombre]','$_POST[tipo]','$nombreImagen' ,'$_POST[precio]' ,'$_POST[tamano]')",$con);
echo "datos insertados";



}
else{
	echo "problemas al insertar";
}

	


?>