<?php

return [
    'name' => '位置',
    'all_states' => '所有州',
    'abbreviation' => '缩写',
    'abbreviation_placeholder' => '例如：CA',
    'enums' => [
        'import_type' => [
            'country' => '国家',
            'state' => '州',
            'city' => '城市',
        ],
    ],
    'export' => [
        'total' => '总位置',
        'total_countries' => '总国家数',
        'total_states' => '总州',
        'total_cities' => '总城市数',
        'description' => '导出您的位置信息，如国家、州和城市。',
    ],
    'import' => [
        'description' => '轻松从可用数据中导入位置数据或通过上传CSV/Excel文件。',
        'rules' => [
            'name' => '地点名称是必填项，且不得超过120个字符。',
            'slug' => '位置的别名（如果提供）不得超过120个字符。',
            'import_type' => '导入类型是必需的，应该是预定义值之一。',
            'order' => '位置的顺序（如果提供）应为0到127之间的正整数。',
            'abbreviation' => '地点的缩写（如果提供）不得超过10个字符。',
            'status' => '位置状态是必需的，应该是预定义值之一。',
            'country' => '国家字段是必填项，如果导入类型是州或城市。',
            'state' => '州字段是必填项，如果导入类型是城市。',
            'nationality' => '该地点的国籍（如果提供）不得超过120个字符。',
        ],
    ],
];
