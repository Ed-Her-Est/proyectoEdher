<?php
include("connection.php");
$con = connection();

$ID_Expediente = $_GET['id']; // Cambiado de "ID_Fisioterapeuta" a "ID_Expediente"

$sql = "SELECT * FROM expediente WHERE ID_Expediente='$ID_Expediente'"; // Cambiado de "fisioterapeuta" a "expediente"
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Expediente</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .expediente-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .expediente-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="expediente-form">
            <h2 class="mb-4">Editar Expediente</h2>
            <form action="editarExpediente.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_Expediente'] ?>">
                <div class="form-group">
                    <label for="numExpediente">Número de Expediente</label>
                    <input type="text" class="form-control" name="numExpediente" placeholder="Número de Expediente" value="<?= $row['numExpediente'] ?>">
                </div>
                <div class="form-group">
                    <label for="fechaIngreso">Fecha de Ingreso</label>
                    <input type="date" class="form-control" name="fechaIngreso" value="<?= $row['fechaIngreso'] ?>">
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
