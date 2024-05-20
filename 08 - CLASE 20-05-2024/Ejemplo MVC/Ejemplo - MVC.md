## Ejemplo básico de MVC en PHP sin base de datos

**Estructura del proyecto:**

```
- controllers/
    - ProductoController.php
- models/
    - Producto.php
- views/
    - productos.php
- index.php
```

**1. Definir el modelo (models/Producto.php):**

```php
class Producto {

    

    public function __construct(
        private $id,
        private $nombre,
        private $precio
    ) {
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }
}
```

**2. Definir el controlador (controllers/ProductoController.php):**

```php
class ProductoController {

    public function listarProductos() {
        $productos = [
            new Producto(1, "Camisa", 15.99),
            new Producto(2, "Pantalón", 29.99),
            new Producto(3, "Zapatos", 49.99)
        ];

        // Enviar datos a la vista
        require_once 'views/productos.php';
    }
}
```

**3. Definir la vista (views/productos.php):**

```php
<?php

$productos = $datos; // Recibir datos del controlador

?>

<h1>Listado de productos</h1>

<ul>
    <?php foreach ($productos as $producto): ?>
        <li>
            ID: <?php echo $producto->getId(); ?><br>
            Nombre: <?php echo $producto->getNombre(); ?><br>
            Precio: <?php echo $producto->getPrecio(); ?>€
        </li>
    <?php endforeach; ?>
</ul>
```

**4. Punto de entrada (index.php):**

```php
<?php

require_once 'controllers/ProductoController.php';

$productoController = new ProductoController();
$productoController->listarProductos();
```

**Explicación del ejemplo:**

* **Modelo (Producto.php):** Define la clase `Producto` con sus atributos (ID, nombre, precio) y métodos getter/setter.
* **Controlador (ProductoController.php):** Define la acción `listarProductos` que simula la consulta a la base de datos (en este caso, un array) y envía los datos a la vista.
* **Vista (productos.php):** Recibe los datos del controlador y los muestra en una lista HTML.
* **Punto de entrada (index.php):** Crea una instancia del controlador, invoca la acción `listarProductos` y muestra la vista.

**Nota:** Este es un ejemplo básico sin base de datos. En un caso real, el modelo debería interactuar con una base de datos para obtener y almacenar datos.

**Recursos adicionales:**

* Tutorial MVC en PHP nativo: [https://victorroblesweb.es/tag/tutorial-mvc-en-php-nativo/](https://victorroblesweb.es/tag/tutorial-mvc-en-php-nativo/)
* POO y MVC en PHP: [https://es.slideshare.net/slideshow/poo-y-mvc-en-php-por-eugenia-bahit/8657294](https://es.slideshare.net/slideshow/poo-y-mvc-en-php-por-eugenia-bahit/8657294)
