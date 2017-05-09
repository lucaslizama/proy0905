<?php
    include "Producto.php";

    class ConsultaProductos {
        private function Conexion() {
            $miconn = new mysqli("localhost","root","","datospersonales");

            if($miconn->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error . "\n";
                exit;
            }

            return $miconn;
        }

        public function Lista() {
            $sql = "select * from productos";

            $resultado = $this->Conexion()->query($sql);
            $aProductos = array();

            while($fila = $resultado->fetch_assoc()) {
                array_push($aProductos, new Producto($fila["nombre"], $fila["precio"], $fila["codigo"]));
            }

            return $aProductos;
        }
    }
?>