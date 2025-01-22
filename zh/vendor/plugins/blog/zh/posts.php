<?php

return [
    'create' => '创建新帖子',
    'form' => [
        'name' => '姓名',
        'name_placeholder' => '帖子名称（最多:c个字符）',
        'description' => '描述',
        'description_placeholder' => '帖子简短描述（最多 :c 个字符）',
        'categories' => '类别',
        'tags' => '标签',
        'tags_placeholder' => '标签',
        'content' => '内容',
        'is_featured' => '推荐此帖子',
        'note' => '注意内容',
        'format_type' => '格式',
    ],
    'cannot_delete' => '帖子无法删除',
    'post_deleted' => '帖子已删除',
    'posts' => '帖子',
    'post' => '发布',
    'edit_this_post' => '编辑此帖子',
    'no_new_post_now' => '现在没有新帖子！',
    'menu_name' => '帖子',
    'widget_posts_recent' => '最近的帖子',
    'categories' => '类别',
    'category' => '类别',
    'author' => '作者',
    'export' => [
        'description' => '将帖子导出为CSV/Excel文件。',
        'total' => '总帖子',
    ],
    'import' => [
        'rules' => [
            'nullable_string_max' => ':attribute 字段接受最多 :max 个字符的字符串值，或者可以留空。',
            'sometimes_array' => ':attribute 字段接受数组值或可以留空。',
            'nullable_string' => ':attribute 字段接受字符串值或可以留空。',
            'nullable_string_max_in' => ':attribute 字段可以留空，或者如果提供，则必须是一个最大长度为 :max 个字符的字符串，并且必须是以下值之一：:values。',
            'in' => ':attribute 必须是以下值之一：:values。',
        ],
        'done_message' => ':created 发布的帖子和 :updated 更新的帖子。',
        'description' => '从CSV/Excel文件导入帖子。',
    ],
];
