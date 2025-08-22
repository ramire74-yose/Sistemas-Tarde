<?php
class persona {
    public $nombre;
    public $telefono;
    public $edad;

    public function esMayorDeEdad() {
        return $this->edad >= 18;
    }
}
?>