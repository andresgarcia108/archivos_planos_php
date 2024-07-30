<?php
// Leer el archivo estudiantes.txt
$estudiantes = file('estudiantes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
</head>
<body>
    <h1>Lista de Estudiantes</h1>
    <ul>
        <?php
        if (!empty($estudiantes)) {
            foreach ($estudiantes as $estudiante) {
                echo '<li>' . htmlspecialchars($estudiante) . '</li>';
            }
        } else {
            echo '<li>No hay estudiantes registrados.</li>';
        }
        ?>
    </ul>
    <br>
    <a href="registrar.php">Registrar nuevo estudiante</a>
</body>
</html>
