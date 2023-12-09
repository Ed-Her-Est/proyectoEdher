<?php
include('connection.php'); 
$con = connection();

$ID_Expediente = $_POST["id"];  // Cambiado de "ID_Fisioterapeuta" a "ID_Expediente"
$numExpediente = $_POST['numExpediente']; 
$fechaIngreso = $_POST['fechaIngreso'];
$Paciente_ID = $_POST['Paciente_ID'];
$Consultorio_ID = $_POST['Consultorio_ID'];

$sql = "UPDATE expediente SET numExpediente='$numExpediente', fechaIngreso='$fechaIngreso', Paciente_ID='$Paciente_ID', Consultorio_ID='$Consultorio_ID' WHERE ID_Expediente='$ID_Expediente'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarExpediente.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
