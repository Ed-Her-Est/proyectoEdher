<?php
include("connection.php");
$con = connection();

$ID_Fisioterapeuta = $_GET["id"];

$sql = "DELETE FROM fisioterapeuta WHERE ID_Fisioterapeuta='$ID_Fisioterapeuta'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarFisioterapeuta.php");
} else {
    echo "Error al eliminar el usuario: " . mysqli_error($con);
}
?>
