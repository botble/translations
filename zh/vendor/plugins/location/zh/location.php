<?php

return [
    'name' => '地點',
    'all_states' => '所有州',
    'abbreviation' => '縮寫',
    'abbreviation_placeholder' => '例如：CA',
    'enums' => [
        'import_type' => [
            'country' => '國家',
            'state' => '狀態',
            'city' => '城市',
        ],
    ],
    'export' => [
        'total' => '地點總數',
        'total_countries' => '國家總數',
        'total_states' => '國家總數',
        'total_cities' => '城市總數',
        'description' => '匯出您的位置數據，例如國家、縣/市和城市。',
    ],
    'import' => [
        'description' => '從可用資料或上傳 CSV/Excel 檔案輕鬆匯入位置資料。',
        'rules' => [
            'name' => '位置名稱是強制性的，且不得超過 120 個字元。',
            'slug' => '位置的別名（如果提供）不應超過 120 個字元。',
            'import_type' => '導入類型是強制性的，並且應該是預定義值之一。',
            'order' => '位置的順序（如果提供）應為 0 到 127 之間的正整數。',
            'abbreviation' => '位置縮寫（如果提供）不應超過 10 個字元。',
            'status' => '位置的狀態是強制性的，並且應該是預定義值之一。',
            'country' => '如果匯入類型為縣/市或城市，則國家/地區欄位為必填項。',
            'state' => '如果導入類型為城市，則州欄位為必填項。',
            'nationality' => '地點的國籍（如果提供）不應超過 120 個字元。',
        ],
    ],
];
