<?php
include('connection.php'); 
$con = connection();

$ID_Paciente = null; 
$nombre = $_POST['nombre']; 
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$ine = $_POST['ine'];
$genero = $_POST['genero'];

$sql = "INSERT INTO paciente (ID_Paciente, nombre, apellidoPaterno, apellidoMaterno, ine, genero) 
        VALUES ('$ID_Paciente', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$ine', '$genero')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarPaciente.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar paciente: " . mysqli_error($con);
}
?>
