<?php

/**
 * Crear una clase llamada "Persona" que tenga los siguientes atributos: nombre, apellido, edad y género. Definir un constructor que inicialice los atributos y métodos para:

 * Obtener el nombre completo (nombre + apellido).
 * Cambiar la edad.
 * Indicar si la persona es mayor de edad
 */

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
        return $this->age;
    }

    public function isAdult()
    {
        return $this->age >= 18;
    }
}

$persona1 = new Person("Libny", "Córdova", "32", "Femenino");

$persona1->setAge(17);
// echo $persona1->getFullName();
// var_dump($persona1);
// echo $persona1->isAdult();
if ($persona1->isAdult()) {
    echo "Sí es adulta";
} else {
    echo "No es adulta";
}
