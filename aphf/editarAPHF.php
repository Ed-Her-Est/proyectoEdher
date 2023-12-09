<?php
include('connection.php'); 
$con = connection();

$ID_APHF = $_POST["id"];  // Cambiado de "ID_Fisioterapeuta" a "id"
$diabetes = $_POST['diabetes']; 
$HTA = $_POST['HTA'];
$cardioPatia = $_POST['cardioPatia'];
$enfReumaticas = $_POST['enfReumaticas'];
$Paciente_ID = $_POST['Paciente_ID'];

$sql = "UPDATE aphf SET diabetes='$diabetes', HTA='$HTA', cardioPatia='$cardioPatia', enfReumaticas='$enfReumaticas', Paciente_ID=$Paciente_ID WHERE ID_APHF='$ID_APHF'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarAPHF.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
