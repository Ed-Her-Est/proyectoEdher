<?php
include('connection.php');

$con = connection();

$sql = "SELECT Fisioterapeuta.*, Paciente.*, APHF.*
FROM Fisioterapeuta
JOIN Cita ON Fisioterapeuta.ID_Fisioterapeuta = Cita.fisioterapeuta_ID
JOIN Paciente ON Cita.Paciente_ID = Paciente.ID_Paciente
JOIN APHF ON Paciente.ID_Paciente = APHF.Paciente_ID;";

$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Agregar estilos personalizados aquí si es necesario */
    </style>
    <title>Consulta de Fisioterapeutas, Pacientes y APHF</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1>Consulta de Fisioterapeutas, Pacientes y APHF</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID Fisioterapeuta</th>
                    <th>Nombre Fisioterapeuta</th>
                    <th>Usuario Fisioterapeuta</th>
                    <!-- Agrega más encabezados según la estructura de tus tablas -->
                    <th>ID Paciente</th>
                    <th>Nombre Paciente</th>
                    <th>Usuario Paciente</th>
                    <!-- Agrega más encabezados según la estructura de tus tablas -->
                    <th>ID APHF</th>
                    <th>Diabetes</th>
                    <th>HTA</th>
                    <th>Cardiopatía</th>
                    <th>Enf. Reumáticas</th>
                    <!-- Agrega más encabezados según la estructura de tus tablas -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <td><?= $row['ID_Fisioterapeuta'] ?></td>
                        <td><?= $row['nombre'] . ' ' . $row['apellidoPaterno'] . ' ' . $row['apellidoMaterno'] ?></td>
                        <td><?= $row['usuario'] ?></td>
                        <!-- Agrega más celdas según la estructura de tus tablas -->
                        <td><?= $row['ID_Paciente'] ?></td>
                        <td><?= $row['nombre'] . ' ' . $row['apellidoPaterno'] . ' ' . $row['apellidoMaterno'] ?></td>
                        <td><?= $row['usuario'] ?></td>
                        <!-- Agrega más celdas según la estructura de tus tablas -->
                        <td><?= $row['ID_APHF'] ?></td>
                        <td><?= $row['diabetes'] == 1 ? 'Sí' : 'No' ?></td>
                        <td><?= $row['HTA'] == 1 ? 'Sí' : 'No' ?></td>
                        <td><?= $row['cardioPatia'] == 1 ? 'Sí' : 'No' ?></td>
                        <td><?= $row['enfReumaticas'] == 1 ? 'Sí' : 'No' ?></td>
                        <!-- Agrega más celdas según la estructura de tus tablas -->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table> <a class="btn btn-success" href="mostrarPaciente.php">Regresar</a>

    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
