<?php
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM aphf"; // Cambiado de "fisioterapeuta" a "aphf"
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
            <h1>Crear APHF</h1> <!-- Cambiado de "Fisioterapeuta" a "APHF" -->
            <form action="insertarAphf.php" method="POST"> <!-- Cambiado de "insertarFisioterapeuta.php" a "insertarAphf.php" -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="diabetes">Diabetes</label>
                        <input type="checkbox" class="form-control" name="diabetes">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="HTA">HTA</label>
                        <input type="checkbox" class="form-control" name="HTA">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cardioPatia">Cardiopatía</label>
                        <input type="checkbox" class="form-control" name="cardioPatia">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="enfReumaticas">Enfermedades Reumáticas</label>
                        <input type="checkbox" class="form-control" name="enfReumaticas">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Paciente_ID">ID del Paciente</label>
                        <input type="int" class="form-control" name="Paciente_ID" placeholder="ID del Paciente" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar APHF</button> <!-- Cambiado de "Agregar Fisioterapeuta" a "Agregar APHF" -->
            </form>
        </div>

        <div>
            <h2>APHFs Registrados</h2> <!-- Cambiado de "Fisioterapeutas" a "APHFs Registrados" -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Diabetes</th>
                        <th>HTA</th>
                        <th>Cardiopatía</th>
                        <th>Enfermedades Reumáticas</th>
                        <th>ID del Paciente</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ID_APHF'] ?></td>
                            <td><?= $row['diabetes'] ? 'Sí' : 'No' ?></td>
                            <td><?= $row['HTA'] ? 'Sí' : 'No' ?></td>
                            <td><?= $row['cardioPatia'] ? 'Sí' : 'No' ?></td>
                            <td><?= $row['enfReumaticas'] ? 'Sí' : 'No' ?></td>
                            <td><?= $row['Paciente_ID'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateAphf.php?id=<?= $row['ID_APHF'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteAphf.php?id=<?= $row['ID_APHF'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table><a class="btn btn-success" href="respaldarAPHF.php">Descargar Datos</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
