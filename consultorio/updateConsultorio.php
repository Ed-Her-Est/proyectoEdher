<?php
include("connection.php");
$con = connection();

$ID_Consultorio = $_GET['id'];

$sql = "SELECT * FROM consultorio WHERE ID_Consultorio='$ID_Consultorio'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Consultorio</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .consultorio-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .consultorio-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="consultorio-form">
            <h2 class="mb-4">Editar Consultorio</h2>
            <form action="editarConsultorio.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_Consultorio'] ?>">
                <div class="form-group">
                    <label for="estatus">Estatus</label>
                    <input type="text" class="form-control" name="estatus" placeholder="Estatus" value="<?= $row['estatus'] ?>">
                </div>
                <div class="form-group">
                    <label for="numeroConsultorio">Número de Consultorio</label>
                    <input type="text" class="form-control" name="numeroConsultorio" placeholder="Número de Consultorio" value="<?= $row['numeroConsultorio'] ?>">
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
