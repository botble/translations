<?php

return [
    'name' => 'Dil İleri',
    'description' => 'Çok dilli içerik için gelişmiş dil özellikleri',
    'import' => [
        'rules' => [
            'id' => 'Kimlik zorunludur ve geçerli bir kimlik olmalıdır.',
            'name' => 'Ad zorunludur ve en fazla 255 karakter uzunluğunda bir dize olmalıdır.',
            'description' => 'Açıklama, sağlanacaksa en fazla 400 karakter uzunluğunda bir dize olmalıdır.',
            'content' => 'Eğer sağlanırsa içerik en fazla 300.000 karakter uzunluğunda bir dize olmalıdır.',
            'location' => 'Eğer sağlanırsa konum en fazla 255 karakter uzunluğunda bir dize olmalıdır.',
            'floor_plans' => 'Sağlanması durumunda kat planlarının geçerli bir dize olması gerekir.',
            'faq_schema_config' => 'SSS şema yapılandırması sağlanıyorsa geçerli bir dize olmalıdır.',
            'faq_ids' => 'SSS kimlikleri sağlanıyorsa geçerli bir dizi olmalıdır.',
        ],
    ],
    'export' => [
        'total' => 'Toplam',
    ],
    'import_model_translations' => ':model Çevirileri',
    'export_model_translations' => ':model Çevirileri',
    'import_description' => ':name için çevirileri bir CSV/Excel dosyasından içe aktarın.',
    'export_description' => ':name için çevirileri CSV/Excel dosyasına aktarın.',
];
