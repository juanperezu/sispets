<?
session_start();
$usuario=$_REQUEST['usuario'];
$clave=$_REQUEST['clave'];
 $clave_crypt="";
if(isset($usuario)&& isset($clave) ){
  include 'config/Conexion.php';
  
  $salt=substr($usuario,0,2);
  $clave_crypt=crypt($clave,$salt);
  $sql="SELECT usuario,clave,perfil FROM tblusuarios
        WHERE usuario ='$usuario' AND clave='$clave_crypt'";
  $consulta=mysqli_query($con,$sql);
  $nfilas=mysqli_num_rows($consulta);
  while($reg=mysqli_fetch_array($consulta)){
       $_SESSION["usuario_valido"]=$reg['usuario'];
       $_SESSION["perfil"]=$reg['perfil'];
    
  }// fin mientras
  mysqli_close($con);
  if($nf6ilas>0){
    $usuario_valido=$usuario;
    $_SESSION['usuario_valido']=$usuario_valido;
  }// fin si
 
}// fin si hay usuario y clave
?>
<!DOCTYPE html>
<html lang="en">
    <? 
    include 'head.php'; 
    ?>
    <body id="page-top">
        <!-- Navigation-->
     <?
       include "menu.php";
     ?>
        <!-- Masthead-->
      <? include 'presentacion.php';
     ?>  
       <!--Login -->
      <?include 'login.php'?>
        <!-- About-->
      <? include 'acerca.php';?>  
        <!-- Services-->
        <? include 'servicios.php';?>   
        <!-- Portfolio-->
        <?include 'portafolio.php'?>
         <?if (isset($_SESSION["usuario_valido"])&& ($_SESSION['perfil'])=='1'){
           include 'lista_usuarios.php';
          }?>
        <?
       include 'lista_propietarios.php';
       include 'lista_mascotas.php';
       ?>


        <!-- Call to action-->
      
        <!-- Contact-->
        <?include 'contacto.php'?>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - juanperezu.com <? echo phpVersion()?> </div>        </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
     
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
