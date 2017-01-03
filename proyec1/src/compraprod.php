<?php

	//Archivo que compra lo que tenemos en el carrito
	include("conexion.php");

	session_start();
	$carro=$_SESSION['carrito'];

	$oculto=$_POST["oculto"];
	echo $oculto;
	echo "<br>";

	$j=1;
	$cantidades=array();
	while($j<=$oculto) {
		$var=$_POST["elemento_$j"];
		//echo $var;
		$cantidades[$j]=$var;
		//echo "<br>";
		$j++;
	}

	print_r($cantidades);

	$k=1;
	$total=0;
	if(!isset($carro)) {
		header("Location:verCarrito.php");
	} else {
		foreach ($carro as $key => $value) {
			$p=damePrecio($key);
			$carro[$key]=$cantidades[$k];
			$total+=($p*$value);
			//$consulta="UPDATE prenda SET ch=ch-$cantidades[$k] WHERE codigoBarras=$key";
			$k++;
		}
	}

function damePrecio($key) {
	include('conexion.php');
	$precio="";
	 $con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");
$registro=mysql_query("SELECT * FROM producto WHERE codigoB='$key'",$con);

	

	while($reg=mysql_fetch_array($registro)){
	
		$precio=$reg["precio"];
	}
	return $precio;
}

	echo "Compra exitosa";
	session_unset();
	//session_destroy();
	

?>

