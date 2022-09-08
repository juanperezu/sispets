<?include 'head.php';?>
<head>
    <title>Registro de usuarios</title>
</head>
<body>

<div class="container">
  <h2>Registro de usuarios <a href='index.php'><img src='img/home.png' title='Regresar'></a></h2>
  <form method="post" action="genera_clave.php">
    <div class="form-group">
      <label for="correo">Correo:</label>
      <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo" required>
    </div>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="nombre" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    <div class="form-group">
      <label for="rpwd">Re-Password:</label>
      <input type="password" class="form-control" id="rpwd" placeholder="Enter password" name="rpwd" required>
    </div>
       <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>