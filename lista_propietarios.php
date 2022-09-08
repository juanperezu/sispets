
<?
include 'config/Conexion.php';
?>
<section class="page-section" id="lista_propietarios">
  <div class="container">
  <div class="col-md-4 mx-auto inline">
 <form action ="index.php#lista_propietarios" method="post" class="form-control ">
  <input type="text" name ="campo" 
        placeholder="Ingrese criterio de búsqueda" 
        class="form-control">
  <button type="submit" class="btn btn-ligth">Buscar</button>
</form>
    </div> 
<table class="table table-hover"><tr><th>id</th><th>Nombre</th><th>telefono</th><th>correo</th><th>+</th></tr>
 <?
$campo = $_POST['campo'];
$sql="SELECT id_propietario, nombre, telefono, correo 
FROM propietarios where id_propietario like '$campo%' 
     or nombre like '$campo%'
     or telefono like '$campo%'
     or correo like '$campo%'";
$reg =mysqli_query($con,$sql)
or die("Problemas en la conexion");
while($r=mysqli_fetch_array($reg)){
  echo '<tr><td>'.$r['id_propietario'].'</td>';
  echo '<td>'.$r['nombre'].'</td>';
  echo '<td>'.$r['telefono'].'</td>';
  echo '<td>'.$r['correo'].'</td>';
  // Encriptar base64_encode($var)
  echo '<td><a href="co_propietario.php?id='.base64_encode($r['id_propietario']).'">
         <img src="img/buscar.png"></td>';
  echo '<td><a href="del_propietario.php?id='.base64_encode($r['id_propietario']).'">
         <img src="img/delete.png"></td>';

   echo '<td><a href="co_propietarios_mascota.php?id='.base64_encode($r['id_propietario']).'">
         <img src="img/mascota.png"></td></tr>';
 }// fin mientras
mysqli_close($con);
?> 
</table>
  </div>
</section>