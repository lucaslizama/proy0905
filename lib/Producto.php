<?php
    class Producto {
        public $nombre = '';
        public $precio = 0;
        public $codigo = '';

        function __construct() {}

        function __construct1($nombre, $precio, $codigo) {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->codigo = $codigo;
        }
    }
?>