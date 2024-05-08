<?php

class Person
{

    /**
     * Actualmente, PHP, permite declarar atributos directamente en el constructor.
     */
    public function __construct(
        private $name,
        private $lastName,
        private $age,
        private $gender
    ) {
    }

    /**
     * Anteriormente solo era posible haciendo la asignación de valores, pero la declaración era diferente.
     * Ambas formas siguen funcionando
     */

    /**
     * private $name;
     * private $lastName;
     * private $age;
     * private $gender;
    
     * public function __construct($name, $lastName, $age, $gender)
     * {
     *     $this->name = $name;
     *     $this->lastName = $lastName;
     *     $this->age = $age;
     *     $this->gender = $gender;
     * }
     */

    public function getFullName()
    {
        return $this->name . " " . $this->lastName;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function isAdult()
    {
        return $this->age >= 18;
    }
}
