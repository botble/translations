<?php

return [
    'product_specification' => 'Especificação do produto',
    'specification_groups' => [
        'title' => 'Grupos de Especificação',
        'create' => [
            'title' => 'Criar grupo de especificações',
        ],
        'edit' => [
            'title' => 'Editar grupo de especificações ":name"',
        ],
    ],
    'specification_attributes' => [
        'title' => 'Atributos de especificação',
        'group' => 'Grupo Associado',
        'group_placeholder' => 'Escolha qualquer grupo',
        'type' => 'Tipo de campo',
        'default_value' => 'Valor padrão',
        'options' => [
            'heading' => 'Opções',
            'add' => [
                'label' => 'Adicionar nova opção',
            ],
        ],
        'create' => [
            'title' => 'Criar atributo de especificação',
        ],
        'edit' => [
            'title' => 'Editar atributo de especificação ":name"',
        ],
    ],
    'specification_tables' => [
        'title' => 'Tabelas de especificações',
        'create' => [
            'title' => 'Criar tabela de especificações',
        ],
        'edit' => [
            'title' => 'Editar tabela de especificações ":name"',
        ],
        'fields' => [
            'groups' => 'Selecione os grupos a serem exibidos nesta tabela',
            'name' => 'Nome do grupo',
            'assigned_groups' => 'Grupos atribuídos',
            'sorting' => 'Classificando',
        ],
    ],
    'product' => [
        'specification_table' => [
            'options' => 'Opções',
            'title' => 'Tabela de especificações',
            'select_none' => 'Nenhum',
            'description' => 'Selecione a tabela de especificações a ser exibida neste produto',
            'group' => 'Grupo',
            'attribute' => 'Atributo',
            'value' => 'Valor do atributo',
            'hide' => 'Esconder',
            'sorting' => 'Classificando',
        ],
    ],
    'enums' => [
        'field_types' => [
            'text' => 'Texto',
            'textarea' => 'Área de texto',
            'select' => 'Selecione',
            'checkbox' => 'Caixa de seleção',
            'radio' => 'Rádio',
        ],
    ],
];
