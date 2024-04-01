<?php

/**
 * Este programa calcula el promedio de los números pares que hay entre el 25 y el 619.
 * 
 * **Variables:**
 * - $acumulado: Almacena la suma acumulada de los números pares.
 * - $n: Almacena la cantidad de números pares encontrados.
 * - $i: Variable de control del bucle for.
 * - $promedio: Almacena el promedio final de los números pares.
 */

// Inicializamos las variables
$acumulado = 0;
$n = 0;

// Bucle que recorre los números del 25 al 619
for ($i = 25; $i <= 619; $i++) {

    // Si el número es par
    if ($i % 2 == 0) {

        // Se suma el número al acumulador
        $acumulado = $acumulado + $i;

        // Se incrementa la cantidad de números pares encontrados
        $n++;
    }
}

// Se calcula el promedio dividiendo la suma acumulada por la cantidad de números pares
$promedio = $acumulado / $n;

// Se imprime el resultado del promedio
echo "El promedio de los números pares entre 25 y 619 es: $promedio";
