<?php
include('connection.php');
$con = connection();

$ID_Cita = null;
$fecha = $_POST['fecha'];
$numConsultorio = $_POST['numConsultorio'];
$fisioterapeuta_ID = $_POST['fisioterapeuta_ID'];
$Paciente_ID = $_POST['Paciente_ID'];
$Consultorio_ID = $_POST['Consultorio_ID'];

$sql = "INSERT INTO cita (ID_Cita, fecha, numConsultorio, fisioterapeuta_ID, Paciente_ID, Consultorio_ID) 
        VALUES ('$ID_Cita', '$fecha', '$numConsultorio', '$fisioterapeuta_ID', '$Paciente_ID', '$Consultorio_ID')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCita.php"); // Cambiado de "mostrarFisioterapeuta.php" a "mostrarCitas.php"
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar cita: " . mysqli_error($con);
}
?>
