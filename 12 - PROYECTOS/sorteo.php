<?php

$grupos = [
    [
        'Victor Malave',
        'Jesus yendis',
        'José Luis cedeño',
    ],
    [
        'Orianna mata',
        'Victoria vasquez',
        'Juliannys ortega',
    ],
    [
        'Hans Rivera',
        'Anny acuña',
        'Miguel Rodríguez',
    ],
    [
        'Libny Cordova',
        'Ana Rodriguez',
        'Jesús Brito',
        'Karthleen Cedeño',
    ]
];

$proyectos = [
    'Proyecto #1',
    'Proyecto #2',
    'Proyecto #3',
    'Proyecto #4',
    'Proyecto #5',
];

$disponibles = [0, 1, 2, 3, 4];

function escoger_proyecto(&$disponibles, &$proyectos)
{
    $proyecto = $proyectos[array_rand($disponibles)];
    actualizar_disponibles($disponibles, $proyecto);
    return $proyecto;
}

function actualizar_disponibles(&$disponibles, $proyecto)
{
    $key = array_search($proyecto, $disponibles);
    if ($key !== false) {
        unset($disponibles[$key]);
    }

    return $disponibles;
}

foreach ($grupos as $grupo => $integrantes) {
    $proyecto_seleccionado = escoger_proyecto($disponibles, $proyectos);
    if ($proyecto_seleccionado !== null) {
        echo "Grupo #" . ($grupo + 1) . "[" . implode(', ', $integrantes) . "]: " . $proyecto_seleccionado . "\n";
    }
}
