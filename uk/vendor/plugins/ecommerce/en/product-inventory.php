<?php

return [
    'name' => 'Product Inventory',
    'storehouse_management' => 'Storehouse Management',

    'import' => [
        'name' => 'Update Product Inventory',
        'description' => 'Update product inventory in bulk by uploading a CSV/Excel file.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'The ID field is mandatory and must be exists in products table.',
            'name' => 'The name field is mandatory and must be a string.',
            'sku' => 'The SKU field must be a string.',
            'with_storehouse_management' => 'The with storehouse management field must be "Yes" or "No".',
            'quantity' => 'The quantity field is mandatory when with storehouse management is "Yes".',
            'stock_status' => 'The stock status field is mandatory when with storehouse management is "No" and must be one of the following values: :statuses.',
        ],
    ],

    'export' => [
        'description' => 'Export product inventory to a CSV/Excel file.',
    ],
];
