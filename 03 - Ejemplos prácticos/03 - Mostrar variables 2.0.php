<?php

/**
 * Ahora probemos con muchas variables y las concatenamos de diferentes formas. :)
 * Verán strings con comillas simples y comiilas dobles... Y con ambas, inlcuso
 */

$semestre = 5;
$materia = 'programación';

// Podemos concatenar de mucha formas. Aquí algunas sin ningún órden en específico

echo 'Buenos días, esta materia se llama ' . $materia . ' y es del ' . $semestre . '° semestre.';
echo "Buenos días, esta materia se llama $materia y es del $semestre semestre.";
echo "Buenos días, esta materia se llama {$materia} y es del {$semestre} semestre.";
