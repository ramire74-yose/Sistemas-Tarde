<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

    <title>Document</title>
</head>   
<body>

    <h1>FORMULARIO PERSONA </h1>
    <form action = "" method="POST">
    <label for=" nombre">Nombre</label>
    <input type="text" name="nombre" required>

    <label for=" telefono">Telefono</label>
    <input type="text" name="telefono" required>

    <label for=" edad">Edad</label>
    <input type="number" name="edad" required>
    <input type="submit" value="Enviar datos">
</form>
</body>
</html>

<?php
include 'persona1.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=($_POST['nombre']);
    $telefono=($_POST['telefono']);
    $edad=($_POST['edad']);
}
    $persona1=new persona($nombre, $telefono, $edad);

    echo "<br>";
    echo "<div class='persona1'>";
    $persona1->mostrarPersona();
    echo "</div>";



?>



