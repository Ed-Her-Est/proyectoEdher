<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM fisioterapeuta";
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
            <h1>Crear Fisioterapeuta</h1>
            <form action="insertarFisioterapeuta.php" method="POST">
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
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="contrasenia">Contraseña</label>
                        <input type="text" class="form-control" name="contrasenia" placeholder="Contraseña" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="genero">Género</label>
                        <select class="form-control" name="genero">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <!-- Agrega más opciones según tus necesidades -->
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Fisioterapeuta</button>
            </form>
        </div>

        <div>
            <h2>Fisioterapeutas Registrados</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Teléfono</th>
                        <th>Género</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ID_Fisioterapeuta'] ?></td>
                            <td><?= ucwords($row['nombre']) ?></td>
                            <td><?= ucwords($row['apellidoPaterno']) ?></td>
                            <td><?= ucwords($row['apellidoMaterno']) ?></td>
                            <td><?= ucwords($row['usuario']) ?></td>
                            <td><?= $row['contrasenia'] ?></td>
                            <td><?= $row['telefono'] ?></td>
                            <td><?= $row['genero'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateFisioterapeuta.php?id=<?= $row['ID_Fisioterapeuta'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteFisioterapeuta.php?id=<?= $row['ID_Fisioterapeuta'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table> <a class="btn btn-success" href="viewFisioterapeuta.php">View Fisioterapeutas</a>
            <a class="btn btn-success" href="respaldarFisioterapeuta.php">Descargar Datos</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
