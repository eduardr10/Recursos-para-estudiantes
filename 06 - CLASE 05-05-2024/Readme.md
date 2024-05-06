# Introducción a la Programación Orientada a Objetos en PHP

La Programación Orientada a Objetos (POO) es un paradigma de programación que se basa en la creación de objetos que pueden contener datos y funciones. En PHP, la POO nos permite estructurar nuestro código de una manera más organizada y modular.

## Clases y Objetos

En la POO, una clase es una plantilla para crear objetos. Un objeto es una instancia de una clase. Veamos un ejemplo de cómo definir una clase en PHP:

```php
class Persona {
    // Propiedades
    public $nombre;
    public $edad;

    // Método constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método
    public function saludar() {
        echo "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.";
    }
}
```

En este ejemplo, hemos definido una clase `Persona` con dos propiedades (`$nombre` y `$edad`) y dos métodos (`__construct()` y `saludar()`).

Para crear un objeto a partir de esta clase, simplemente instanciamos la clase:

```php
$persona1 = new Persona("Juan", 25);
```

## Propiedades y Métodos

Las propiedades son variables asociadas a un objeto, mientras que los métodos son funciones asociadas a un objeto. Podemos acceder a las propiedades y métodos de un objeto utilizando la sintaxis de flecha (`->`). Por ejemplo:

```php
echo $persona1->nombre; // Imprime: Juan
echo $persona1->edad; // Imprime: 25
$persona1->saludar(); // Imprime: Hola, mi nombre es Juan y tengo 25 años.
```

## Encapsulación

La encapsulación es el concepto de ocultar la implementación interna de un objeto y solo permitir el acceso controlado a sus propiedades y métodos. En PHP, podemos definir la visibilidad de las propiedades y métodos utilizando los modificadores de acceso: `public`, `private` y `protected`.

- `public`: Accesible desde cualquier parte del código.
- `private`: Accesible solo desde la propia clase.
- `protected`: Accesible desde la propia clase y las clases heredadas.

Veamos un ejemplo de encapsulación:

```php
class Auto {
    private $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca() {
        return $this->marca;
    }
}
```

En este ejemplo, la propiedad `$marca` es privada, por lo que solo puede ser accedida dentro de la clase `Auto`. La propiedad `$modelo` es protegida, por lo que también puede ser accedida desde las clases heredadas.

## Herencia

La herencia es un concepto que nos permite crear nuevas clases basadas en clases existentes. La clase que hereda se llama subclase o clase hija, y la clase de la que se hereda se llama superclase o clase padre.

Veamos un ejemplo de herencia:

```php
class Empleado extends Persona {
    private $salario;

    public function __construct($nombre, $edad, $salario) {
        parent::__construct($nombre, $edad);
        $this->salario = $salario;
    }

    public function trabajar() {
        echo "{$this->nombre} está trabajando.";
    }
}
```

En este ejemplo, la clase `Empleado` hereda de la clase `Persona`. Ahora la clase `Empleado` tiene todas las propiedades y métodos de la clase `Persona`, además de sus propias propiedades y métodos.

## Polimorfismo

El polimorfismo es la capacidad de diferentes clases de tener métodos con el mismo nombre pero con comportamientos diferentes. Esto nos permite tratar objetos de diferentes clases de la misma manera.

Veamos un ejemplo de polimorfismo:

```php
interface Animal {
    public function hacerSonido();
}

class Perro implements Animal {
    public function hacerSonido() {
        echo "Guau";
    }
}

class Gato implements Animal {
    public function hacerSonido() {
        echo "Miau";
    }
}

$perro = new Perro();
$gato = new Gato();

$perro->hacerSonido(); // Imprime: Guau
$gato->hacerSonido(); // Imprime: Miau
```

En este ejemplo, tanto la clase `Perro` como la clase `Gato` implementan la interfaz `Animal`, pero cada una tiene su propia implementación del método `hacerSonido()`.
