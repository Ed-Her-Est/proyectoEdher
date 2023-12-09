<?php
include("connection.php");
$con = connection();

$ID_Consultorio = $_GET["id"];

$sql = "DELETE FROM consultorio WHERE ID_Consultorio='$ID_Consultorio'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarConsultorio.php");
} else {
    echo "Error al eliminar el consultorio: " . mysqli_error($con);
}
?>
