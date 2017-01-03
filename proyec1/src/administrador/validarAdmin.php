<?php

	include('conexion.php');

	$l = $_POST['log'];
	$p = $_POST['contra'];

	$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");

	

	$sePudo=false;
	
	$registro=mysql_query("SELECT * FROM administrador") or die("problemas en consulta:".mysql_error());
while($reg=mysql_fetch_array($registro)){

		
	
		$login=$reg["login"];
		$pass=$reg["contrasena"];		
		if($l==$login && $p==$pass) {
			echo "si";
			$sePudo=true;
			
			header("Location:inicio.php");
			break;
		}		
	}

	if(!$sePudo) {
		echo "no se pudo ";
		header("Location:inicio.php?errorLogin=si");
	}

?>	