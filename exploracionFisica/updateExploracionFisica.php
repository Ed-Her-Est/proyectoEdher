<?php
include("connection.php");
$con = connection();

$ID_ExploracionFisica = $_GET['id'];

$sql = "SELECT * FROM exploracionfisica WHERE ID_ExploracionFisica='$ID_ExploracionFisica'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Exploración Física</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .exploracion-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .exploracion-form input,
        .exploracion-form select {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="exploracion-form">
            <h2 class="mb-4">Editar Exploración Física</h2>
            <form action="editarExploracionFisica.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_ExploracionFisica'] ?>">
                <div class="form-group">
                    <label for="escalaDolor">Escala de Dolor</label>
                    <input type="text" class="form-control" name="escalaDolor" placeholder="Escala de Dolor" value="<?= $row['escalaDolor'] ?>">
                </div>
                <div class="form-group">
                    <label for="ROM">Rango de Movimiento (ROM)</label>
                    <input type="text" class="form-control" name="ROM" placeholder="Rango de Movimiento" value="<?= $row['ROM'] ?>">
                </div>
                <div class="form-group">
                    <label for="fuerza">Fuerza</label>
                    <input type="text" class="form-control" name="fuerza" placeholder="Fuerza" value="<?= $row['fuerza'] ?>">
                </div>
                <div class="form-group">
                    <label for="tonoMuscular">Tono Muscular</label>
                    <input type="text" class="form-control" name="tonoMuscular" placeholder="Tono Muscular" value="<?= $row['tonoMuscular'] ?>">
                </div>
                <div class="form-group">
                    <label for="dermatomas">Dermatomas</label>
                    <input type="text" class="form-control" name="dermatomas" placeholder="Dermatomas" value="<?= $row['dermatomas'] ?>">
                </div>
                <div class="form-group">
                    <label for="reflejos">Reflejos</label>
                    <input type="text" class="form-control" name="reflejos" placeholder="Reflejos" value="<?= $row['reflejos'] ?>">
                </div>
                <div class="form-group">
                    <label for="Paciente_ID">ID del Paciente</label>
                    <input type="int" class="form-control" name="Paciente_ID" placeholder="ID del Paciente" value="<?= $row['Paciente_ID'] ?>">
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
