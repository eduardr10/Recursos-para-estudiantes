<?php

/**
 * **Ejercicio 3: Creando una jerarquía de clases con herencia**

Diseñar una jerarquía de clases a partir de la clase "Animal" que incluya las subclases "Perro" y "Gato". Cada subclase debe tener atributos y métodos específicos (por ejemplo, raza, ladrar, maullar). Implementar un método general en la clase "Animal" para emitir un sonido (que las subclases puedan redefinir).
 */

class Animal
{
    public function __construct(private $name, private $age)
    {
    }

    public function makeSound()
    {
        return "Animal sound";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Dog extends Animal
{
    public function __construct($name, $age, private $breed)
    {
        parent::__construct($name, $age);
    }

    public function makeSound()
    {
        return "Guau!";
    }

    public function getBreed()
    {
        return $this->breed;
    }
}

class Cat extends Animal
{
    public function __construct($name, $age, private $color)
    {
        parent::__construct($name, $age);
    }

    public function makeSound()
    {
        return "Miau!";
    }

    public function getColor()
    {
        return $this->color;
    }
}

$dog = new Dog("Max", 3, "Labrador Retriever");
$cat = new Cat("Whiskers", 2, "Orange");

echo $dog->getName() . " (" . $dog->getBreed() . ") makes sound: "  . $dog->makeSound() . "\n";

echo $cat->getName() . " (" . $cat->getColor() . ") makes sound: "  . $cat->makeSound();
