<?php

return [
    'name' => 'Localizações',
    'all_states' => 'Todos Estados',
    'abbreviation' => 'Abreviação',
    'abbreviation_placeholder' => 'Ex.: CA',
    'enums' => [
        'import_type' => [
            'country' => 'País',
            'state' => 'Estado',
            'city' => 'Cidade',
        ],
    ],
    'export' => [
        'total' => 'Total de locais',
        'total_countries' => 'Total de países',
        'total_states' => 'Total de Estados',
        'total_cities' => 'Total de cidades',
        'description' => 'Exporte seus dados de localização, como países, estados e cidades.',
    ],
    'import' => [
        'description' => 'Importe dados de localização facilmente a partir dos dados disponíveis ou carregando um arquivo CSV/Excel.',
        'rules' => [
            'name' => 'O nome do local é obrigatório e não deve ultrapassar 120 caracteres.',
            'slug' => 'O slug do local, se fornecido, não deve exceder 120 caracteres.',
            'import_type' => 'O tipo de importação é obrigatório e deve ser um dos valores predefinidos.',
            'order' => 'A ordem da localização, se fornecida, deve ser um número inteiro positivo entre 0 e 127.',
            'abbreviation' => 'A abreviatura do local, se fornecida, não deverá exceder 10 caracteres.',
            'status' => 'O status do local é obrigatório e deve ser um dos valores predefinidos.',
            'country' => 'O campo país é obrigatório caso o tipo de importação seja estado ou cidade.',
            'state' => 'O campo estado é obrigatório se o tipo de importação for cidade.',
            'nationality' => 'A nacionalidade do local, se fornecida, não deverá exceder 120 caracteres.',
        ],
    ],
    'create' => 'Adicionar localização',
    'edit' => 'Editar localização',
];
