<?php

return [
    'name' => 'Standorte',
    'all_states' => 'Alle Staaten',
    'abbreviation' => 'Abkürzung',
    'abbreviation_placeholder' => 'Z.: Ca',
    'enums' => [
        'import_type' => [
            'country' => 'Land',
            'state' => 'Zustand',
            'city' => 'Stadt',
        ],
    ],
    'export' => [
        'total' => 'Gesamtstandorte',
        'total_countries' => 'Gesamtländer',
        'total_states' => 'Gesamtzustände',
        'total_cities' => 'Gesamtstädte',
        'description' => 'Exportieren Sie Ihre Standortdaten wie Länder, Staaten und Städte.',
    ],
    'import' => [
        'description' => 'Importieren Sie Standortdaten einfach aus verfügbaren Daten oder durch Hochladen einer CSV/Excel -Datei.',
        'rules' => [
            'name' => 'Der Name des Standorts ist obligatorisch und sollte 120 Zeichen nicht überschreiten.',
            'slug' => 'Die Schnecke des Standorts sollte, falls vorgesehen, 120 Zeichen nicht überschreiten.',
            'import_type' => 'Die Art des Imports ist obligatorisch und sollte einer der vordefinierten Werte sein.',
            'order' => 'Die Reihenfolge des Standorts sollte, falls vorgesehen, eine positive Ganzzahl zwischen 0 und 127 sein.',
            'abbreviation' => 'Die Abkürzung des Standorts sollte, falls vorgesehen, 10 Zeichen nicht überschreiten.',
            'status' => 'Der Status des Standorts ist obligatorisch und sollte einer der vordefinierten Werte sein.',
            'country' => 'Das Landfeld ist obligatorisch, wenn der Importtyp staatlich oder Stadt ist.',
            'state' => 'Das staatliche Feld ist obligatorisch, wenn der Importtyp Stadt ist.',
            'nationality' => 'Die Nationalität des Standorts sollte, falls vorgesehen, 120 Zeichen nicht überschreiten.',
        ],
    ],
];
