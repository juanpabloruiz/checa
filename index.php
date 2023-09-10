<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expedientes</title>
</head>
<body>
    <a href="nuevo.php">Agregar nuevo</a>
    <hr>
    <table>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Funciones</th>
        </tr>
        <?php
        $entradas = mysqli_query($conexion, "SELECT * FROM entradas");
        while ($campo = mysqli_fetch_assoc($entradas)) {
        ?>
            <tr>
                <td><?php echo $campo['id']; ?></td>
                <td><?php echo $campo['titulo']; ?></td>
                <td><a href="editar.php?id=<?php echo $campo['id']; ?>">Editar</a></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>