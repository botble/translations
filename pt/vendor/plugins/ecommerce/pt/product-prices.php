<?php

return [
    'name' => 'Preços dos produtos',
    'warning_prices' => 'Esses preços representam os custos originais do produto e podem não refletir os preços finais, que podem variar devido a fatores como vendas relâmpago, promoções e muito mais.',
    'import' => [
        'name' => 'Atualizar preços de produtos',
        'description' => 'Atualize os preços dos produtos em massa enviando um arquivo CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'O campo ID é obrigatório e deve existir na tabela de produtos.',
            'name' => 'O campo nome é obrigatório e deve ser uma string.',
            'sku' => 'O campo SKU deve ser uma string.',
            'cost_per_item' => 'O campo custo por item deve ser um valor numérico.',
            'price' => 'O campo de preço é obrigatório e deve ser um valor numérico.',
            'sale_price' => 'O campo de preço de venda deve ser um valor numérico.',
        ],
    ],
    'export' => [
        'description' => 'Exporte preços de produtos para um arquivo CSV/Excel.',
    ],
];
