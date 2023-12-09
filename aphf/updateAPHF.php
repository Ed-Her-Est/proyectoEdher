<?php
include("connection.php");
$con = connection();

$ID_APHF = $_GET['id'];

$sql = "SELECT * FROM aphf WHERE ID_APHF='$ID_APHF'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar APHF</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .aphf-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .aphf-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="aphf-form">
            <h2 class="mb-4">Editar APHF</h2>
            <form action="editarAPHF.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_APHF'] ?>">
                <div class="form-group">
                    <label for="diabetes">Diabetes</label>
                    <input type="text" class="form-control" name="diabetes" placeholder="Diabetes" value="<?= $row['diabetes'] ?>">
                </div>
                <div class="form-group">
                    <label for="HTA">HTA</label>
                    <input type="text" class="form-control" name="HTA" placeholder="HTA" value="<?= $row['HTA'] ?>">
                </div>
                <div class="form-group">
                    <label for="cardioPatia">Cardiopatía</label>
                    <input type="text" class="form-control" name="cardioPatia" placeholder="Cardiopatía" value="<?= $row['cardioPatia'] ?>">
                </div>
                <div class="form-group">
                    <label for="enfReumaticas">Enfermedades Reumáticas</label>
                    <input type="text" class="form-control" name="enfReumaticas" placeholder="Enfermedades Reumáticas" value="<?= $row['enfReumaticas'] ?>">
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
