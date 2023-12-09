<?php
include("connection.php");
$con = connection();

$ID_Paciente = $_GET['id'];

$sql = "SELECT * FROM paciente WHERE ID_Paciente='$ID_Paciente'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar paciente</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .patients-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .patients-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="patients-form">
            <h2 class="mb-4">Editar Paciente</h2>
            <form action="editarPaciente.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_Paciente'] ?>">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
                </div>
                <div class="form-group">
                    <label for="apellidoPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno" value="<?= $row['apellidoPaterno'] ?>">
                </div>
                <div class="form-group">
                    <label for="apellidoMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno" value="<?= $row['apellidoMaterno'] ?>">
                </div>
                <div class="form-group">
                    <label for="ine">INE</label>
                    <input type="text" class="form-control" name="ine" placeholder="INE" value="<?= $row['ine'] ?>">
                </div>
                <div class="form-group">
                    <label for="genero">Género</label>
                    <input type="text" class="form-control" name="genero" placeholder="Género" value="<?= $row['genero'] ?>">
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
