<?php 
class Producto {
    public $nombre;
    public $precio;
    public $cantidad;

    public function __construct($nombre=null, $precio=null, $cantidad=null) {
        $this->setNombre($nombre);
        $this->setPrecio($precio);
        $this->setCantidad($cantidad);
    }

    public function setNombre($nombre){
        if(is_string($nombre) && !empty(trim($nombre)) && !ctype_digit($nombre)){
            $this->nombre = $nombre;
        } else {
            throw new Exception("El nombre no debe estar vacío ni contener solo números.");
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setPrecio($precio){
        if(is_numeric($precio) && $precio > 0){
            $this->precio = (int)$precio;
        } else {
            throw new Exception("El precio debe ser un número positivo.");
        }
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setCantidad($cantidad){
        if(is_numeric($cantidad) && $cantidad >= 0){
            $this->cantidad = (int)$cantidad;
        } else {
            throw new Exception("La cantidad debe ser un número entero positivo.");
        }
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function mostrarDatos(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Cantidad: " . $this->cantidad . "<br>";
    }
}
?>