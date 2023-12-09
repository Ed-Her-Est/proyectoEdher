<?php
include("connection.php");
$con = connection();

$ID_Cita = $_GET["id"];

$sql = "DELETE FROM cita WHERE ID_Cita='$ID_Cita'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCita.php");
} else {
    echo "Error al eliminar la cita: " . mysqli_error($con);
}
?>
