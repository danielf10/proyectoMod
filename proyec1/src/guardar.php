<?php

include("conexion.php");
if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellidos'])&& !empty($_POST['apellidos']) 
&& isset($_POST['telefono'])&& !empty($_POST['telefono']) && isset($_POST['contraseña'])&& !empty($_POST['contraseña']) && isset($_POST['correo'])&& !empty($_POST['correo']) ) {
	# code...

$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");


mysql_query("INSERT INTO Usuario (login,nombre,apellidos,telefono,contraseña,correo) VALUES ('$_POST[login]','$_POST[nombre]','$_POST[apellidos]' ,'$_POST[telefono]' ,'$_POST[contraseña]' ,'$_POST[correo]')",$con);
echo "datos insertados";

header("location:ver.php");

}
else{
	echo "problemas al insertar";
}



 ?>