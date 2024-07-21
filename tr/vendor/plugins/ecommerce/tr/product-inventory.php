<?php

return [
    'name' => 'Ürün Envanteri',
    'storehouse_management' => 'Depo Yönetimi',
    'import' => [
        'name' => 'Ürün Envanterini Güncelle',
        'description' => 'Bir CSV/Excel dosyası yükleyerek ürün envanterini toplu olarak güncelleyin.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'ID alanı zorunludur ve ürünler tablosunda bulunmalıdır.',
            'name' => 'Ad alanı zorunludur ve bir dize olmalıdır.',
            'sku' => 'SKU alanı bir dize olmalıdır.',
            'with_storehouse_management' => 'Depo yönetimli alanı "Evet" veya "Hayır" olmalıdır.',
            'quantity' => 'Depo yönetimi "Evet" olduğunda miktar alanı zorunludur.',
            'stock_status' => 'The stock status field is mandatory when with storehouse management is "No" and must be one of the following values: :statuses.',
        ],
    ],
    'export' => [
        'description' => 'Ürün envanterini bir CSV/Excel dosyasına aktarın.',
    ],
];
