<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body class="container">
<style type="text/css">
	
	img{
		border-radius: 5%;
	}
</style>
<table class="table table-bordered table-hover">
<?php


	include('conexion.php');
	
	//echo "<table class="table table-bordered table-hover">";
	echo "<tr>";
	echo "<td>Imagen del artículo </td>";
	echo "<td>Codigo de barras</td>";
	echo "<td>nombre</td>";
	echo "<td>tipo</td>";
	echo "<td>Precio</td>";
	echo "<td>Tamaño.</td>";

	
	echo "</tr>";



	$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");


$registro=mysql_query("SELECT * FROM producto ",$con);

          
		

          while($reg=mysql_fetch_array($registro)){

          
          	
      echo "<tr>";
     
      
        $codigo=$reg["codigoB"];
         $nombre=$reg["nombre"];
         $tipo=$reg["Tipo"];
        
       
        $precio=$reg["precio"];
         $tamano=$reg["tamano"];
         $im=$reg["imagen"];
         

	
		 
		echo "<td><img src='producto/$im' width='150' heigth='200'/></td>";
		echo "<td>$codigo</td>";
		echo "<td>$nombre</td>";
		echo "<td>$tipo</td>";
		echo "<td>$precio</td>";
		echo "<td>$tamano</td>";
		
		echo "</tr>";
	}


	echo "</table>";

?>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   		<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
  




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>

