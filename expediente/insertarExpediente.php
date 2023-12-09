<?php
include('connection.php'); 
$con = connection();

$ID_Expediente = null; // Cambiado de "ID_Fisioterapeuta" a "ID_Expediente"
$numExpediente = $_POST['numExpediente']; // Asegúrate de tener un campo en tu formulario con el nombre "numExpediente"
$fechaIngreso = $_POST['fechaIngreso']; // Asegúrate de tener un campo en tu formulario con el nombre "fechaIngreso"
$Paciente_ID = $_POST['Paciente_ID']; // Asegúrate de tener un campo en tu formulario con el nombre "Paciente_ID"
$Consultorio_ID = $_POST['Consultorio_ID']; // Asegúrate de tener un campo en tu formulario con el nombre "Consultorio_ID"

$sql = "INSERT INTO expediente (ID_Expediente, numExpediente, fechaIngreso, Paciente_ID, Consultorio_ID) 
        VALUES ('$ID_Expediente', '$numExpediente', '$fechaIngreso', '$Paciente_ID', '$Consultorio_ID')"; // Cambiado de "fisioterapeuta" a "expediente"

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarExpediente.php"); // Cambiado de "mostrarFisioterapeuta.php" a "mostrarExpediente.php"
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar expediente: " . mysqli_error($con);
}
?>
