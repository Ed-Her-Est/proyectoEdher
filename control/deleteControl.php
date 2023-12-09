<?php
include("connection.php");
$con = connection();

$ID_Control = $_GET["id"];

$sql = "DELETE FROM control WHERE ID_Control='$ID_Control'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarControl.php");
} else {
    echo "Error al eliminar el control: " . mysqli_error($con);
}
?>
