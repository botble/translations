<?php

return [
    'name' => '产品价格',
    'warning_prices' => '这些价格代表了产品的原始成本，可能不反映最终价格，最终价格可能因闪购、促销等因素而有所不同。',
    'import' => [
        'name' => '更新产品价格',
        'description' => '批量更新产品价格，通过上传CSV/Excel文件。',
        'done_message' => '成功更新了 :count 个产品。',
        'rules' => [
            'id' => 'ID字段是必填的，必须在产品表中存在。',
            'name' => '名称字段是必填项，必须是字符串。',
            'sku' => 'SKU字段必须是字符串。',
            'cost_per_item' => '每个项目的成本字段必须是一个数字值。',
            'price' => '价格字段是必填项，必须是数字值。',
            'sale_price' => '销售价格字段必须是一个数字值。',
        ],
    ],
    'export' => [
        'description' => '导出产品价格到CSV/Excel文件。',
    ],
];
