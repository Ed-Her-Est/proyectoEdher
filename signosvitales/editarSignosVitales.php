<?php

include('connection.php'); 
$con = connection();

$ID_SignosVitales = $_POST["id"];  // Cambiado de "ID_Usuario" a "id"
$presionArterial = $_POST['presionArterial']; 
$frecuenciaCardiaca = $_POST['frecuenciaCardiaca'];
$tensionArterial = $_POST['tensionArterial'];
$saturacionOxigeno = $_POST['saturacionOxigeno'];
$temperatura = $_POST['temperatura'];
$Paciente_ID = $_POST['Paciente_ID'];
   
$sql = "UPDATE signosvitales SET presionArterial='$presionArterial', frecuenciaCardiaca='$frecuenciaCardiaca', tensionArterial='$tensionArterial', saturacionOxigeno='$saturacionOxigeno', temperatura='$temperatura', Paciente_ID='$Paciente_ID' WHERE ID_SignosVitales='$ID_SignosVitales'"; // Corregido el nombre de las columnas y agregado el signo de igual después de WHERE
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: mostrarSignosVitales.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}

?>
