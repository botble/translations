<?php

return [
    'name' => '產品價格',
    'warning_prices' => '這些價格代表產品的原始成本，可能不反映最終價格，因為最終價格可能因閃購、促銷等因素而有所變動。',
    'import' => [
        'name' => '更新產品價格',
        'description' => '批量更新產品價格，通過上傳CSV/Excel文件。',
        'done_message' => '成功更新了 :count 件產品。',
        'rules' => [
            'id' => 'ID欄位是必填的，必須在產品表中存在。',
            'name' => '姓名欄位是必填的，必須是字符串。',
            'sku' => 'SKU字段必須是字符串。',
            'cost_per_item' => '每件商品的成本字段必須是數字值。',
            'price' => '價格欄位是必需的，必須是數值。',
            'sale_price' => '銷售價格欄位必須是數值。',
        ],
    ],
    'export' => [
        'description' => '將產品價格導出到CSV/Excel文件。',
    ],
];
