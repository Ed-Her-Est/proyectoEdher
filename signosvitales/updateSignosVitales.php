<?php
include("connection.php");
$con = connection();

$ID_SignosVitales = $_GET['id'];

$sql = "SELECT * FROM signosvitales WHERE ID_SignosVitales='$ID_SignosVitales'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Signos Vitales</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .signos-vitales-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signos-vitales-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="signos-vitales-form">
            <h2 class="mb-4">Editar Signos Vitales</h2>
            <form action="editarSignosVitales.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_SignosVitales'] ?>">
                <div class="form-group">
                    <label for="presionArterial">Presión Arterial (PA)</label>
                    <input type="text" class="form-control" name="presionArterial" placeholder="Presión Arterial" value="<?= $row['presionArterial'] ?>">
                </div>
                <div class="form-group">
                    <label for="frecuenciaCardiaca">Frecuencia Cardiaca (FC)</label>
                    <input type="text" class="form-control" name="frecuenciaCardiaca" placeholder="Frecuencia Cardiaca" value="<?= $row['frecuenciaCardiaca'] ?>">
                </div>
                <div class="form-group">
                    <label for="tensionArterial">Tensión Arterial (TA)</label>
                    <input type="text" class="form-control" name="tensionArterial" placeholder="Tensión Arterial" value="<?= $row['tensionArterial'] ?>">
                </div>
                <div class="form-group">
                    <label for="saturacionOxigeno">Saturación de Oxígeno (SpO2)</label>
                    <input type="text" class="form-control" name="saturacionOxigeno" placeholder="Saturación de Oxígeno" value="<?= $row['saturacionOxigeno'] ?>">
                </div>
                <div class="form-group">
                    <label for="temperatura">Temperatura</label>
                    <input type="text" class="form-control" name="temperatura" placeholder="Temperatura" value="<?= $row['temperatura'] ?>">
                </div>
                <div class="form-group">
                    <label for="Paciente_ID">ID del Paciente</label>
                    <input type="text" class="form-control" name="Paciente_ID" placeholder="ID del Paciente" value="<?= $row['Paciente_ID'] ?>">
                </div>

                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>

    <!-- Agrega scripts de Bootstrap y otros que puedas necesitar -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
