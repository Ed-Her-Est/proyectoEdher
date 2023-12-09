<?php
include('connection.php'); 
$con = connection();

$ID_ExploracionFisica = $_POST["id"];
$escalaDolor = $_POST['escalaDolor'];
$ROM = $_POST['ROM'];
$fuerza = $_POST['fuerza'];
$tonoMuscular = $_POST['tonoMuscular'];
$dermatomas = $_POST['dermatomas'];
$reflejos = $_POST['reflejos'];
$Paciente_ID = $_POST['Paciente_ID'];

$sql = "UPDATE exploracionfisica SET escalaDolor='$escalaDolor', ROM='$ROM', fuerza='$fuerza', tonoMuscular='$tonoMuscular', dermatomas='$dermatomas', reflejos='$reflejos', Paciente_ID=$Paciente_ID WHERE ID_ExploracionFisica='$ID_ExploracionFisica'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarExploracionFisica.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
