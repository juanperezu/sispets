<?
include 'head.php';
?>
<header class="masthead">
<div class="container px-4 px-lg-5 h-100">
<div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
<div class="col-lg-8 align-self-end">
<h3 class="text-white font-weight-bold">
<?
echo '<br> Recibiendo petición';
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
echo '<br>nombre '.$nombre;
echo '<br>correo '.$correo;
echo '<br>telefono '.$telefono;
// Pd Valaidar datos
if(empty($nombre) || empty($correo)|| empty($telefono))
{
echo '<br>Los campos Marcados con (*) son obligatorios';
} else{

include 'config/Conexion.php';
if(!$con){
    die("Error en la conexión");
  }
$sql ="INSERT INTO propietarios(nombre,telefono,correo)values('$nombre','$telefono','$correo')";
echo '<br>'.$sql;
$consulta = mysqli_query($con,$sql)
or die("Fallo en la inserción".mysqli_error($con));
mysqli_close($con);
}
?> 
<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=index.php"> 
 </h3>
 <hr class="divider" />
</div>
</div>
</div>
</header>