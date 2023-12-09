<?php
include('connection.php'); 
$con = connection();

$ID_Fisioterapeuta = null;
$nombre = $_POST['nombre']; 
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO fisioterapeuta (ID_Fisioterapeuta, nombre, apellidoPaterno, apellidoMaterno, usuario, contrasenia, genero, telefono) 
        VALUES ('$ID_Fisioterapeuta', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$usuario', '$contrasenia', '$genero', '$telefono')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarFisioterapeuta.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar fisioterapeuta: " . mysqli_error($con);
}
?>
