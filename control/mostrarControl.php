<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM control"; // Cambiado de "fisioterapeuta" a "control"
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
            <h1>Crear Control</h1> <!-- Cambiado de "Fisioterapeuta" a "Control" -->
            <form action="insertarControl.php" method="POST"> <!-- Cambiado de "insertarFisioterapeuta.php" a "insertarControl.php" -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="fechaConsulta">Fecha de Consulta</label>
                        <input type="date" class="form-control" name="fechaConsulta" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Paciente_ID">ID del Paciente</label> <!-- Cambiado de "Consultorio_ID" a "Paciente_ID" -->
                        <input type="int" class="form-control" name="Paciente_ID" placeholder="ID del Paciente" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Consultorio_ID">ID del Consultorio</label> <!-- Cambiado de "Consultorio_ID" a "Paciente_ID" -->
                        <input type="int" class="form-control" name="Consultorio_ID" placeholder="ID del Consultorio" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Control</button> <!-- Cambiado de "Agregar Fisioterapeuta" a "Agregar Control" -->
            </form>
        </div>

        <div>
            <h2>Controles Registrados</h2> <!-- Cambiado de "Fisioterapeutas" a "Controles Registrados" -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Fecha de Consulta</th>
                        <th>Teléfono</th>
                        <th>ID del Paciente</th>
                        <th>ID del Consultorio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ID_Control'] ?></td>
                            <td><?= $row['fechaConsulta'] ?></td>
                            <td><?= $row['telefono'] ?></td>
                            <td><?= $row['Paciente_ID'] ?></td>
                            <td><?= $row['Consultorio_ID'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateControl.php?id=<?= $row['ID_Control'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteControl.php?id=<?= $row['ID_Control'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table><a class="btn btn-success" href="respaldarControl.php">Descargar Datos</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
