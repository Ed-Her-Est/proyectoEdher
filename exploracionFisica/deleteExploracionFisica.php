<?php
include("connection.php");
$con = connection();

$ID_ExploracionFisica = $_GET["id"]; // Cambiado de "ID_Fisioterapeuta" a "ID_ExploracionFisica"

$sql = "DELETE FROM exploracionfisica WHERE ID_ExploracionFisica='$ID_ExploracionFisica'"; // Cambiado de "fisioterapeuta" a "exploracionfisica"
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarExploracionFisica.php"); // Cambiado de "mostrarFisioterapeuta.php" a "mostrarExploracionFisica.php"
} else {
    echo "Error al eliminar la exploración física: " . mysqli_error($con);
}
?>
