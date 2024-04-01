<?php

/**
 * Este programa calcula el factorial de un número introducido por el usuario.
 * El número debe estar entre 1 y 7.
 * 
 * **Variables:**
 * - $numero: Almacena el número introducido por el usuario.
 * - $factorial: Almacena el factorial del número.
 * - $i: Variable de control del bucle for.
 */

// Pedir al usuario que introduzca un número
$numero = readline("Ingrese un número entre 1 y 7: ");

// Comprobar si el número está entre 1 y 7
if ($numero >= 1 && $numero <= 7) {

    // Inicializar el factorial a 1
    $factorial = 1;

    // Bucle para calcular el factorial
    for ($i = 1; $i <= $numero; $i++) {

        // Multiplicar el factorial por el valor actual de $i
        $factorial = $factorial * $i;

        // **Explicación del cálculo:**
        // En cada iteración del bucle, se multiplica el valor actual de `$factorial` por el valor actual de `$i`. 
        // Por ejemplo, si el número introducido es 4, el cálculo sería el siguiente:
        //
        // - Iteración 1: `$factorial = 1 * 1 = 1`
        // - Iteración 2: `$factorial = 1 * 2 = 2`
        // - Iteración 3: `$factorial = 2 * 3 = 6`
        // - Iteración 4: `$factorial = 6 * 4 = 24`

    }

    // Mostrar el resultado del factorial
    echo "El resultado es: $factorial";
} else {

    // Mostrar un mensaje de error si el número no está entre 1 y 7
    echo "No se puede calcular el factorial de $numero";
}
