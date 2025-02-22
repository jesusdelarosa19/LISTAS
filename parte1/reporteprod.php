<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta producto="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>










<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="formulario.php"><i class="fas fa-home col text-right"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="formulario.php">REGISTRO.php</a>
      </li>
      
    </ul>
  </div>
</nav>









    <!-- Section de la Tabla -->
	<section>
		<div class="container" style="width:90%;margin-top:120px;">
			<table class="table">
			  <thead class="bg-warning white-text">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Cantidad</th>
			   
			      
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
				require_once 'db_conexion.php';
				    $query = $cnnPDO->prepare('SELECT * FROM productos');
				    $query->execute();
				    $contador=1;
				    while($campo = $query->fetch())
				    {
				?>        
				      <tr>
				        <td><?php echo $contador; ?></td>
				        <td><?php echo $campo["producto"]; ?></td>
				        <td><?php echo $campo["cantidad"]; ?></td>
				      
				        
				      </tr>
				      
				    <?php 
				    $contador = $contador + 1; 
				    }
				    ?>
			  </tbody>
			</table>
	
		</div>
	</section>
</body>
</html>