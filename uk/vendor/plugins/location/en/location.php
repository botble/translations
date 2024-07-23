<?php

return [
    'name' => 'Locations',
    'all_states' => 'All states',
    'abbreviation' => 'Abbreviation',
    'abbreviation_placeholder' => 'E.g: CA',
    'enums' => [
        'import_type' => [
            'country' => 'Country',
            'state' => 'State',
            'city' => 'City',
        ],
    ],
    'export' => [
        'total' => 'Total Locations',
        'total_countries' => 'Total Countries',
        'total_states' => 'Total States',
        'total_cities' => 'Total Cities',
        'description' => 'Export your location data like countries, states, and cities.',
    ],
    'import' => [
        'description' => 'Import location data easily from available data or by uploading a CSV/Excel file.',
        'rules' => [
            'name' => 'The name of the location is mandatory and should not exceed 120 characters.',
            'slug' => 'The slug of the location, if provided, should not exceed 120 characters.',
            'import_type' => 'The type of import is mandatory and should be one of the predefined values.',
            'order' => 'The order of the location, if provided, should be a positive integer between 0 and 127.',
            'abbreviation' => 'The abbreviation of the location, if provided, should not exceed 10 characters.',
            'status' => 'The status of the location is mandatory and should be one of the predefined values.',
            'country' => 'The country field is mandatory if the import type is state or city.',
            'state' => 'The state field is mandatory if the import type is city.',
            'nationality' => 'The nationality of the location, if provided, should not exceed 120 characters.',
        ],
    ],
];
