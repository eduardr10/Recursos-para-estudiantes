<?php

/**
 * **Ejercicio 4: Implementando polimorfismo con interfaces**

Crear una interfaz llamada "FiguraGeometrica" que defina un método para calcular el área. Implementar dos clases que implementen la interfaz: "Circulo" y "Cuadrado". Cada clase debe tener sus atributos y métodos específicos para calcular el área de acuerdo a su forma. Demostrar el polimorfismo creando un arreglo de objetos "FiguraGeometrica" y calculando el área de cada uno.
 */

interface Shape
{
    public function calculateArea(): float;
}

class Circle implements Shape
{
    public function __construct(private $radius)
    {
    }

    public function calculateArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }
}

class Square implements Shape
{

    public function __construct(private $sideLength)
    {
    }

    public function calculateArea(): float
    {
        return $this->sideLength * $this->sideLength;
    }
}

class Triangle implements Shape
{

    public function __construct(private $base, private $height)
    {
    }

    public function calculateArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}

$shapes = [
    new Circle(5),
    new Square(4),
    new Triangle(2, 5),
];

foreach ($shapes as $shape) {
    echo get_class($shape) . " area: " . $shape->calculateArea() . "\n";
}
