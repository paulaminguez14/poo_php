<?php
    class ProductoController {
        // private $Servicio;

        public function __construct() {
            // aquí creamos la construcción al objeto del Servicio
        }

        public function listarProducto() {
            // usar el atributo Servicio y traerse los datos de la BBDD
        }

        public function ejecuta() {
            // el index va a llamarlo
            $productos = $this->listarProducto();
            // cargar la vista y guardar los productos
            require_once("Vista/Main.php");
        }
    }