<?php

return [
    'name' => 'Locations',
    'all_states' => 'All states',
    'abbreviation' => 'Abréviation',
    'abbreviation_placeholder' => 'Par exemple : CA',
    'enums' => [
        'import_type' => [
            'country' => 'Pays',
            'state' => 'État',
            'city' => 'Ville',
        ],
    ],
    'export' => [
        'total' => 'Nombre total d\'emplacements',
        'total_countries' => 'Total des pays',
        'total_states' => 'Total des États',
        'total_cities' => 'Total des villes',
        'description' => 'Exportez vos données de localisation telles que les pays, les États et les villes.',
    ],
    'import' => [
        'description' => 'Importez facilement des données de localisation à partir des données disponibles ou en téléchargeant un fichier CSV/Excel.',
        'rules' => [
            'name' => 'Le nom du lieu est obligatoire et ne doit pas dépasser 120 caractères.',
            'slug' => 'Le slug de l\'emplacement, s\'il est fourni, ne doit pas dépasser 120 caractères.',
            'import_type' => 'Le type d\'import est obligatoire et doit faire partie des valeurs prédéfinies.',
            'order' => 'L\'ordre de localisation, s\'il est fourni, doit être un entier positif compris entre 0 et 127.',
            'abbreviation' => 'L\'abréviation du lieu, si elle est fournie, ne doit pas dépasser 10 caractères.',
            'status' => 'Le statut de l\'emplacement est obligatoire et doit faire partie des valeurs prédéfinies.',
            'country' => 'Le champ Pays est obligatoire si le type d’importation est un État ou une ville.',
            'state' => 'Le champ état est obligatoire si le type d’import est ville.',
            'nationality' => 'La nationalité du lieu, si elle est fournie, ne doit pas dépasser 120 caractères.',
        ],
    ],
];
