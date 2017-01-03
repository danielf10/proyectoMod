<?php

	include('conexion.php');
	
	$cod = $_POST["codB"];

	

	$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");

	mysql_query("DELETE FROM producto WHERE codigoB='$cod'",$con);		
	    echo "Producto eliminado exitosamente";

	





?>