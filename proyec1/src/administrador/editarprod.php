<html>
  <header>
    
  </header>
  
  <body>
    <?php 
      include('conexion.php');
    ?>



    <p>Edita un producto</p>
    <form action='editProd2.php' method='POST'> 
    <table>
      <tr> 
      <td>
      <select name="cb">
      <?php



$con=mysql_connect($host,$user,$pw) or die("problema al conectar");
mysql_select_db($db,$con) or die("problema db");


$registro=mysql_query("SELECT * FROM producto JOIN tipo ON tipo=id",$con);
          while($reg=mysql_fetch_array($registro)){
      
     
      
        $codigo=$reg["codigoB"];
        $im=$reg["imagen"];
        $tipo=$reg["nombre"];
    
        echo "<option value='$codigo'>$codigo - $im - $tipo </option>";
      }

      ?>
      </select>

      </tr> 
      <tr>
        <td><input type="submit" value="Aceptar" />
        </td>
      </tr>   

    </table>
      



    </form>
  </body>
</html>