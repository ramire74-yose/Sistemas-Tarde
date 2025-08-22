<?php
class Cliente {
    private $nombre;
    private $nit;
    private $correo;

    public function __construct($nombre = null, $nit = null, $correo = null) {
        $this->setNombre($nombre);
        $this->setNit($nit);
        $this->setCorreo($correo);
    }

    // SETTERS
    public function setNombre($nombre) {
        if (!empty(trim($nombre)) && !ctype_digit($nombre)) {
            $this->nombre = $nombre;
        } else {
            throw new Exception("El nombre no puede contener solo números.");
        }
    }

    public function setNit($nit) {
        if (!empty(trim($nit)) && ctype_digit($nit)) {
            $this->nit = $nit;
        } else {
            throw new Exception("El NIT debe contener solo números.");
        }
    }

    public function setCorreo($correo) {
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->correo = $correo;
        } else {
            throw new Exception("Correo no válido.");
        }
    }

    // GETTERS
    public function getNombre() {
        return $this->nombre;
    }

    public function getNit() {
        return $this->nit;
    }

    public function getCorreo() {
        return $this->correo;
    }

    // Mostrar Cliente
    public function MostrarCliente() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "NIT: " . $this->nit . "<br>";
        echo "Correo: " . $this->correo . "<br><br>";
    }
}
?>