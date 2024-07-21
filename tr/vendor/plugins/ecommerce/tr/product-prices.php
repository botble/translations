<?php

return [
    'name' => 'Ürün Fiyatları',
    'warning_prices' => 'Bu fiyatlar ürünün orijinal maliyetlerini temsil etmektedir ve anlık indirimler, promosyonlar ve benzeri faktörlere bağlı olarak değişiklik gösterebilecek nihai fiyatları yansıtmayabilir.',
    'import' => [
        'name' => 'Ürün Fiyatlarını Güncelle',
        'description' => 'CSV/Excel dosyası yükleyerek ürün fiyatlarını toplu olarak güncelleyin.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'ID alanı zorunludur ve ürünler tablosunda bulunmalıdır.',
            'name' => 'Ad alanı zorunludur ve bir dize olmalıdır.',
            'sku' => 'SKU alanı bir dize olmalıdır.',
            'cost_per_item' => 'Ürün başına maliyet alanı sayısal bir değer olmalıdır.',
            'price' => 'Fiyat alanı zorunludur ve sayısal bir değer olmalıdır.',
            'sale_price' => 'İndirimli fiyat alanı sayısal bir değer olmalıdır.',
        ],
    ],
    'export' => [
        'description' => 'Ürün fiyatlarını CSV/Excel dosyasına aktarın.',
    ],
];
