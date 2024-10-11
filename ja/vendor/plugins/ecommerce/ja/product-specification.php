<?php

return [
    'specification_groups' => [
        'title' => '仕様グループ',
        'create' => [
            'title' => '仕様グループの作成',
        ],
        'edit' => [
            'title' => '仕様グループ「:name」の編集',
        ],
    ],
    'specification_attributes' => [
        'title' => '仕様の属性',
        'group' => '関連グループ',
        'group_placeholder' => '任意のグループを選択してください',
        'type' => 'フィールドタイプ',
        'default_value' => 'デフォルト値',
        'options' => [
            'heading' => 'オプション',
            'add' => [
                'label' => '新しいオプションを追加',
            ],
        ],
        'create' => [
            'title' => '仕様属性の作成',
        ],
        'edit' => [
            'title' => '仕様属性「:name」を編集',
        ],
    ],
    'specification_tables' => [
        'title' => '仕様表',
        'create' => [
            'title' => '仕様表の作成',
        ],
        'edit' => [
            'title' => '仕様テーブル「:name」を編集',
        ],
        'fields' => [
            'groups' => 'このテーブルに表示するグループを選択してください',
            'name' => 'グループ名',
            'assigned_groups' => '割り当てられたグループ',
            'sorting' => '仕分け',
        ],
    ],
    'product' => [
        'specification_table' => [
            'options' => 'オプション',
            'title' => '仕様表',
            'select_none' => 'なし',
            'description' => 'この製品に表示する仕様表を選択してください',
            'group' => 'グループ',
            'attribute' => '属性',
            'value' => '属性値',
            'hide' => '隠れる',
            'sorting' => '仕分け',
        ],
    ],
    'enums' => [
        'field_types' => [
            'text' => '文章',
            'textarea' => 'テキストエリア',
            'select' => '選択',
            'checkbox' => 'チェックボックス',
            'radio' => '無線',
        ],
    ],
];
