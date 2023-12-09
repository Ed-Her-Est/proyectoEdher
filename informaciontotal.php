<?php

// Configuración de la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'clinica';

// Conexión a la base de datos
$conexion = mysqli_connect($host, $user, $password, $database);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Tablas a consultar
$tablas = [
    'Usuario',
    'Fisioterapeuta',
    'Paciente',
    'Consultorio',
    'DatosGenerales',
    'SignosVitales',
    'APHF',
    'ExploracionFisica',
    'Control',
    'Expediente',
    'Cita'
];

// Mostrar los resultados en una tabla HTML
echo "<html>
        <head>
            <title>Visualización de Datos</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        </head>
        <body class='bg-light'>
            <div class='container mt-5'>
                <h1 class='mb-4'>Información de Todas las Tablas</h1>";

foreach ($tablas as $tabla) {
    // Consulta SQL
    $sql = "SELECT * FROM $tabla";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la consulta se ejecutó correctamente
    if (!$resultado) {
        die("Error en la consulta para la tabla $tabla: " . mysqli_error($conexion));
    }

    // Mostrar título de la tabla
    echo "<h2>$tabla</h2>";

    // Mostrar los resultados en una tabla Bootstrap
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='thead-dark'><tr>";
    
    // Obtener los nombres de las columnas
    while ($columna = mysqli_fetch_field($resultado)) {
        echo "<th>{$columna->name}</th>";
    }
    
    echo "</tr></thead><tbody>";

    // Obtener los datos
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        // Mostrar los valores de cada fila
        foreach ($fila as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }

    // Cerrar la tabla Bootstrap
    echo "</tbody></table>";

    // Liberar el resultado
    mysqli_free_result($resultado);
}

// Cerrar la conexión
mysqli_close($conexion);

echo "</div></body></html>";
?>

