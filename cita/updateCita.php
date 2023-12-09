<?php
include("connection.php");
$con = connection();

$ID_Cita = $_GET['id'];

$sql = "SELECT * FROM cita WHERE ID_Cita='$ID_Cita'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cita</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .cita-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cita-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="cita-form">
            <h2 class="mb-4">Editar Cita</h2>
            <form action="editarCita.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_Cita'] ?>">
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" name="fecha" value="<?= $row['fecha'] ?>">
                </div>
                <div class="form-group">
                    <label for="numConsultorio">Número de Consultorio</label>
                    <input type="text" class="form-control" name="numConsultorio" placeholder="Número de Consultorio" value="<?= $row['numConsultorio'] ?>">
                </div>
                <div class="form-group">
                    <label for="fisioterapeuta_ID">ID del Fisioterapeuta</label>
                    <input type="text" class="form-control" name="fisioterapeuta_ID" placeholder="ID del Fisioterapeuta" value="<?= $row['fisioterapeuta_ID'] ?>">
                </div>
                <div class="form-group">
                    <label for="Paciente_ID">ID del Paciente</label>
                    <input type="text" class="form-control" name="Paciente_ID" placeholder="ID del Paciente" value="<?= $row['Paciente_ID'] ?>">
                </div>
                <div class="form-group">
                    <label for="Consultorio_ID">ID del Consultorio</label>
                    <input type="text" class="form-control" name="Consultorio_ID" placeholder="ID del Consultorio" value="<?= $row['Consultorio_ID'] ?>">
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
