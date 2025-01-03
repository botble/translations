<?php

return [
    'name' => '製品価格',
    'warning_prices' => 'これらの価格は製品の元のコストを表しており、フラッシュセールやプロモーションなどの要因により変動する可能性がある最終価格を反映していない場合があります。',
    'import' => [
        'name' => '製品価格を更新する',
        'description' => 'CSV/Excelファイルをアップロードして商品価格を一括更新します。',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'ID フィールドは必須であり、products テーブルに存在する必要があります。',
            'name' => '名前フィールドは必須であり、文字列である必要があります。',
            'sku' => 'SKU フィールドは文字列である必要があります。',
            'cost_per_item' => 'アイテムあたりのコストフィールドは数値である必要があります。',
            'price' => '価格フィールドは必須であり、数値である必要があります。',
            'sale_price' => '販売価格フィールドは数値である必要があります。',
        ],
    ],
    'export' => [
        'description' => '製品価格をCSV/Excelファイルにエクスポートします。',
    ],
];
