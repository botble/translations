<?php

return [
    'name' => '產品庫存',
    'storehouse_management' => '倉庫管理',
    'import' => [
        'name' => '更新產品庫存',
        'description' => '批量更新產品庫存，通過上傳CSV/Excel文件。',
        'done_message' => '成功更新了 :count 件產品。',
        'rules' => [
            'id' => 'ID欄位是必填的，必須在產品表中存在。',
            'name' => '姓名欄位是必填的，必須是字符串。',
            'sku' => 'SKU字段必須是字符串。',
            'with_storehouse_management' => '倉庫管理領域必須是「是」或「否」。',
            'quantity' => '數量欄位在倉庫管理為「是」時是必填的。',
            'stock_status' => '當倉庫管理為「否」時，庫存狀態欄位為必填，必須是以下其中一個值：:statuses。',
        ],
    ],
    'export' => [
        'description' => '將產品庫存導出為CSV/Excel文件。',
    ],
];
