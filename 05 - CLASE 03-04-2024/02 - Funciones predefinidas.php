<?php
// Manipulación de cadenas:
//     strlen(): Obtiene la longitud de una cadena.
//     str_replace(): Reemplaza una subcadena por otra.
//     substr(): Extrae una parte de una cadena.
//     trim(): Elimina espacios en blanco al principio y al final de una cadena.
//     ucwords(): Convierte la primera letra de cada palabra a mayúscula.

// Validación de datos:
//     isset(): Comprueba si una variable está definida.
//     empty(): Comprueba si una variable está vacía.
//     is_numeric(): Comprueba si un valor es un número.
//     is_string(): Comprueba si un valor es una cadena.

// Matemáticas:
//     rand(): Genera un número aleatorio.
//     sqrt(): Calcula la raíz cuadrada de un número.
//     round(): Redondea un número.
//     ceil(): Redondea un número hacia arriba.
//     floor(): Redondea un número hacia abajo.

// Fecha y hora:
//     date(): Obtiene la fecha y hora actual.
//     time(): Obtiene la hora actual en formato Unix.
//     mktime(): Convierte una fecha y hora a formato Unix.
//     strftime(): Formatea una fecha y hora según una cadena de formato.

    /**
     * Además de las funciones que podemos crear según la necesidad de nuestro código
     * PHP ofrece una amplia gama de funciones predefinidas que te permiten realizar tareas comunes sin tener
     * que escribir código desde cero. Algunas de las funciones más usadas son:
     */

    //Funciones para manejo de strings

    // strlen(): Obtiene la longitud de una cadena.
    $cadena = "Hola mundo!";
    $longitud = strlen($cadena);

    echo "La longitud de la cadena es: $longitud\n";

    // str_replace(): Reemplaza una subcadena por otra.
    $cadena = "Hola mundo!";
    $cadena_reemplazada = str_replace("mundo", "universo", $cadena);

    echo "La cadena reemplazada es: $cadena_reemplazada\n";

    // substr(): Extrae una parte de una cadena.
    $cadena = "Hola mundo!";
    $subcadena = substr($cadena, 0, 5);

    echo "La subcadena es: $subcadena\n";

    // trim(): Elimina espacios en blanco al principio y al final de una cadena.
    $cadena = "   Hola mundo!   ";
    $cadena_recortada = trim($cadena);

    echo "La cadena recortada es: $cadena_recortada\n";

    // ucwords(): Convierte la primera letra de cada palabra a mayúscula.
    $cadena = "hola mundo";
    $cadena_mayusculas = ucwords($cadena);

    echo "La cadena con mayúsculas es: $cadena_mayusculas\n";

    // **Validación de datos**

    // isset(): Comprueba si una variable está definida
    if (isset($nombre)) {
    echo "La variable \$nombre está definida.\n";
    } else {
    echo "La variable \$nombre no está definida.\n";
    }

    // empty(): Comprueba si una variable está vacía
    $edad = "";
    if (empty($edad)) {
    echo "La variable \$edad está vacía.\n";
    } else {
    echo "La variable \$edad no está vacía.\n";
    }

    // is_numeric(): Comprueba si un valor es un número
    $numero = "123";
    if (is_numeric($numero)) {
    echo "El valor \$numero es un número.\n";
    } else {
    echo "El valor \$numero no es un número.\n";
    }

    // is_string(): Comprueba si un valor es una cadena
    $texto = "Hola mundo";
    if (is_string($texto)) {
    echo "El valor \$texto es una cadena.\n";
    } else {
    echo "El valor \$texto no es una cadena.\n";
    }

    // **Matemáticas**

    // rand(): Genera un número aleatorio
    $numero_aleatorio = rand(1, 100);
    echo "Número aleatorio: $numero_aleatorio\n";

    // sqrt(): Calcula la raíz cuadrada de un número
    $numero = 9;
    $raiz_cuadrada = sqrt($numero);
    echo "La raíz cuadrada de $numero es $raiz_cuadrada\n";

    // round(): Redondea un número
    $numero = 3.1415926535;
    $numero_redondeado = round($numero, 2);
    echo "El número $numero redondeado a dos decimales es $numero_redondeado\n";

    // ceil(): Redondea un número hacia arriba
    $numero = 3.14;
    $numero_redondeado_hacia_arriba = ceil($numero);
    echo "El número $numero redondeado hacia arriba es $numero_redondeado_hacia_arriba\n";

    // floor(): Redondea un número hacia abajo
    $numero = 3.99;
    $numero_redondeado_hacia_abajo = floor($numero);
    echo "El número $numero redondeado hacia abajo es $numero_redondeado_hacia_abajo\n";

    // **Fecha y hora**

    // date(): Obtiene la fecha y hora actual
    $fecha_hora_actual = date("Y-m-d H:i:s");
    echo "Fecha y hora actual: $fecha_hora_actual\n";

    // time(): Obtiene la hora actual en formato Unix
    $hora_actual_formato_unix = time();
    echo "Hora actual en formato Unix: $hora_actual_formato_unix\n";

    // mktime(): Convierte una fecha y hora a formato Unix
    $fecha_hora = "2023-12-31 23:59:59";
    $timestamp = mktime(23, 59, 59, 12, 31, 2023);
    echo "Timestamp de la fecha y hora $fecha_hora: $timestamp\n";