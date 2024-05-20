<?php

require_once 'controllers/ProductoController.php';

$productoController = new ProductoController();
$productoController->listarProductos();
