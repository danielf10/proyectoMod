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

<center><p>agregar </p></center>	

<form id="lol" action="agregarvalid.php" method="post"  role="form" name="form"  enctype='multipart/form-data'  >
  


      <div>
      <label for="inputlogin">codigoB</label>
      <input  type="text" class="form-control" placeholder="nombre" name="cb"  required>
    </div>
    <br>

    <div>
      <label for="inputlogin">nombre</label>
      <input  type="text" class="form-control" placeholder="nombre" name="nombre"  required>
    </div>
    <br>

    <p> tipo: 1=normal, 2=d4, 3=bebidas, 4=complementos</p>
     <div >
      <label for="inputcontra">tipo</label>
      <input  type="text" class="form-control" placeholder="tipo" name="tipo"  required>
    </div>
    <br>
    <div >
      <label for="inputcontra">imagen</label>
      <input  type="file"   name="imagen"  required>
    </div>
  <br>

      <div >
      <label for="inputcontra">precio</label>
      <input  type="text" class="form-control" placeholder="$" name="precio"  required>
    </div>

    <div >
      <label for="inputcontra">tamaño</label>
      <input  type="text" class="form-control" placeholder="ch,m,g" name="tamano"  required>
    </div>
    




    <br>

    

    <input type="submit" value="agregar" class="btn btn-Warning">
  </form>
	<?php
	//	if($_GET["errorLogin"]) {
		//	echo "<p>Revisa tu login y contraseña </p>";
		//	echo "<p>".$_GET['errorLogin']."</p>"; 
		//}
	?>


	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   		<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
  




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
