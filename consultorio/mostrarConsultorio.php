<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM consultorio"; // Cambiado de "fisioterapeuta" a "consultorio"
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
            <h1>Crear Consultorio</h1> <!-- Cambiado de "Fisioterapeuta" a "Consultorio" -->
            <form action="insertarConsultorio.php" method="POST"> <!-- Cambiado de "insertarFisioterapeuta.php" a "insertarConsultorio.php" -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="estatus">Estatus</label>
                        <input type="text" class="form-control" name="estatus" placeholder="Estatus" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="numeroConsultorio">Número de Consultorio</label>
                        <input type="text" class="form-control" name="numeroConsultorio" placeholder="Número de Consultorio" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Consultorio</button> <!-- Cambiado de "Agregar Fisioterapeuta" a "Agregar Consultorio" -->
            </form>
        </div>

        <div>
            <h2>Consultorios Registrados</h2> <!-- Cambiado de "Fisioterapeutas" a "Consultorios Registrados" -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Estatus</th>
                        <th>Número de Consultorio</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ID_Consultorio'] ?></td>
                            <td><?= ucfirst($row['estatus']) ?></td>
                            <td><?= ucfirst($row['numeroConsultorio']) ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateConsultorio.php?id=<?= $row['ID_Consultorio'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteConsultorio.php?id=<?= $row['ID_Consultorio'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table><a class="btn btn-success" href="viewConsultorio.php">View Consultorios</a>
            <a class="btn btn-success" href="respaldarConsultorio.php">Descargar Datos</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
