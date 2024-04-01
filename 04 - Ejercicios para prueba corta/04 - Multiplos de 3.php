<?php

/**
 * Este programa muestra los múltiplos de 3 que hay entre 1 y 100.
 * 
 * **Variable:**
 * - $i: Variable de control del bucle for.
 */

// Bucle para recorrer los números del 1 al 100
for ($i = 1; $i <= 100; $i++) {

    // Si el número actual es múltiplo de 3
    if ($i % 3 == 0) {

        // Se imprime el número
        echo $i . "\n";
    }
}
