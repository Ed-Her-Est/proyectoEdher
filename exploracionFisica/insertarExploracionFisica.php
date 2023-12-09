<?php
include('connection.php'); 
$con = connection();

$ID_ExploracionFisica = null;
$escalaDolor = $_POST['escalaDolor'];
$ROM = $_POST['ROM'];
$fuerza = $_POST['fuerza'];
$tonoMuscular = $_POST['tonoMuscular'];
$dermatomas = $_POST['dermatomas'];
$reflejos = $_POST['reflejos'];
$Paciente_ID = $_POST['Paciente_ID'];

$sql = "INSERT INTO exploracionfisica (ID_ExploracionFisica, escalaDolor, ROM, fuerza, tonoMuscular, dermatomas, reflejos, Paciente_ID) 
        VALUES ('$ID_ExploracionFisica', '$escalaDolor', '$ROM', '$fuerza', '$tonoMuscular', '$dermatomas', '$reflejos', '$Paciente_ID')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarExploracionFisica.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar exploración física: " . mysqli_error($con);
}
?>
