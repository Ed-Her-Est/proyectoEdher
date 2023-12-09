<?php
include('connection.php');
$con = connection();

$ID_DatosGenerales = null;
$nombre = $_POST['nombre'];
$domicilio = $_POST['domicilio'];
$numeroEmergencia = $_POST['numeroEmergencia'];
$edad = $_POST['edad'];
$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
$estadoCivil = $_POST['estadoCivil'];
$escolaridad = $_POST['escolaridad'];
$religion = $_POST['religion'];
$motivoConsulta = $_POST['motivoConsulta'];
$Paciente_ID = $_POST['Paciente_ID']; 

// Comprueba si el Paciente_ID existe en la tabla paciente
$check_paciente_sql = "SELECT * FROM paciente WHERE ID_Paciente = '$Paciente_ID'";
$result_check_paciente = mysqli_query($con, $check_paciente_sql);

if (mysqli_num_rows($result_check_paciente) > 0) {
    // El paciente existe, ahora puedes insertar en datosgenerales
    $insert_sql = "INSERT INTO datosgenerales (ID_DatosGenerales, nombre, domicilio, numeroEmergencia, edad, estatura, peso, estadoCivil, escolaridad, religion, motivoConsulta, Paciente_ID) 
        VALUES ('$ID_DatosGenerales', '$nombre', '$domicilio', '$numeroEmergencia', '$edad', '$estatura', '$peso', '$estadoCivil', '$escolaridad', '$religion', '$motivoConsulta', '$Paciente_ID')"; 

    $query_insert = mysqli_query($con, $insert_sql);

    if ($query_insert) {
        header("Location: mostrarDatosGenerales.php");
        exit();
    } else {
        echo "Error al insertar datos generales: " . mysqli_error($con);
    }
} else {
    echo "Error: El Paciente_ID no existe en la tabla paciente.";
}
?>
