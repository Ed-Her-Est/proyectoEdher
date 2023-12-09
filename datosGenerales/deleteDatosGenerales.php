<?php
include("connection.php");
$con = connection();

$ID_DatosGenerales = $_GET["id"];

$sql = "DELETE FROM datosgenerales WHERE ID_DatosGenerales='$ID_DatosGenerales'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosGenerales.php");
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($con);
}
?>
