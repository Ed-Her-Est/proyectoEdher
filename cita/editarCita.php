<?php
include('connection.php');
$con = connection();

$ID_Cita = $_POST["id"]; // Cambiado de "ID_Fisioterapeuta" a "id"
$fecha = $_POST['fecha'];
$numConsultorio = $_POST['numConsultorio'];
$fisioterapeuta_ID = $_POST['fisioterapeuta_ID'];
$Paciente_ID = $_POST['Paciente_ID'];
$Consultorio_ID = $_POST['Consultorio_ID'];

$sql = "UPDATE cita SET fecha='$fecha', numConsultorio='$numConsultorio', fisioterapeuta_ID='$fisioterapeuta_ID', Paciente_ID='$Paciente_ID', Consultorio_ID='$Consultorio_ID' WHERE ID_Cita='$ID_Cita'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCita.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
