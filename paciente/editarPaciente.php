<?php
include('connection.php'); 
$con = connection();

$ID_Paciente = $_POST["id"];  // Cambiado de "ID_Usuario" a "id"
$nombre = $_POST['nombre']; 
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$ine = $_POST['ine'];
$genero = $_POST['genero'];

$sql = "UPDATE paciente SET nombre='$nombre', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', ine='$ine', genero='$genero' WHERE ID_Paciente='$ID_Paciente'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarPaciente.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
