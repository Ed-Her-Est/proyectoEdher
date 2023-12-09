<?php
include('connection.php'); 
$con = connection();

$ID_APHF = null; // Cambiado de "ID_Fisioterapeuta" a "ID_APHF"
$diabetes = $_POST['diabetes']; 
$HTA = $_POST['HTA'];
$cardioPatia = $_POST['cardioPatia'];
$enfReumaticas = $_POST['enfReumaticas'];
$Paciente_ID = $_POST['Paciente_ID']; // Añadido el campo "Paciente_ID"

$sql = "INSERT INTO aphf (ID_APHF, diabetes, HTA, cardioPatia, enfReumaticas, Paciente_ID) 
        VALUES ('$ID_APHF', '$diabetes', '$HTA', '$cardioPatia', '$enfReumaticas', '$Paciente_ID')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarAPHF.php"); // Cambiado de "mostrarFisioterapeuta.php" a "mostrarAPHF.php"
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar APHF: " . mysqli_error($con);
}
?>
