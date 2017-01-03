<?php

include("conexion.php");
if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellidos'])&& !empty($_POST['apellidos']) 
&& isset($_POST['telefono'])&& !empty($_POST['telefono']) && isset($_POST['contrasena'])&& !empty($_POST['contrasena']) && isset($_POST['correo'])&& !empty($_POST['correo']) ) {
	# code...

$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");


mysql_query("INSERT INTO usuario (login,nombre,apellidos,telefono,contrasena,correo) VALUES ('$_POST[login]','$_POST[nombre]','$_POST[apellidos]' ,'$_POST[telefono]' ,'$_POST[contrasena]' ,   '$_POST[correo]')",$con);
echo "datos insertados";



}
else{
	echo "problemas al insertar";
}



 ?>