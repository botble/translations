<?php

return [
    'name' => 'Product Prices',
    'warning_prices' => 'These prices represent the original costs of the product and may not reflect the final prices, which could vary due to factors such as flash sales, promotions, and more.',

    'import' => [
        'name' => 'Update Product Prices',
        'description' => 'Update product prices in bulk by uploading a CSV/Excel file.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'The ID field is mandatory and must be exists in products table.',
            'name' => 'The name field is mandatory and must be a string.',
            'sku' => 'The SKU field must be a string.',
            'cost_per_item' => 'The cost per item field must be a numeric value.',
            'price' => 'The price field is required and must be a numeric value.',
            'sale_price' => 'The sale price field must be a numeric value.',
        ],
    ],

    'export' => [
        'description' => 'Export product prices to a CSV/Excel file.',
    ],
];
