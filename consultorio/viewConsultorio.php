<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM v_consultorios";
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
    <title>Consulta de Consultorios</title>
    <!-- Enlace a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Consulta de Consultorios</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID Consultorio</th>
                <th>Estatus</th>
                <th>Número de Consultorio</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?= $row['ID_Consultorio'] ?></td>
                    <td><?= $row['estatus'] ?></td>
                    <td><?= $row['numeroConsultorio'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table><a class="btn btn-success" href="mostrarConsultorio.php">Regresar</a>

</div>

<!-- Scripts de Bootstrap y otros -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
