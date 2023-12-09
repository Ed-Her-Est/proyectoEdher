<?php
include('connection.php');

$con = connection();

// Obtener el ID_Paciente de la URL
$idPaciente = isset($_GET['id']) ? $_GET['id'] : 0;

// Consultar por el ID_Paciente específico
$sql = "SELECT
P.nombre AS Nombre_Paciente,
P.apellidoPaterno AS Apellido_Paterno,
P.apellidoMaterno AS Apellido_Materno,
DG.edad AS Edad,
DG.estatura AS Estatura,
DG.peso AS Peso,
DG.estadoCivil AS Estado_Civil,
DG.escolaridad AS Escolaridad,
DG.religion AS Religion,
DG.motivoConsulta AS Motivo_Consulta,
SV.presionArterial AS Presion_Arterial,
SV.frecuenciaCardiaca AS Frecuencia_Cardiaca,
SV.tensionArterial AS Tension_Arterial,
SV.saturacionOxigeno AS Saturacion_Oxigeno,
SV.temperatura AS Temperatura
FROM
Paciente P
JOIN DatosGenerales DG ON P.ID_Paciente = DG.Paciente_ID
JOIN SignosVitales SV ON P.ID_Paciente = SV.Paciente_ID
WHERE
P.ID_Paciente = $idPaciente";

$query = mysqli_query($con, $sql);

if (!$query) {
    die("Error al cargar la vista: " . mysqli_error($con));
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Información del Paciente</title>
</head>

<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center h-100">
        <div class="container mt-5">
            <h1 class="text-center">Información de un Paciente y su Historial Médico</h1>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Edad</th>
                        <th>Estatura</th>
                        <th>Peso</th>
                        <th>Estado Civil</th>
                        <th>Escolaridad</th>
                        <th>Religión</th>
                        <th>Motivo de Consulta</th>
                        <th>Presión Arterial</th>
                        <th>Frecuencia Cardiaca</th>
                        <th>Tensión Arterial</th>
                        <th>Saturación de Oxígeno</th>
                        <th>Temperatura</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                        <tr>
                            <td><?= $row['Nombre_Paciente'] ?></td>
                            <td><?= $row['Apellido_Paterno'] ?></td>
                            <td><?= $row['Apellido_Materno'] ?></td>
                            <td><?= $row['Edad'] ?></td>
                            <td><?= $row['Estatura'] ?></td>
                            <td><?= $row['Peso'] ?></td>
                            <td><?= $row['Estado_Civil'] ?></td>
                            <td><?= $row['Escolaridad'] ?></td>
                            <td><?= $row['Religion'] ?></td>
                            <td><?= $row['Motivo_Consulta'] ?></td>
                            <td><?= $row['Presion_Arterial'] ?></td>
                            <td><?= $row['Frecuencia_Cardiaca'] ?></td>
                            <td><?= $row['Tension_Arterial'] ?></td>
                            <td><?= $row['Saturacion_Oxigeno'] ?></td>
                            <td><?= $row['Temperatura'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a class="btn btn-success" href="mostrarPaciente.php">Regresar</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
