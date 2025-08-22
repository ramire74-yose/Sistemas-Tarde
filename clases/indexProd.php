<?php
// Inicia sesión
session_start();

if(!isset($_SESSION['productos'])){
    $_SESSION['productos'] = [];
}

// Incluir la clase
include 'PRODUCTO.php';

// Verifica si el formulario fue enviado
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    try {
        // Crear objeto producto
        $producto = new Producto($nombre, $precio, $cantidad);

        // Guardar en la sesión
        $_SESSION['productos'][] = [
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
        ];

    } catch(Exception $error) {
        echo "<div style='color:red;'>Error: " . $error->getMessage() . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Productos</title>
</head>
<body>
    <h1>Formulario de Registro de Productos</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre del producto</label>
        <input type="text" name="nombre" required><br>

        <label for="precio">Precio</label>
        <input type="number" name="precio" required><br>

        <label for="cantidad">Cantidad en stock</label>
        <input type="number" name="cantidad" required><br>

        <input type="submit" value="Registrar Producto">
    </form>

    <?php if(!empty($_SESSION['productos'])): ?>
        <h2>Lista de productos registrados</h2>
        <table border="1" cellpadding="5">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <?php foreach($_SESSION['productos'] as $fila): ?>
                <tr>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['precio']; ?></td>
                    <td><?php echo $fila['cantidad']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>