<? include 'head.php';?>
<section class="page-section" id="lista_propietarios">
<div class="container">
 <a class="nav-link" href="index.php#lista_propietarios">Regresar</a>  
<?
$id = base64_decode($_REQUEST['id']); 
include 'config/Conexion.php';
  $sql="SELECT id_propietario, nombre, telefono, correo FROM propietarios
        WHERE id_propietario ='$id'";
  $consulta=mysqli_query($con,$sql);
  while($reg=mysqli_fetch_array($consulta)){
       $nombre=$reg['nombre'];
       $correo =$reg['correo'];
        $telefono =$reg['telefono'];
   }// fin mientras
echo '<table class="table table-hover">';
echo '<tr><th>'.$nombre.'</th><th>'.$correo.'</th><th>'.$telefono.'</th></tr>';
echo '</table>';
?>
<div class="row gx-4 gx-lg-5 justify-content-center mb-5">Listado de mascotas</div>
    <table class="table table-hover">
     <tr><th>Código</th><th>Nombre</th><th>Especie</th></tr>
<?
$sql="SELECT id, nombre, especie FROM mascotas
        WHERE propietario ='$id'";
  $consulta=mysqli_query($con,$sql);
  while($reg=mysqli_fetch_array($consulta)){
     echo '<tr><td>'.$reg['id'].'</td><td>'.$reg['nombre'].'</td>';
     echo '<td>'.$reg['especie'].'</td>';
      echo '<td><a href="co_mascota_servicios.php?id='.base64_encode($reg['id']).'">
         <img src="img/buscar.png"></td></tr>';
  }
echo '</table>';
mysqli_close($con);
?><div> </section>