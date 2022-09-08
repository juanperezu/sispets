
<?
include 'config/Conexion.php';
?>
<section class="page-section" id="lista_mascotas">
  <div class="container">
  <div class="col-md-4 mx-auto inline">
 <form action ="index.php#lista_mascotas" method="post" class="form-control ">
  <input type="text" name ="campo" 
        placeholder="Ingrese criterio de búsqueda" 
        class="form-control">
  <button type="submit" class="btn btn-ligth">Buscar</button>
</form>
    </div> 
<table class="table table-hover"><tr><th>id</th><th>Nombre</th><th>genero</th><th>especie</th><th>+</th></tr>
 <?
$campo = $_POST['campo'];
$sql="SELECT id, nombre, especie, correo 
FROM mascotas where id = '$campo'  ;
$reg =mysqli_query($con,$sql)
or die("Problemas en la conexion");
while($r=mysqli_fetch_array($reg)){
  echo '<tr><td>'.$r['id'].'</td>';
  echo '<td>'.$r['especie'].'</td>';
  echo '<td>'.$r['nombre'].'</td>';
  echo '<td>'.$r['nacimiento'].'</td>';
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