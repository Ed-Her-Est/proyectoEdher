<?php
include('connection.php'); 
$con = connection();

$ID_Fisioterapeuta = $_POST["id"];  // Cambiado de "ID_Usuario" a "id"
$nombre = $_POST['nombre']; 
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];

$sql = "UPDATE fisioterapeuta SET nombre='$nombre', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', usuario='$usuario', contrasenia='$contrasenia', genero='$genero', telefono='$telefono' WHERE ID_Fisioterapeuta='$ID_Fisioterapeuta'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarFisioterapeuta.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
