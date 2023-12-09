<?php
include("connection.php");
$con = connection();

$ID_Expediente = $_GET["id"]; // Cambiado de "ID_Fisioterapeuta" a "ID_Expediente"

$sql = "DELETE FROM expediente WHERE ID_Expediente='$ID_Expediente'"; // Cambiado de "fisioterapeuta" a "expediente"
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarExpediente.php"); // Cambiado de "mostrarFisioterapeuta.php" a "mostrarExpediente.php"
} else {
    echo "Error al eliminar el expediente: " . mysqli_error($con);
}
?>
