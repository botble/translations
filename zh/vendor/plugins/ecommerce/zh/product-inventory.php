<?php

return [
    'name' => '产品库存',
    'storehouse_management' => '仓库管理',
    'import' => [
        'name' => '更新产品库存',
        'description' => '批量更新产品库存，通过上传CSV/Excel文件。',
        'done_message' => '成功更新了 :count 个产品。',
        'rules' => [
            'id' => 'ID字段是必填的，必须在产品表中存在。',
            'name' => '名称字段是必填项，必须是字符串。',
            'sku' => 'SKU字段必须是字符串。',
            'with_storehouse_management' => '仓库管理领域必须是“是”或“否”。',
            'quantity' => '数量字段是必填项，当仓库管理为“是”时。',
            'stock_status' => '当仓库管理为“否”时，库存状态字段是必填项，必须是以下值之一：:statuses。',
        ],
    ],
    'export' => [
        'description' => '导出产品库存到CSV/Excel文件。',
    ],
];
