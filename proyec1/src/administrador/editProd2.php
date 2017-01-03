<?php

  include('conexion.php');

  $cb=$_POST["cb"];
  echo $cb;
$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");


$consulta=mysql_query("SELECT * FROM producto WHERE codigoB='$cb'",$con);
  while($reg=mysql_fetch_array($consulta)){
      
        $tipo=$reg["nombre"];
        $im=$reg["imagen"];
        $pre=$reg["precio"];
        $tam=$reg["tamano"];
      }
  
  
?>
<html>
	<head>
		<meta charset='utf-8' />
		

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
<body class="container">


<style type="text/css">
	

	#lol{
  width: 30%;


 }
 p{
    background: rgba(0,0,0,.5);
    color: white;
  }
  
</style>

<center><p> editar </p></center>	

<form id="lol" action="editnprod.php" method="post"  role="form" name="form" enctype='multipart/form-data'   >
  
   <center> <div>
      <?php
            echo "<img src='producto/$im' width='50' height='100' />";
          ?>
    </div>
    </center>
    <br>

      <div>
      <label for="inputlogin"> precio</label>
      <input  type="text" class="form-control" placeholder=" $ " name="precio"  required>
    </div>
    <br>

    <div>
      <label for="inputlogin">tamaño</label>
      <input  type="text" class="form-control" placeholder="tamaño" name="tamano"  required>
    </div>
    <br>

    <div>
      <label for="inputlogin">nueva imagen</label>
      <input  type="file" name="imagen"   >
    </div>
    <br>
 
  
  

  <div>
      
    <input type="hidden" name="codB" value=<?php echo $cb; ?>>
    </div>
    <br>

    <input type="submit" value="editar" class="btn btn-Warning">
  </form>

    
	




 


	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   		<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
  




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
