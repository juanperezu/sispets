<?
$id=$_POST['id'];
$correo=$_POST['correo'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
// Nota validar datos
//$sql="SELECT id_propietario, nombre, telefono, correo FROM propietarios";

include 'config/Conexion.php';
$sql="UPDATE propietarios set nombre='$nombre',telefono='$telefono',correo='$correo'
  WHERE id_propietario='$id'";
$consulta=mysqli_query($con,$sql) or die("Error".$sql);
mysqli_close($con);
echo '<br> Propietario actualizado'.$id;
echo '<br> Nombre'.$nombre;
echo '<br> Correo'.$correo;
?>
<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">

