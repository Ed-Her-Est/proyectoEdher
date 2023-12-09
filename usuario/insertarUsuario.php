<?php
include('connection.php'); 
$con = connection();

$ID_Usuario = null; 
$nombre = $_POST['nombre']; 
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$email = $_POST['email'];

$sql = "INSERT INTO usuario (ID_Usuario, nombre, apellidoPaterno, apellidoMaterno, usuario, contrasenia, email) 
        VALUES ('$ID_Usuario', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$usuario', '$contrasenia', '$email')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrar.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar usuario: " . mysqli_error($con);
}
?>
