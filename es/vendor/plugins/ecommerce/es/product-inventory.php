<?php

return [
    'name' => 'Inventario de productos',
    'storehouse_management' => 'Gestión de almacén',
    'import' => [
        'name' => 'Actualizar inventario de productos',
        'description' => 'Actualice el inventario de productos de forma masiva cargando un archivo CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'El campo ID es obligatorio y debe existir en la tabla de productos.',
            'name' => 'El campo de nombre es obligatorio y debe ser una cadena.',
            'sku' => 'El campo SKU debe ser una cadena.',
            'with_storehouse_management' => 'El campo con gestión de almacén debe ser "Sí" o "No".',
            'quantity' => 'El campo cantidad es obligatorio cuando la gestión de almacén es "Sí".',
            'stock_status' => 'The stock status field is mandatory when with storehouse management is "No" and must be one of the following values: :statuses.',
        ],
    ],
    'export' => [
        'description' => 'Exporte el inventario de productos a un archivo CSV/Excel.',
    ],
];
