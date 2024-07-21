<?php

return [
    'name' => 'مخزون المنتجات',
    'storehouse_management' => 'إدارة المخازن',
    'import' => [
        'name' => 'تحديث مخزون المنتج',
        'description' => 'قم بتحديث مخزون المنتج بشكل مجمّع عن طريق تحميل ملف CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'حقل المعرف إلزامي ويجب أن يكون موجودًا في جدول المنتجات.',
            'name' => 'حقل الاسم إلزامي ويجب أن يكون سلسلة.',
            'sku' => 'يجب أن يكون حقل SKU عبارة عن سلسلة.',
            'with_storehouse_management' => 'يجب أن يكون حقل إدارة المخزن "نعم" أو "لا".',
            'quantity' => 'يكون حقل الكمية إلزاميًا عندما تكون إدارة المخزن "نعم".',
            'stock_status' => 'The stock status field is mandatory when with storehouse management is "No" and must be one of the following values: :statuses.',
        ],
    ],
    'export' => [
        'description' => 'تصدير مخزون المنتجات إلى ملف CSV/Excel.',
    ],
];
