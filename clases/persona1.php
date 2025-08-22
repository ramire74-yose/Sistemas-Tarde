<?php 
class persona{
    public $Nombre;
    public $telefono;
    public $edad;
    

    public function __construct($Nombre=null, $telefono=null, $edad=null)
    {
        $this->setNombre($Nombre);
        $this->settelefono($telefono);
        $this->setedad($edad);
    }

    public function setNombre($Nombre){
        // is_string y ctype_digit validan que sea una cadena y no contenga solo números
        if (is_string($Nombre) && !empty(trim($Nombre)) && !ctype_digit($Nombre) ){
            $this->Nombre = $Nombre;
        } else {
            throw new Exception("El nombre no debe estar vacío, ni contener solo números.");
        }
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function settelefono($telefono){
        // ctype_digit valida que la cadena contenga solo dígitos
        if (ctype_digit($telefono)){
            $this->telefono = $telefono;
        }else{
            throw new Exception("El teléfono debe contener solo números.");
        }
    }
    
    public function gettelefono(){
        return $this->telefono;
    }

    public function setedad($edad){
        // is_numeric valida que sea un valor numérico
        if (is_numeric($edad) && $edad >= 0){
            $this->edad = $edad;
        }else{
            throw new Exception("La edad debe ser un número positivo.");
        }
    }

    public function getedad(){
        return $this->edad;
    }

    public function MostrarDatos(){
        echo "Nombre: " . $this->Nombre . "<br>";
        echo "Teléfono: " . $this->telefono . "<br>";
        echo "Edad: " . $this->edad . "<br>";
    }
    
    public function Esmayor(){
        if($this->edad > 18){
            echo("Es mayor de edad.<br>");
        }
        else{
            echo ("Es menor de edad.<br>");
        }
    }
}
?>