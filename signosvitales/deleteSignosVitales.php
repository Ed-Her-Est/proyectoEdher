<?php
include("connection.php");
$con = connection();

$ID_SignosVitales = $_GET["id"];

$sql = "DELETE FROM signosvitales WHERE ID_SignosVitales='$ID_SignosVitales'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarSignosVitales.php");
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($con);
}
?>
