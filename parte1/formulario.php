



<!DOCTYPE html>
<html>
<head>
    <title>Crea tu cuenta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="formulario.php"><i class="fas fa-home"></i>Inicio de Sesion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="reporte.php">Registros</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container" style="margin: 50px auto; border: 1px solid #ccc; padding: 20px; width: 500px;box-shadow:5px 5px 5px 5px gray;">
        <h2 align="center">Registrate</h2>
   
        <form method="post">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text"  class="form-control"  name="name"  value="<?php echo $GLOBALS['$name']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="text" class="form-control"  name="email" value="<?php echo $GLOBALS['$email']; ?>">
            </div>
        
            <div class="form-group">
            <label for="email">telefono</label>
            <input type="text"  class="form-control"  name="phone" value="<?php echo $GLOBALS['$phone']; ?>">
            </div>
           
                <br>
                <br>
               
            
            
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary" name="registrar"><i class="fas fa-plus"></i> Crear</button>
                <button type="submit" class="btn btn-primary" name="buscar"><i class="fas fa-search"></i> Buscar</button>
                <button type="submit" class="btn btn-danger" name="eliminar"><i class="fas fa-trash"></i> Eliminar</button>
                <button   type="submit " class="btn btn-success" name="editar"><i class="fas fa-sync"></i> Actualizar</button>
            </div>
        </form>
    </div>
    
    
  
    
</body>
</html>
