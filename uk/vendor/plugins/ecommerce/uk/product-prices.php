<?php

return [
    'name' => 'Ціни продуктів',
    'warning_prices' => 'Ці ціни представляють собою оригінальну вартість продукту і можуть не відображати кінцеві ціни, які можуть варіюватися через такі фактори, як флеш-продажі, акції тощо.',
    'import' => [
        'name' => 'Оновити ціни продуктів',
        'description' => 'Оновлення цін продуктів за допомогою завантаження файлу CSV/Excel.',
        'done_message' => 'Успішно оновлено :count продукт(ів).',
        'rules' => [
            'id' => 'Поле ID є обов\'язковим і повинно існувати в таблиці продуктів.',
            'name' => 'Поле назви є обов\'язковим і повинно бути рядком.',
            'sku' => 'Поле SKU повинно бути рядком.',
            'cost_per_item' => 'Поле вартості за одиницю повинно бути числовим значенням.',
            'price' => 'Поле ціни є обов\'язковим і повинно бути числовим значенням.',
            'sale_price' => 'Поле ціни зі знижкою повинно бути числовим значенням.',
        ],
    ],
    'export' => [
        'description' => 'Експорт цін продуктів до файлу CSV/Excel.',
    ],
];
