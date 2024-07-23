<?php

return [
    'name' => 'Precios de productos',
    'warning_prices' => 'Estos precios representan los costos originales del producto y pueden no reflejar los precios finales, los cuales podrían variar debido a factores como ventas flash, promociones y más.',
    'import' => [
        'name' => 'Actualizar precios de productos',
        'description' => 'Actualice los precios de los productos de forma masiva cargando un archivo CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'El campo ID es obligatorio y debe existir en la tabla de productos.',
            'name' => 'El campo de nombre es obligatorio y debe ser una cadena.',
            'sku' => 'El campo SKU debe ser una cadena.',
            'cost_per_item' => 'El campo de costo por artículo debe ser un valor numérico.',
            'price' => 'El campo de precio es obligatorio y debe ser un valor numérico.',
            'sale_price' => 'El campo de precio de venta debe ser un valor numérico.',
        ],
    ],
    'export' => [
        'description' => 'Exportar precios de productos a un archivo CSV/Excel.',
    ],
];
