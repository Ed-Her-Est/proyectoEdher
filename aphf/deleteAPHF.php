<?php
include("connection.php");
$con = connection();

$ID_APHF = $_GET["id"];

$sql = "DELETE FROM aphf WHERE ID_APHF='$ID_APHF'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarAPHF.php");
} else {
    echo "Error al eliminar el registro de APHF: " . mysqli_error($con);
}
?>
