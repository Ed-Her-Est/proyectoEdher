<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM v_usuarios";
$query = mysqli_query($con, $sql);

if (!$query) {
    die("Error al cargar la vista: " . mysqli_error($con));
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido de la Vista</title>
    <!-- Enlace a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1>Contenido de la Vista</h1>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID_Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Usuario</th>
                    <!-- Agrega más columnas según la estructura de tu vista -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td><?= $row['ID_Usuario'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['apellidoPaterno'] ?></td>
                        <td><?= $row['apellidoMaterno'] ?></td>
                        <td><?= $row['usuario'] ?></td>
                        <!-- Agrega más celdas según la estructura de tu vista -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table><a class="btn btn-success" href="mostrar.php">Regresar</a>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
