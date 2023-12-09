<?php
include('connection.php');
$con = connection();

$ID_DatosGenerales = $_POST["id"];  // Cambiado de "ID_Fisioterapeuta" a "ID_DatosGenerales"
$nombre = $_POST['nombre'];
$domicilio = $_POST['domicilio'];  // Asumí que "domicilio" está presente en tu formulario
$numeroEmergencia = $_POST['numeroEmergencia'];  // Asumí que "numeroEmergencia" está presente en tu formulario
$edad = $_POST['edad'];
$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
$estadoCivil = $_POST['estadoCivil'];
$escolaridad = $_POST['escolaridad'];
$religion = $_POST['religion'];
$motivoConsulta = $_POST['motivoConsulta'];
$Paciente_ID = $_POST['Paciente_ID']; 

$sql = "UPDATE datosgenerales SET nombre='$nombre', domicilio='$domicilio', numeroEmergencia='$numeroEmergencia', edad='$edad', estatura='$estatura', peso='$peso', estadoCivil='$estadoCivil', escolaridad='$escolaridad', religion='$religion', motivoConsulta='$motivoConsulta', Paciente_ID='$Paciente_ID' WHERE ID_DatosGenerales='$ID_DatosGenerales'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: mostrarDatosGenerales.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
