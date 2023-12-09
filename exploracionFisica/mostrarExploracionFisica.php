<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM exploracionfisica";
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
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">D.A CLINICA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                        <a class="nav-link" href="/clinica/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clinica/usuario/mostrar.php">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clinica/fisioterapeuta/mostrarFisioterapeuta.php">Fisioterapeuta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clinica/paciente/mostrarPaciente.php">Paciente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clinica/aphf/mostrarAPHF.php">APHF</a>
                    </li>
                    <li class="nav-item">
    <a class="nav-link" href="/clinica/cita/mostrarCita.php">Cita</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/clinica/consultorio/mostrarConsultorio.php">Consultorio</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/clinica/control/mostrarControl.php">Control</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/clinica/datosgenerales/mostrarDatosGenerales.php">Datos Generales</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/clinica/expediente/mostrarExpediente.php">Expediente</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/clinica/exploracionfisica/mostrarExploracionFisica.php">Exploración Física</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/clinica/signosvitales/mostrarSignosVitales.php">Signos Vitales</a>
</li>

                    <!-- Agrega más secciones según tus necesidades -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Registrar Exploración Física</h1>
            <form action="insertarExploracionFisica.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="escalaDolor">Escala de Dolor</label>
                        <input type="text" class="form-control" name="escalaDolor" placeholder="Escala de Dolor" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="ROM">Rango de Movimiento (ROM)</label>
                        <input type="text" class="form-control" name="ROM" placeholder="Rango de Movimiento" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fuerza">Fuerza Muscular</label>
                        <input type="text" class="form-control" name="fuerza" placeholder="Fuerza Muscular" required value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="tonoMuscular">Tono Muscular</label>
                        <input type="text" class="form-control" name="tonoMuscular" placeholder="Tono Muscular" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dermatomas">Dermatomas</label>
                        <input type="text" class="form-control" name="dermatomas" placeholder="Dermatomas" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="reflejos">Reflejos</label>
                        <input type="text" class="form-control" name="reflejos" placeholder="Reflejos" required value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Paciente_ID">ID del Paciente</label>
                        <input type="text" class="form-control" name="Paciente_ID" placeholder="ID del Paciente" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Exploración Física</button>
            </form>
        </div>

        <div>
            <h2>Exploraciones Físicas Registradas</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Escala de Dolor</th>
                        <th>Rango de Movimiento (ROM)</th>
                        <th>Fuerza Muscular</th>
                        <th>Tono Muscular</th>
                        <th>Dermatomas</th>
                        <th>Reflejos</th>
                        <th>ID del Paciente</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ID_ExploracionFisica'] ?></td>
                            <td><?= $row['escalaDolor'] ?></td>
                            <td><?= $row['ROM'] ?></td>
                            <td><?= $row['fuerza'] ?></td>
                            <td><?= $row['tonoMuscular'] ?></td>
                            <td><?= $row['dermatomas'] ?></td>
                            <td><?= $row['reflejos'] ?></td>
                            <td><?= $row['Paciente_ID'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateExploracionFisica.php?id=<?= $row['ID_ExploracionFisica'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteExploracionFisica.php?id=<?= $row['ID_ExploracionFisica'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table><a class="btn btn-success" href="respaldarExploracionFisica.php">Descargar Datos</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
