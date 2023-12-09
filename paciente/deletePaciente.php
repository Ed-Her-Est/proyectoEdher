<?php
include("connection.php");
$con = connection();

$ID_Paciente = $_GET["id"];

$sql = "DELETE FROM paciente WHERE ID_Paciente='$ID_Paciente'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarPaciente.php");
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($con);
}
?>
