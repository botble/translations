<?php

return [
    'name' => '製品在庫',
    'storehouse_management' => '倉庫管理',
    'import' => [
        'name' => '製品在庫を更新する',
        'description' => 'CSV/Excelファイルをアップロードして商品在庫を一括更新します。',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'ID フィールドは必須であり、products テーブルに存在する必要があります。',
            'name' => '名前フィールドは必須であり、文字列である必要があります。',
            'sku' => 'SKU フィールドは文字列である必要があります。',
            'with_storehouse_management' => '倉庫管理ありフィールドは「はい」または「いいえ」にする必要があります。',
            'quantity' => '倉庫管理ありが「あり」の場合、数量フィールドは必須です。',
            'stock_status' => 'The stock status field is mandatory when with storehouse management is "No" and must be one of the following values: :statuses.',
        ],
    ],
    'export' => [
        'description' => '製品在庫をCSV/Excelファイルにエクスポートします。',
    ],
];
