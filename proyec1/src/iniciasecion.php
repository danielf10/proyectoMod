<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body ng-controller="ContactosController">

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
    background-image: url(naranja.jpg);
    
    
  }

 td{
  margin:5%; 
 }

 img{
  display: inline-block;
 }
 #d{
  background-image: url(piz.jpg);
  width: 100%;
  padding: 5%;
 }
 #lol{
  width: 30%;

 }
 
 
</style>

<div class="container">
 <div id="d">videogame</div>
  

  



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
      <li><a href="iniciasecion.php  ">iniciar sesion</a> </li>
      <li><a href="tipos.php">Menu</a></li>
       

    </ul>
  </div>
</nav>




<center>
<form id="lol" action="validaUsuario.php" method="post"  role="form" name="form" enctype="application/x-www-form-urlencoded"  >
  




    <div>
      <label for="inputlogin">login</label>
      <input  type="text" class="form-control" placeholder="login" name="log"  required>
    </div>
    <br>


      <div >
      <label for="inputcontra">contraseña</label>
      <input  type="text" class="form-control" placeholder="contraseña" name="contra"  required>
    </div>

    <br>

    

    <input type="submit" value="inicio" class="btn btn-Warning">
  </form></center>








   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
      <link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
  




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
