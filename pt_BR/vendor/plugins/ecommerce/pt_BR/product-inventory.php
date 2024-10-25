<?php

return [
    'name' => 'Inventário de produtos',
    'storehouse_management' => 'Gestão de Armazéns',
    'import' => [
        'name' => 'Atualizar inventário de produtos',
        'description' => 'Atualize o inventário de produtos em massa fazendo upload de um arquivo CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'O campo ID é obrigatório e deve existir na tabela de produtos.',
            'name' => 'O campo nome é obrigatório e deve ser uma string.',
            'sku' => 'O campo SKU deve ser uma string.',
            'with_storehouse_management' => 'O campo com gerenciamento de almoxarifado deverá ser “Sim” ou “Não”.',
            'quantity' => 'O campo quantidade é obrigatório quando com gestão de almoxarifado estiver “Sim”.',
            'stock_status' => 'The stock status field is mandatory when with storehouse management is "No" and must be one of the following values: :statuses.',
        ],
    ],
    'export' => [
        'description' => 'Exporte o inventário de produtos para um arquivo CSV/Excel.',
    ],
];
