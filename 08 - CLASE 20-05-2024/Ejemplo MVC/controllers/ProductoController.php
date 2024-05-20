<?php
require_once 'models/Producto.php';

class ProductoController
{

    public function listarProductos()
    {
        /**
         * Lo normal en una app que tenga bases de datos 
         * no sería crear un array aqui sino sacarlo de la BD
         */

        $productos = [
            new Producto(1, "Camisa", 15.99),
            new Producto(2, "Pantalón", 29.99),
            new Producto(3, "Zapatos", 49.99)
        ];

        require_once 'views/productos.php';
    }
}
