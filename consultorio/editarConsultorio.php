<?php
include('connection.php'); 
$con = connection();

$ID_Consultorio = $_POST["id"];  // Cambiado de "ID_Fisioterapeuta" a "ID_Consultorio"
$estatus = $_POST['estatus'];
$numeroConsultorio = $_POST['numeroConsultorio'];

$sql = "UPDATE consultorio SET estatus='$estatus', numeroConsultorio='$numeroConsultorio' WHERE ID_Consultorio='$ID_Consultorio'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarConsultorio.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
