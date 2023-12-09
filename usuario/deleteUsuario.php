<?php
include("connection.php");
$con = connection();

$ID_Usuario = $_GET["id"];

$sql = "DELETE FROM usuario WHERE ID_Usuario='$ID_Usuario'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrar.php");
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($con);
}
?>
