<?php

return [
    'name' => '地點',
    'all_states' => '所有州',
    'abbreviation' => '縮寫',
    'abbreviation_placeholder' => '例如：CA',
    'enums' => [
        'import_type' => [
            'country' => '國家',
            'state' => '州',
            'city' => '城市',
        ],
    ],
    'export' => [
        'total' => '總地點',
        'total_countries' => '總國家',
        'total_states' => '總州',
        'total_cities' => '總城市',
        'description' => '導出你的地點數據，例如國家、州和城市。',
    ],
    'import' => [
        'description' => '輕鬆從可用數據導入位置數據或通過上傳CSV/Excel文件。',
        'rules' => [
            'name' => '地點名稱是必需的，並且不得超過120個字符。',
            'slug' => '地點的網址部分（如果提供）不應超過120個字符。',
            'import_type' => '進口類型是必需的，應該是預定值之一。',
            'order' => '位置的順序（如果提供）應該是一個介乎於0和127之間的正整數。',
            'abbreviation' => '地點的縮寫（如果提供）不應超過10個字符。',
            'status' => '位置的狀態是必需的，應該是預定義值之一。',
            'country' => '如果進口類型是州或城市，國家欄位是必填的。',
            'state' => '如果導入類型是城市，州字段是必需的。',
            'nationality' => '地點的國籍（如果提供）不應超過120個字符。',
        ],
    ],
];
