<?php
include('connection.php');
$con = connection();

$ID_SignosVitales = null;
$presionArterial = $_POST['presionArterial'];
$frecuenciaCardiaca = $_POST['frecuenciaCardiaca'];
$tensionArterial = $_POST['tensionArterial'];
$saturacionOxigeno = $_POST['saturacionOxigeno'];
$temperatura = $_POST['temperatura'];
$Paciente_ID = isset($_POST['Paciente_ID']) ? $_POST['Paciente_ID'] : null;

// Validar y sanitizar datos
$presionArterial = mysqli_real_escape_string($con, $presionArterial);
$frecuenciaCardiaca = (int)$frecuenciaCardiaca;  // Convertir a entero
$tensionArterial = mysqli_real_escape_string($con, $tensionArterial);
$saturacionOxigeno = (float)$saturacionOxigeno;  // Convertir a decimal
$temperatura = (float)$temperatura;  // Convertir a decimal

// Sentencia preparada para prevenir inyección SQL
$sql = "INSERT INTO signosvitales (ID_SignosVitales, presionArterial, frecuenciaCardiaca, tensionArterial, saturacionOxigeno, temperatura, Paciente_ID)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($con, $sql);

// Vincular parámetros
mysqli_stmt_bind_param($stmt, "isssddi", $ID_SignosVitales, $presionArterial, $frecuenciaCardiaca, $tensionArterial, $saturacionOxigeno, $temperatura, $Paciente_ID);

// Ejecutar la sentencia preparada
$query = mysqli_stmt_execute($stmt);

if ($query) {
    header("Location: mostrarSignosVitales.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar signos vitales: " . mysqli_error($con);
}

// Cerrar la sentencia preparada
mysqli_stmt_close($stmt);
?>

