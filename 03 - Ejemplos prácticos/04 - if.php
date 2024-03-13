<?php

/**
 * La estructura condicional if es probablemente la más usada en la programación
 * Un algoritmo es, básicamente, un conjunto de condicionales trabajando de manera conjunta para dirigir
 * * el flujo de la ejecución de un modo organizado para lograr el objetivo propuesto.
 * 
 * Por ejemplo.
 * Si se requiere hacer un programa que determine si un número es par o impar. Es bien sabido que los números
 * * pares, al dividirlos entre 2, tienen resto 0, es algo que podemos evaluar y con ese valor determinar si es par o no.
 */


// Primero: Declaramos la variable que tendrá el número que vamos a evaluar
$numero = 0;

// Luego obtenemos el resto de la división entre 2, del número que vamos a evaluar
// Para obtener el resto de una división, se usa el operador '%' en lugar de '/', ya que '/' nos da el resultado y no es lo que estamos buscando en este caso

$resto = $numero % 9;

// Una vez obtenemos el resto de la división podemos elaborar la condicional y evaluar si es cero o no.
// En caso de que sea cero, habremos determinado que es un número par, sino entonces es impar.


if ($resto == 0) {
    echo "El número $numero, es par";
} else {
    echo "El número $numero, es impar";
}

/**
 * Tal como se puede ver, se debe interpretar el objetivo que se espera lograr
 * Analizar cómo se va a logar ese objetivo
 * Escribir el código.
 */

/**
 * A pesar de que este código funciona muy bien, hay una condición que no se ha evaluado
 * ¿Qué pasa si el número es cero?
 */