
<section class="page-section bg-primary" id="login">
<div></div>
   <main class='login-form'>
   <div class='container'>
   <div class='card'>
   <div class='card-header'>   </div>
   <div class='card-body'>
   <form name='login' action='index.php' method='post'>
   <div class='form-group row'>
   <label class='col-md-4 col-form-label text-md-right'>Usuario:</label>
   <div class='col-md-6'>
   <input type='text' class='form-control' name='usuario' size='15'>
   </div></div>
   <div class='form-group row'>
   <label for ='password'
          class='col-md-4 col-form-label text-md-right'>
          Clave:
   </label>
   <div class='col-md-6'>
   <input type='password'
           id='password' 
            class='form-control'
             name='clave' 
             maxlength='10'
             size='15'>
   </div></div>
   <div class='col-md-6 offset-md-4'>
   <button type='submit' 
           value='entrar'
           class='btn btn-light'>
           <img src='img/key.png'
            title='Ingresar'> 
    </button>
   </div>
   </form>
   <div class='card-footer'>
     <? echo '<br>Prueba Salt :'.  $salt;
        echo '<br>'. $usuario;
        echo '<br>'. $clave;
        echo '<br>'.$clave_crypt.'<br>';
  echo '<br>'.$nfilas.'<br>';
     ?>
      NOTA: si no dispone de identificación o tiene problemas
      para entrar<br>
      póngase en contacto con el<a href='MAILTO:webmaster@localhost'>
        administrador del sitio</a></div>
   </div></div></div>
   </main>
  </section>