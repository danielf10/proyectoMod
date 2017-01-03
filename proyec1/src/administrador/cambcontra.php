<?php

include("conexion.php");


if($_POST['ncontrasena']==$_POST['rcontrasena']){

if (isset($_POST['ncontrasena']) && !empty($_POST['ncontrasena']) && isset($_POST['rcontrasena']) && !empty($_POST['rcontrasena']) ) {
	# code...

$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");
$contra=$_POST['ncontrasena'];
$log=$_POST['login'];


mysql_query("UPDATE administrador SET contrasena='$contra' WHERE login='$log' ",$con);
echo "dato cambiado";



}
else{
	echo "problemas al insertar";
}
}



 ?>