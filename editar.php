<?php
include('conexion.php');
$id = $_GET['id'];
$entradas = mysqli_query($conexion, "SELECT * FROM entradas WHERE id = '$id'");
$edicion = mysqli_fetch_assoc($entradas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Edición</title>
</head>
<body>
    <form method="post" action="actualizar.php">
        <input type="text" name="titulo" value="<?php echo $edicion['titulo']; ?>">
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