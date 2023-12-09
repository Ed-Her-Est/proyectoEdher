<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM datosgenerales"; // Cambiado de "fisioterapeuta" a "datosgenerales"
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
            <h1>Crear Datos Generales</h1> <!-- Cambiado de "Fisioterapeuta" a "Datos Generales" -->
            <form action="insertarDatosGenerales.php" method="POST"> <!-- Cambiado de "insertarFisioterapeuta.php" a "insertarDatosGenerales.php" -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="domicilio">Domicilio</label>
                        <input type="text" class="form-control" name="domicilio" placeholder="Domicilio" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="numeroEmergencia">Número de Emergencia</label>
                        <input type="text" class="form-control" name="numeroEmergencia" placeholder="Número de Emergencia" required value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" name="edad" placeholder="Edad" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estatura">Estatura</label>
                        <input type="text" class="form-control" name="estatura" placeholder="Estatura" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" name="peso" placeholder="Peso" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="estadoCivil">Estado Civil</label>
                        <input type="text" class="form-control" name="estadoCivil" placeholder="Estado Civil" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="escolaridad">Escolaridad</label>
                        <input type="text" class="form-control" name="escolaridad" placeholder="Escolaridad" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="religion">Religión</label>
                        <input type="text" class="form-control" name="religion" placeholder="Religión" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="motivoConsulta">Motivo de Consulta</label>
                        <textarea class="form-control" name="motivoConsulta" placeholder="Motivo de Consulta" required></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Paciente_ID">ID del Paciente</label> <!-- Nuevo campo -->
                        <input type="int" class="form-control" name="Paciente_ID" placeholder="ID del Paciente" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Datos Generales</button> <!-- Cambiado de "Agregar Fisioterapeuta" a "Agregar Datos Generales" -->
            </form>
        </div>

        <div>
            <h2>Datos Generales Registrados</h2> <!-- Cambiado de "Fisioterapeutas" a "Datos Generales Registrados" -->
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Domicilio</th>
                        <th>Número de Emergencia</th>
                        <th>Edad</th>
                        <th>Estatura</th>
                        <th>Peso</th>
                        <th>Estado Civil</th>
                        <th>Escolaridad</th>
                        <th>Religión</th>
                        <th>Motivo de Consulta</th>
                        <th>ID del Paciente</th> 
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <<?php while ($row = mysqli_fetch_array($query)): ?>
    <tr>
        <td><?= $row['ID_DatosGenerales'] ?></td>
        <td><?= ucwords($row['nombre']) ?></td>
        <td><?= ucwords($row['domicilio']) ?></td>
        <td><?= ucwords($row['numeroEmergencia']) ?></td>
        <td><?= $row['edad'] ?></td>
        <td><?= $row['estatura'] ?></td>
        <td><?= $row['peso'] ?></td>
        <td><?= ucwords($row['estadoCivil']) ?></td>
        <td><?= ucwords($row['escolaridad']) ?></td>
        <td><?= ucwords($row['religion']) ?></td>
        <td><?= $row['motivoConsulta'] ?></td>
        <td><?= $row['Paciente_ID'] ?></td> 
        <td>
            <!-- Enlace para editar -->
            <a class="btn btn-warning" href="updateDatosGenerales.php?id=<?= $row['ID_DatosGenerales'] ?>">Editar</a>
        </td>
        <td>
            <!-- Formulario para eliminar -->
            <a class="btn btn-danger" href="deleteDatosGenerales.php?id=<?= $row['ID_DatosGenerales'] ?>">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
                </tbody>
            </table><a class="btn btn-success" href="respaldarDatosGenerales.php">Descargar Datos</a>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
