<?php
include('conexion.php');
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$autores = implode(', ', $autor);
mysqli_query($conexion, "INSERT INTO entradas (titulo, autor) VALUES ('$titulo', '$autores')");
echo '<script>window.location="./"</script>';
?>