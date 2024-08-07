<?php

return [
    'name' => 'Локації',
    'all_states' => 'Усі області',
    'abbreviation' => 'Скорочення',
    'abbreviation_placeholder' => 'Напр.: CA',
    'enums' => [
        'import_type' => [
            'country' => 'Країна',
            'state' => 'Область',
            'city' => 'Місто',
        ],
    ],
    'export' => [
        'total' => 'Всього локацій',
        'total_countries' => 'Всього країн',
        'total_states' => 'Всього областей',
        'total_cities' => 'Всього міст',
        'description' => 'Експортуйте дані про локації, такі як країни, області та міста.',
    ],
    'import' => [
        'description' => 'Легко імпортуйте дані про локації з наявних даних або завантажуючи файл CSV/Excel.',
        'rules' => [
            'name' => 'Назва локації є обов\'язковою і не повинна перевищувати 120 символів.',
            'slug' => 'ЧПУ локації, якщо надається, не повинна перевищувати 120 символів.',
            'import_type' => 'Тип імпорту є обов\'язковим і повинен бути одним з попередньо визначених значень.',
            'order' => 'Порядок локації, якщо надається, повинен бути додатним цілим числом від 0 до 127.',
            'abbreviation' => 'Скорочення локації, якщо надається, не повинно перевищувати 10 символів.',
            'status' => 'Статус локації є обов\'язковим і повинен бути одним з попередньо визначених значень.',
            'country' => 'Поле країни є обов\'язковим, якщо тип імпорту є область або місто.',
            'state' => 'Поле області є обов\'язковим, якщо тип імпорту є місто.',
            'nationality' => 'Національність локації, якщо надається, не повинна перевищувати 120 символів.',
        ],
    ],
];
