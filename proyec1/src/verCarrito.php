<?php

	session_start();
	$carrito=$_SESSION['carrito'];
	if(isset($carrito)) {
		?>
		<div class="container">
		<?php
		echo "Articulos en el carrito";
		echo "<br>";
		$i=1;
		echo "<form action='compraprod.php' method='post' />";
		foreach($carrito as $key => $value) {
			$imagen=dameImagen($key);
			echo "<img src='administrador/producto/$imagen' width='200' height='250' />";
			echo "Cantidad";
			echo "<select name='elemento_$i'>";
				while($value>=0) {
					echo "<option value='$value'>$value</option>";
					$value--;
				}
			echo "</select>";
			echo "<br>";
			$i++;
		}
		$i-=1;
		echo "<input type='hidden' name='oculto' value='$i' />";
		echo "<input type='submit' value='Pagar' />";

		echo "</form>";
	} else {
		echo "No hay articulos que mostrar";
	}

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<a href='salir3.php'>Cerrar sesion</a>";
	echo "<br>";
	echo "<a href='index.php'>Seguir comprando</a>";
	echo "<br>";
	

function dameImagen($key) {
	include("conexion.php");

	$nombre="";
	 $con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");

  $registro=mysql_query("SELECT * FROM producto WHERE codigoB='$key'",$con);

  while($reg=mysql_fetch_array($registro)){

		$nombre=$reg["imagen"];
	}
	return $nombre;
}
echo "<div>"
?>