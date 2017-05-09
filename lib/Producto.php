<?php
    class Producto {
        public $nombre;
        public $precio;
        public $codigo;

        public function __construct() { 
            $argv = func_get_args();
            switch( func_num_args() ) {
                case 1:
                    //self::__construct1($argv[0]);
                    break;
                case 2:
                    //self::__construct2( $argv[0], $argv[1] );
                    break;
                case 3:
                    self::__construct3( $argv[0], $argv[1], $argv[2] );
            }
        }

        private function __construct3($nombre, $precio, $codigo) {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->codigo = $codigo;
        }

        public function totalUSD() {
            return $this->precio / 675;
        }
    }
?>