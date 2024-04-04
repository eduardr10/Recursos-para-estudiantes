<?php
/**
  * ¿Qué son las funciones?:
  *   Las funciones son bloques de código reutilizables que realizan una tarea específica. Son como mini programas dentro de tu programa principal.
  
  * Ventajas de usar funciones:
  *   Evitar código repetitivo: Agrupan tareas comunes, evitando escribir el mismo código una y otra vez.
  *   Mejorar la legibilidad: Dividen el código en partes más pequeñas y fáciles de entender.
  *   Facilitar el mantenimiento: Permiten corregir errores o modificar funcionalidades de forma localizada.
  *   Promover la modularidad: Hacen que el código sea más flexible y adaptable.

  * Componentes de una función:
  *   Nombre: Identifica la función de forma única.
  *   Parámetros: Valores que se le pasan a la función para que la procese. Son opcionales.
  *   Código: Instrucciones que la función ejecuta.
  *   Valor de retorno: Valor que la función devuelve al código principal.

  function nombreFuncion(parámetro1, parámetro2, ...): tipoRetorno {
    // Código de la función
    return valorRetorno;
  }

  *   
  */

  // Estructura de una función
  // function: palabra reservada para funciones
  // Saludar: Es el nombre de la función
  // $nombre: Lo que está entre paréntesis son los parametros. Puede tener o no tener parametros una función
  // return: Sirve para devolver al flujo del programa el resultado de haber procesado la función
  function saludar($nombre) {
    return "Hola {$nombre} :)";
  }

  // Para usar una función se la debe "llamar". Eso significa usar su nombre y enviarle los parametros que requiera.
  // Para usar la función que acabamos de ver, podemos usar lo siguiente:

  $saludo = saludar("Taylor");
  // En la variable $saludo, se almacenará el valor que return la función saludar.
  // Para este caso específico será el mensaje "Hola taylor :)"
  // para visualizarlo escribiríamos echo $saludo;
  echo $saludo;

  