<?php

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

$shapes = [
    new Circle(5),
    new Square(4),
];

foreach ($shapes as $shape) {
    echo get_class($shape) . " area: " . $shape->calculateArea() . "\n";
}
