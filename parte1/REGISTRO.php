
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="formulario.php"><i class="fas fa-home"></i> Inicio</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="reporteprod.php">Registros</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 p-4 border rounded shadow">
        <h2 class="text-center">Gestión de Productos</h2>
        <form method="post">
		<div class="form-group">
    <label for="producto">Producto:</label>
    <input type="text" name="producto" class="form-control" value="<?= htmlspecialchars($producto) ?>" required>
</div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" class="form-control" value="<?= htmlspecialchars($cantidad) ?>">
            </div>

            <div class="form-group text-center">
                <button type="submit" name="registrar" class="btn btn-primary"><i class="fas fa-plus"></i> Crear</button>
                <button type="submit" name="buscar" class="btn btn-info"><i class="fas fa-search"></i> Buscar</button>
                <button type="submit" name="editar" class="btn btn-success"><i class="fas fa-edit"></i> Editar</button>
                <button type="submit" name="eliminar" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
            </div>
        </form>
    </div>
</body>
</html>
