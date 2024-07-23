<?php

return [
    'name' => 'Ubicaciones',
    'all_states' => 'Todos los Estados',
    'abbreviation' => 'Abreviatura',
    'abbreviation_placeholder' => 'Por ejemplo: CA',
    'enums' => [
        'import_type' => [
            'country' => 'País',
            'state' => 'Estado',
            'city' => 'Ciudad',
        ],
    ],
    'export' => [
        'total' => 'Ubicaciones totales',
        'total_countries' => 'Países totales',
        'total_states' => 'Estados totales',
        'total_cities' => 'Ciudades totales',
        'description' => 'Exporte sus datos de ubicación como países, estados y ciudades.',
    ],
    'import' => [
        'description' => 'Importe datos de ubicación fácilmente desde los datos disponibles o cargando un archivo CSV/Excel.',
        'rules' => [
            'name' => 'El nombre de la ubicación es obligatorio y no debe exceder los 120 caracteres.',
            'slug' => 'El slug de la ubicación, si se proporciona, no debe exceder los 120 caracteres.',
            'import_type' => 'El tipo de importación es obligatorio y debe ser uno de los valores predefinidos.',
            'order' => 'El orden de la ubicación, si se proporciona, debe ser un número entero positivo entre 0 y 127.',
            'abbreviation' => 'La abreviatura de la ubicación, si se proporciona, no debe exceder los 10 caracteres.',
            'status' => 'El estado de la ubicación es obligatorio y debe ser uno de los valores predefinidos.',
            'country' => 'El campo país es obligatorio si el tipo de importación es estado o ciudad.',
            'state' => 'El campo estado es obligatorio si el tipo de importación es ciudad.',
            'nationality' => 'La nacionalidad de la ubicación, si se proporciona, no debe exceder los 120 caracteres.',
        ],
    ],
];
