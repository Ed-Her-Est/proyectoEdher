<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM paciente";
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
            <h1>Crear Paciente</h1>
            <form action="insertarPaciente.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellidoPaterno">Apellido Paterno</label>
                        <input type="text" class="form-control" name="apellidoPaterno" placeholder="Apellido Paterno" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellidoMaterno">Apellido Materno</label>
                        <input type="text" class="form-control" name="apellidoMaterno" placeholder="Apellido Materno" required value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ine">INE</label>
                        <input type="text" class="form-control" name="ine" placeholder="INE" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="genero">Género</label>
                        <select class="form-control" name="genero" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <!-- Agrega más opciones según tus necesidades -->
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Paciente</button>
            </form>
        </div>

        <div>
            <h2>Pacientes Registrados</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>INE</th>
                        <th>Género</th>
                        <th>Fecha de Creacion</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ID_Paciente'] ?></td>
                            <td><?= ucwords($row['nombre']) ?></td>
                            <td><?= ucwords($row['apellidoPaterno']) ?></td>
                            <td><?= ucwords($row['apellidoMaterno']) ?></td>
                            <td><?= $row['ine'] ?></td>
                            <td><?= $row['genero'] ?></td>
                            <td><?= $row['created_at'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updatePaciente.php?id=<?= $row['ID_Paciente'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deletePaciente.php?id=<?= $row['ID_Paciente'] ?>">Eliminar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-secondary" href="consultaPaciente.php?id=<?= $row['ID_Paciente'] ?>">Consultar Expediente</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table><a class="btn btn-success" href="viewPaciente.php">View Paciente</a> 
            <a class="btn btn-success" href="PacienteAPHF.php">Paciente APHF</a> 
            <a class="btn btn-success" href="respaldarPaciente.php">Descargar Datos</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
