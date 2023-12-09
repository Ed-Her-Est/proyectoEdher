<?php
include('connection.php'); 
$con = connection();

$ID_Control = $_POST["id"];  // Cambiado de "ID_Fisioterapeuta" a "ID_Control"
$fechaConsulta = $_POST['fechaConsulta']; 
$telefono = $_POST['telefono'];
$Paciente_ID = $_POST['Paciente_ID'];
$Consultorio_ID = $_POST['Consultorio_ID'];

$sql = "UPDATE control SET fechaConsulta='$fechaConsulta', telefono='$telefono', Paciente_ID='$Paciente_ID', Consultorio_ID='$Consultorio_ID' WHERE ID_Control='$ID_Control'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarControl.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
