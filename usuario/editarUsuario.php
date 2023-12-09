<?php

include('connection.php'); 
$con = connection();

$ID_Usuario = $_POST["id"];  // Cambiado de "ID_Usuario" a "id"
$nombre = $_POST['nombre']; 
$apellidoPaterno= $_POST['apellidoPaterno'] ;
$apellidoMaterno= $_POST['apellidoMaterno'] ;
$usuario= $_POST['usuario'] ;
$contrasenia= $_POST['contrasenia'] ;
$email= $_POST['email'] ;
   
$sql = "UPDATE usuario SET nombre='$nombre', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', usuario='$usuario', contrasenia='$contrasenia', email='$email' WHERE ID_Usuario='$ID_Usuario'"; // Corregido el nombre de las columnas y agregado el signo de igual después de WHERE
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrar.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}

?>