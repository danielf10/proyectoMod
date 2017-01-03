<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body ng-controller="ContactosController" class="container">

<!--<form action="insertar.php" method="post" name="form" >
  <input type="text" name="id"><br>
  <input type="text" name="nombre"><br>
  <input type="text" name="pw"><br>
  <input type="submit" value="insertar datos">
</form>
-->
<style type="text/css">
  #inputnombre{
    width: 20%;


  }
  body{
    background-image: url(l.jpg);
    color: black;
    
    
  }

 td{
  margin:2%; 
  padding: 2%;
 }

 img{
  display: inline-block;
 }
 #d{
  background-image: url(p.jpg);
  width: 100%;
  padding: 5%;
 }
 #lol{
  width: 30%;

 }
 table{
  width: 80%;
  color:white;
  background:rgba(0,60,190,.2); 
 }
 img{
 
  border-radius: 5%;
 }
 #a{
  width: 90%;

 }
 #b{
  width: 90%;
 }
 #c{
    : 90%;
 }

 
 
</style>

<div class="container">
 <div id="d">pizza</div>
  

  



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Pizzas</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
        
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
        </ul>
      </li>
      <li ><a href="registro.php">regitrar</a></li> 
      <li><a href="iniciasecion.php">iniciar sesion</a> </li>
      <li><a href="tipos.php">Menu</a></li>
       

    </ul>
  </div>
</nav>

<?php

  include ('conexion.php');

  $t = $_GET["articulo"];
  //echo "LE ESTAS PASANDO ".$t;
  $con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");

  $registro=mysql_query("SELECT * FROM producto WHERE tipo=$t ORDER BY nombre",$con);
?>
<table class="table table-bordered ">
<?php
  
  while($reg=mysql_fetch_array($registro)){

   
    
    $im=$reg["imagen"];
    $nombre=$reg["nombre"];
    $precio=$reg["precio"];
    $tamano=$reg["tamano"];
    $cb=$reg["codigoB"];
   echo "<tr>";
    echo "<td><img src=\"administrador/producto/$im \" width='200' height='200' /> </td>";
    echo  "<td>";
    echo "<br>";
    echo "nombre: ". $nombre;
    echo "<br>";
    echo "Precio: $".$precio;
    echo "<br>";
    
    echo "Tamaño: ". $tamano;
    echo "<br>";
   
    
    if(isset($_COOKIE['nombreUsuario'])) {
            echo "<a href='agregar.php?codigo=$cb' onclick='aviso()'>Agregar al carrito</a>";
            echo "<br>";
    }
  }
   echo "</td>";
    echo "</tr>";
  ?>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
      <link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
  




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
