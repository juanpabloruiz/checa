<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="insertar.php">
        <input type="text" name="titulo" placeholder="Título">
        <br>
        <?php
        $usuarios = mysqli_query($conexion, "SELECT * FROM usuarios");
        while ($campo = mysqli_fetch_assoc($usuarios)) {
            echo '<input type="checkbox" name="autor[]" value=" ' . $campo['id'] . '"> ' . $campo['nombre'] . '<br>';
        }
        ?>
        <input type="submit">
    </form>
</body>
</html>