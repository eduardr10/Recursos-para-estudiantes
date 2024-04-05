<?php

function number_of_elements($data)
{
    return count($data);
}

function get_a_random_element($data)
{
    $index = rand(0, number_of_elements($data) - 1);
    return $data[$index];
}

$students = [
    'Ana Rodriguez',
    'Anny Acuña',
    'Juliannys Ortega',
    'Karthleen Cedeño',
    'Libny Córdova',
    'Miguel Rodríguez',
    'Victor Malavé',
    'Victoria Vásquez',
    'Jesús Yendis',
    'Hans Rivera',
    'Orianna Mata',
    'Jesús Brito'
];

$teachers = [
    'Génesis Hernández',
    'Eduard Espinoza',
];

// Función que recibe el nombre de un estudiante y un arreglo con los profesores disponibles para tutorías
function asign_teacher($student, $teachers)
{
    return [
        'student' => $student,
        'teacher' => get_a_random_element($teachers)
    ];
}


echo asign_teacher(get_a_random_element($students), $teachers);