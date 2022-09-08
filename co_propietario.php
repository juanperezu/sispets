<?
include 'head.php';
/*
Desencripar  $dato = base64_decode($var); 
*/
$id = base64_decode($_REQUEST['id']); 
include 'config/Conexion.php';
  $sql="SELECT id_propietario, nombre, telefono, correo FROM propietarios
        WHERE id_propietario ='$id'";
  $consulta=mysqli_query($con,$sql);
  $nfilas=mysqli_num_rows($consulta);
  while($reg=mysqli_fetch_array($consulta)){
       $nombre=$reg['nombre'];
       $correo =$reg['correo'];
        $telefono =$reg['telefono'];
    
   }// fin mientras
  mysqli_close($con);
?>
<section class="page-section" id="editarcontacto">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Contacto</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Registre sus datos de contacto</p>
             <a class="nav-link" href="index.php">Regresar</a>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                       <form id="contactForm" 
                         action="editar_propietario.php" method="post" >
                         <!--Id solo lectura-->
                          <div class="form-floating mb-3">
                                <input class="form-control" 
                                  id="id" type="text"
                                  name="id"
                                  value="<?echo $id;?>"
                                  placeholder="id..."
                                  data-sb-     validations="required" readonly />
                                <label for="name">Código del cliente</label>
                          <div class="invalid-feedback" data-sb-feedback="name:required">
                           Id </div> </div>
                         
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                  id="name" type="text"
                                  name="nombre"
                                  value="<?echo $nombre;?>"
                                  maxlength="40"
                                  placeholder="Ingrese su nombre..."
                                  data-sb-validations="required" />
                              
                                <label for="name">Nombre Completo</label>
                          <div class="invalid-feedback" data-sb-feedback="name:required">
                            El nombre es requerido</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                            <input class="form-control"
                                   id="email" 
                                   type="email" 
                                   placeholder="name@example.com"
                                   name="correo"
                                   value="<? echo $correo?>"
                                   data-sb-validations="required,email" />
                                <label for="email">Correo</label>
                   <div class="invalid-feedback" data-sb-feedback="email:required">
                      Correo es requerido.</div>
                   <div class="invalid-feedback" data-sb-feedback="email:email">
                          Correo no es válido.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" 
                                  id="phone" 
                                  type="tel" 
                                  name="telefono"
                                    value="<?echo $telefono;?>"
                                  maxlength="15"
                                  placeholder="(+57) 456-7890" 
                                  data-sb-validations="required" />
                                <label for="phone">Número telefónico</label>
                               <div class="invalid-feedback" 
                                 data-sb-  feedback="phone:required">
                                  El número telefónico es requerido.</div>
                            </div>
                          
                            <!-- Submit Button-->
                            <div class="d-grid">
                              <button class="btn btn-primary" 
                                id="submitButton" type="submit">Enviar</button></div>
                             </form> </div> </div>  </div> </section>