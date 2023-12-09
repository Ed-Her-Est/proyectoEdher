<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM CitasPorPaciente";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a Bootstrap (opcional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Resultados de CitasPorPaciente</title>
</head>
<body>

<div class="container mt-5">
    <h2>Resultados de Citas Por Paciente</h2>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID_Cita</th>
                <th>Fecha</th>
                <th>NumConsultorio</th>
                <th>Fisioterapeuta_ID</th>
                <th>Paciente_ID</th>
                <th>Consultorio_ID</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>deleted_at</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?= $row['ID_Cita'] ?></td>
                    <td><?= $row['fecha'] ?></td>
                    <td><?= $row['numConsultorio'] ?></td>
                    <td><?= $row['fisioterapeuta_ID'] ?></td>
                    <td><?= $row['Paciente_ID'] ?></td>
                    <td><?= $row['Consultorio_ID'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td><?= $row['updated_at'] ?></td>
                    <td><?= $row['deleted_at'] ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table> <a class="btn btn-success" href="mostrarCita.php">Regresar</a>

</div>

<!-- Scripts de Bootstrap y otros (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
mysqli_close($con);
?>
