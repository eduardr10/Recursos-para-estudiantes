<?php

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
    private $breed;

    public function __construct($name, $age, $breed)
    {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function makeSound()
    {
        return "Bark!";
    }

    public function getBreed()
    {
        return $this->breed;
    }
}

class Cat extends Animal
{
    private $color;

    public function __construct($name, $age, $color)
    {
        parent::__construct($name, $age);
        $this->color = $color;
    }

    public function makeSound()
    {
        return "Meow!";
    }

    public function getColor()
    {
        return $this->color;
    }
}

$dog = new Dog(name: "Max", age: 3, breed: "Labrador Retriever");
$cat = new Cat(name: "Whiskers", age: 2, color: "Orange");

echo $dog->getName() . " (" . $dog->getBreed() . ") makes sound: ";
$dog->makeSound(); // Output: Bark!

echo $cat->getName() . " (" . $cat->getColor() . ") makes sound: ";
$cat->makeSound(); // Output: Meow!
