<?php
include("connection.php");
$con = connection();

$ID_DatosGenerales = $_GET['id']; // Cambiado de "ID_Fisioterapeuta" a "ID_DatosGenerales"

$sql = "SELECT * FROM datosgenerales WHERE ID_DatosGenerales='$ID_DatosGenerales'"; // Cambiado de "fisioterapeuta" a "datosgenerales"
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Datos Generales</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .datos-generales-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .datos-generales-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="datos-generales-form">
            <h2 class="mb-4">Editar Datos Generales</h2>
            <form action="editarDatosGenerales.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['ID_DatosGenerales'] ?>">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
                </div>
                <div class="form-group">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" class="form-control" name="domicilio" placeholder="Domicilio" value="<?= $row['domicilio'] ?>">
                </div>
                <div class="form-group">
                    <label for="numeroEmergencia">Número de Emergencia</label>
                    <input type="text" class="form-control" name="numeroEmergencia" placeholder="Número de Emergencia" value="<?= $row['numeroEmergencia'] ?>">
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="text" class="form-control" name="edad" placeholder="Edad" value="<?= $row['edad'] ?>">
                </div>
                <div class="form-group">
                    <label for="estatura">Estatura</label>
                    <input type="text" class="form-control" name="estatura" placeholder="Estatura" value="<?= $row['estatura'] ?>">
                </div>
                <div class="form-group">
                    <label for="peso">Peso</label>
                    <input type="text" class="form-control" name="peso" placeholder="Peso" value="<?= $row['peso'] ?>">
                </div>
                <div class="form-group">
                    <label for="estadoCivil">Estado Civil</label>
                    <input type="text" class="form-control" name="estadoCivil" placeholder="Estado Civil" value="<?= $row['estadoCivil'] ?>">
                </div>
                <div class="form-group">
                    <label for="escolaridad">Escolaridad</label>
                    <input type="text" class="form-control" name="escolaridad" placeholder="Escolaridad" value="<?= $row['escolaridad'] ?>">
                </div>
                <div class="form-group">
                    <label for="religion">Religión</label>
                    <input type="text" class="form-control" name="religion" placeholder="Religión" value="<?= $row['religion'] ?>">
                </div>
                <div class="form-group">
                    <label for="motivoConsulta">Motivo de Consulta</label>
                    <textarea class="form-control" name="motivoConsulta" placeholder="Motivo de Consulta"><?= $row['motivoConsulta'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="Paciente_ID">ID Paciente</label>
                    <input type="int" class="form-control" name="Paciente_ID" placeholder="ID Paciente" value="<?= $row['Paciente_ID'] ?>">
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
