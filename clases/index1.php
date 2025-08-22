<?php
// Inicia la sesión
session_start();

if(!isset($_SESSION['persona'])){
    $_SESSION['persona']=[];
}
// Incluye la clase persona
include 'PERSONA.php';

// Verifica si la solicitud es de tipo POST
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=($_POST['nombre']);
    $telefono=($_POST['telefono']);
    $edad=($_POST['edad']);

    try {
        // Crea una nueva instancia de la clase 'persona'
        $persona1 = new persona($nombre, $telefono, $edad);
        
        $_SESSION['persona'][]=[
            'nombre'=>$nombre,
            'telefono'=>$telefono,
            'edad'=>$edad
        ];
        
    } catch(Exception $error) {

        echo "<div class='error-message'>";
        echo "Error: " . $error->getMessage();
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario Persona</title>
</head>
<body>
    <h1>FORMULARIO PERSONA</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        <br>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" required>
        <br>
        <label for="edad">Edad</label>
        <input type="number" name="edad" required>
        <br>
        <input type="submit" value="Enviar datos">
        
    </form>
    <?php
        if(!empty($_SESSION['persona'])):?>
        <h2><center>Lista de personas registradas</center></h2>
        <table border="1" cellpadding="5" align="center">
            <tr>
                <th>nombre</th>
                <th>telefono</th>
                <th>edad</th>
            </tr>
            <?php foreach($_SESSION['persona'] as $fila):?>
                <tr>
                    <td><?php echo ($fila['nombre']); ?></td>
                    <td><?php echo ($fila['telefono']); ?></td>
                    <td><?php echo ($fila['edad']); ?></td>
                </tr>
            <?php endforeach; ?>  
        </table>
        <?php endif; ?>
</body>
</html>