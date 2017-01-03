<?php

include("conexion.php");
if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellidos'])&& !empty($_POST['apellidos']) 
&& isset($_POST['tel'])&& !empty($_POST['tel']) && isset($_POST['contraseña'])&& !empty($_POST['contraseña']) && isset($_POST['correo'])&& !empty($_POST['correo']) ) {
	# code...

$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");










mysql_query("INSERT INTO ususario (login,nombre,apellidos,o,contraseña,email) VALUES ('$_POST[login]','$_POST[nombre]','$_POST[apellidos]' ,'$_POST[tel]' ,'$_POST[contraseña]' ,'$_POST[correo]')",$con);
echo "datos insertados";





}

else{
	echo "problemas al insertar";
}


?>