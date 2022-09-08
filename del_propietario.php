<?
$id = base64_decode($_REQUEST['id']); 
include 'config/Conexion.php';
$sql="DELETE FROM propietarios
      WHERE id_propietario='$id'";

$consulta=mysqli_query($con,$sql)or die('Error'.$sql);
mysqli_close($con);
echo 'Propietario No. '.$id. 'Borrado';
?>
<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=index.php">
