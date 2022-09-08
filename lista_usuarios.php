<?
include 'config/Conexion.php';
?>
<section class="page-section" id="lista_usuarios">
  <div class="container">
<table class="table table-hover"><tr><th>Nombre</th><th>Correo</th><th>Perfil</th></tr>
 <?
$sql="SELECT usuario,correo,perfil from tblusuarios";
$reg =mysqli_query($con,$sql)
or die("Problemas en la conexion");
while($r=mysqli_fetch_array($reg)){
  echo '<tr><td>'.$r['usuario'].'</td>';
  echo '<td>'.$r['correo'].'</td>';
echo '<td>'.$r['perfil'].'</td></tr>';
}// fin mientras
mysqli_close($con);
?> 
</table>
  </div>
</section>
 