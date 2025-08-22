<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
    <link rel="stylesheet" href="estiloCliente.css">
</head>
<body>
    <h1>Formulario Cliente</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="nit">NIT:</label>
        <input type="text" name="nit" required>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required>

        <label for="nombre2">Nombre (Cliente 2):</label>
        <input type="text" name="nombre2" required>

        <label for="nit2">NIT (Cliente 2):</label>
        <input type="text" name="nit2" required>

        <label for="correo2">Correo (Cliente 2):</label>
        <input type="email" name="correo2" required>

        <input type="submit" value="Enviar Datos">
    </form>

<?php
include 'cliente.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $cliente1 = new Cliente($_POST['nombre'], $_POST['nit'], $_POST['correo']);
        $cliente2 = new Cliente($_POST['nombre2'], $_POST['nit2'], $_POST['correo2']);

        echo "<h2>Datos del Cliente 1:</h2>";
        $cliente1->MostrarCliente();

        echo "<h2>Datos del Cliente 2:</h2>";
        $cliente2->MostrarCliente();

    } catch (Exception $e) {
        echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
    }
}
?>
</body>
</html>