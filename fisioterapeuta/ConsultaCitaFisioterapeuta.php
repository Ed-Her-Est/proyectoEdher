<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Información de Citas por Paciente</title>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h1>Información de Citas por Fisioterapeuta</h1>

        <?php
        include('connection.php');
        $con = connection();

        // Manejar el formulario para elegir el ID_Fisioterapeuta
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idFisioterapeutaSeleccionado = $_POST["idFisioterapeuta"];
            
            // Evitar inyección SQL utilizando mysqli_real_escape_string
            $idFisioterapeutaSeleccionado = mysqli_real_escape_string($con, $idFisioterapeutaSeleccionado);

            $sql = "SELECT
                C.fecha AS Fecha_Cita,
                C.numConsultorio AS Numero_Consultorio,
                F.nombre AS Nombre_Fisioterapeuta,
                F.apellidoPaterno AS Apellido_Paterno_Fisioterapeuta
            FROM
                Cita C
            JOIN Fisioterapeuta F ON C.fisioterapeuta_ID = F.ID_Fisioterapeuta
            WHERE
                F.ID_Fisioterapeuta = $idFisioterapeutaSeleccionado;";

            $query = mysqli_query($con, $sql);

            if (!$query) {
                die("Error al cargar la vista: " . mysqli_error($con));
            }
        }

        // Obtener la lista de fisioterapeutas para el dropdown
        $sqlFisioterapeutas = "SELECT ID_Fisioterapeuta, CONCAT(nombre, ' ', apellidoPaterno) AS nombreCompleto FROM Fisioterapeuta";
        $queryFisioterapeutas = mysqli_query($con, $sqlFisioterapeutas);
        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="idFisioterapeuta">Selecciona un Fisioterapeuta:</label>
                <select class="form-control" id="idFisioterapeuta" name="idFisioterapeuta">
                    <?php
                    while ($rowFisioterapeuta = mysqli_fetch_assoc($queryFisioterapeutas)) {
                        echo "<option value=\"{$rowFisioterapeuta['ID_Fisioterapeuta']}\">{$rowFisioterapeuta['nombreCompleto']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Consultar Citas</button>
        </form>

        <?php if (isset($query)) : ?>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Fecha de Cita</th>
                        <th>Número de Consultorio</th>
                        <th>Nombre del Fisioterapeuta</th>
                        <th>Apellido Paterno del Fisioterapeuta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                        <tr>
                            <td><?= $row['Fecha_Cita'] ?></td>
                            <td><?= $row['Numero_Consultorio'] ?></td>
                            <td><?= $row['Nombre_Fisioterapeuta'] ?></td>
                            <td><?= $row['Apellido_Paterno_Fisioterapeuta'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <?php
        mysqli_close($con);
        ?>
<a class="btn btn-success" href="mostrarFisioterapeuta.php">Regresar</a>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
