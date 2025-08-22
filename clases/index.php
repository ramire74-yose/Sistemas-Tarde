<?php
include 'persona.php';

$persona1 = new persona();
$persona1->nombre = "Juan Perez";
$persona1->telefono = "6547651";
$persona1->edad = 24;

echo "Nombre: " . $persona1->nombre . "<br>";
echo "Edad: " . $persona1->edad . "<br>";
echo "Telefono: " . $persona1->telefono . "<br>";

// Verifica si es mayor de edad
if ($persona1->esMayorDeEdad()) {
    echo "Es mayor de edad<br><br>";
} else {
    echo "Es menor de edad<br><br>";
}


$persona2 = new persona();
$persona2->nombre = "johan Perez";
$persona2->telefono = "1234532";
$persona2->edad = 16;

echo "Nombre: " . $persona2->nombre . "<br>";
echo "Telefono: " . $persona2->telefono . "<br>";
echo "Edad: " . $persona2->edad . "<br>";

//V
if ($persona2->esMayorDeEdad()) {
    echo "Es mayor de edad<br>";
} else {
    echo "Es menor de edad<br>";
}
$persona3 = new persona();
$persona3->nombre = "Carlos Gomez";
$persona3->telefono = "7894561";
$persona3->edad = 35;

echo "Nombre: " . $persona3->nombre . "<br>";
echo "Telefono: " . $persona3->telefono . "<br>";
echo "Edad: " . $persona3->edad . "<br>";

if ($persona3->esMayorDeEdad()) {
    echo "Es mayor de edad<br>";
} else {
    echo "Es menor de edad<br>";
}
?>