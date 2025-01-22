<?php

return [
    'product_specification' => '产品规格',
    'specification_groups' => [
        'title' => '规格组',
        'create' => [
            'title' => '创建规格组',
        ],
        'edit' => [
            'title' => '编辑规格组 ":name"',
        ],
    ],
    'specification_attributes' => [
        'title' => '规格属性',
        'group' => '关联集团',
        'group_placeholder' => '选择任何组',
        'type' => '字段类型',
        'default_value' => '默认值',
        'options' => [
            'heading' => '选项',
            'add' => [
                'label' => '添加新选项',
            ],
        ],
        'create' => [
            'title' => '创建规格属性',
        ],
        'edit' => [
            'title' => '编辑规格属性 ":name"',
        ],
    ],
    'specification_tables' => [
        'title' => '规格表',
        'create' => [
            'title' => '创建规格表',
        ],
        'edit' => [
            'title' => '编辑规格表 ":name"',
        ],
        'fields' => [
            'groups' => '选择要在此表中显示的组',
            'name' => '组名',
            'assigned_groups' => '分配的组',
            'sorting' => '排序',
        ],
    ],
    'product' => [
        'specification_table' => [
            'options' => '选项',
            'title' => '规格表',
            'select_none' => '无',
            'description' => '选择要在此产品中显示的规格表',
            'group' => '组',
            'attribute' => '属性',
            'value' => '属性值',
            'hide' => '隐藏',
            'sorting' => '排序',
        ],
    ],
    'enums' => [
        'field_types' => [
            'text' => '文本',
            'textarea' => '文本区域',
            'select' => '选择',
            'checkbox' => '复选框',
            'radio' => '广播',
        ],
    ],
];
