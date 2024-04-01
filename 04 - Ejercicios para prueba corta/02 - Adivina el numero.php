<?php

/**
 * Este programa genera un número aleatorio entre 1 y 100 y permite al usuario adivinarlo.
 * El usuario tiene 10 intentos como máximo.
 * 
 * **Variables:**
 * - $aleatorio: Almacena el número aleatorio generado.
 * - $numero: Almacena el número introducido por el usuario.
 * - $i: Variable de control del bucle for.
 */

// Generar un número aleatorio entre 1 y 100
$aleatorio = rand(1, 100);

// Bucle para los 10 intentos
for ($i = 1; $i <= 10; $i++) {

    // Pedir al usuario que introduzca un número
    $numero = readline("Ingrese un número: ");

    // Comprobar si el número introducido es el número aleatorio
    if ($aleatorio == $numero) {

        // Mostrar un mensaje de que el usuario ha adivinado el número
        echo "Adivinaste, el número era: $numero";

        // Salir del programa
        exit;
    } else {

        // Mostrar un mensaje de que el usuario ha fallado y cuántos intentos le quedan
        echo "Fallaste, tienes " . (10 - $i) . " intentos restantes\n";
    }
}

// Mostrar un mensaje de que el usuario ha perdido
echo "GAME OVER";
