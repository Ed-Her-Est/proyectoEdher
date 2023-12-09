<?php
include('connection.php'); 
$con = connection();

$ID_Control = null;
$fechaConsulta = $_POST['fechaConsulta'];
$telefono = $_POST['telefono'];
$Paciente_ID = $_POST['Paciente_ID'];
$Consultorio_ID = $_POST['Consultorio_ID'];

$sql = "INSERT INTO control (ID_Control, fechaConsulta, telefono, Paciente_ID, Consultorio_ID) 
        VALUES ('$ID_Control', '$fechaConsulta', '$telefono', '$Paciente_ID', '$Consultorio_ID')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarControl.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar control: " . mysqli_error($con);
}
?>
