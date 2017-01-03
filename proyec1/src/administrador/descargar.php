<html>
<head>
	<title></title>
	<meta charset='utf-8' />
</head>
<body>

<?php
	
	include('conexion.php');

	header('Content-type:application/vnd.ms-excel');
	header('Content-Disposition:attachment; filename=inventario.xls');

	header("Pragma:no-cache");

	$archivo="<table>";
	$archivo.="<tr>";
	$archivo.="<td>Codigo de barras</td>";
	$archivo.="<td>Tipo</td>";
	$archivo.="<td>Precio</td>";
	$archivo.="<td>Tamaño.</td>";
	$archivo.="</tr>";


	$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");


$registro=mysql_query("SELECT * FROM producto ",$con);


while($reg=mysql_fetch_array($registro)){

          
          	
      $archivo.="<tr>";
     
      
        $codigo=$reg["codigoB"];
         $nombre=$reg["nombre"];
         $tipo=$reg["Tipo"];
        
       
        $precio=$reg["precio"];
         $tamano=$reg["tamano"];
         


	
	
		$archivo.="<td>$codigo</td>";
		$archivo.="<td>$tipo</td>";
		$archivo.="<td>$precio</td>";
		$archivo.="<td>$tamano</td>";
		
}		

	$archivo.="</table>";
	echo $archivo;

?>		
</body>
</html>
