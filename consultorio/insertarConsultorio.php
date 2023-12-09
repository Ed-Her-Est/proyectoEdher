<?php
include('connection.php'); 
$con = connection();

$ID_Consultorio = null; // Cambiado de "ID_Fisioterapeuta" a "ID_Consultorio"
$estatus = $_POST['estatus']; // Añadido el campo "estatus"
$numeroConsultorio = $_POST['numeroConsultorio']; // Añadido el campo "numeroConsultorio"

$sql = "INSERT INTO consultorio (ID_Consultorio, estatus, numeroConsultorio) 
        VALUES ('$ID_Consultorio', '$estatus', '$numeroConsultorio')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarConsultorio.php"); // Cambiado de "mostrarFisioterapeuta.php" a "mostrarConsultorio.php"
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar consultorio: " . mysqli_error($con);
}
?>
