<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM v_fisioterapeutas";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Lista de Fisioterapeutas</title>
</head>
<body>

<div class="container mt-5">
    <h2>Lista de Fisioterapeutas</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Usuario</th>
                <th>Genero</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?= $row['ID_Fisioterapeuta'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['apellidoPaterno'] ?></td>
                    <td><?= $row['apellidoMaterno'] ?></td>
                    <td><?= $row['usuario'] ?></td>
                    <td><?= $row['genero'] ?></td>
                    <td><?= $row['telefono'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table><a class="btn btn-success" href="mostrarFisioterapeuta.php">Regresar</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
