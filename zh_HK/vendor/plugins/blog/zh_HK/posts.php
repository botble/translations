<?php

return [
    'create' => '創建一個新帖子',
    'form' => [
        'name' => '名稱',
        'name_placeholder' => '帖子名稱（最多 :c 個字符）',
        'description' => '描述',
        'description_placeholder' => '帖子簡短描述（最多:c個字符）',
        'categories' => '類別',
        'tags' => '標籤',
        'tags_placeholder' => '標籤',
        'content' => '內容',
        'is_featured' => '推介這篇帖子',
        'note' => '注意內容',
        'format_type' => '格式',
    ],
    'cannot_delete' => '帖子無法刪除',
    'post_deleted' => '帖子已刪除',
    'posts' => '帖子',
    'post' => '發佈',
    'edit_this_post' => '編輯這篇帖子',
    'no_new_post_now' => '而家冇新帖子！',
    'menu_name' => '帖子',
    'widget_posts_recent' => '最近的帖子',
    'categories' => '類別',
    'category' => '類別',
    'author' => '作者',
    'export' => [
        'description' => '將帖子導出為CSV/Excel文件。',
        'total' => '總帖子',
    ],
    'import' => [
        'description' => '從CSV/Excel文件導入帖子。',
        'done_message' => ':created 發佈的帖子和 :updated 更新的帖子。',
        'rules' => [
            'nullable_string_max' => ':attribute 字段接受最多 :max 個字符的字符串值，或者可以留空。',
            'sometimes_array' => ':attribute 欄位接受一個數組值或可以留空。',
            'in' => ':attribute 必須是以下值之一：:values。',
            'nullable_string' => ':attribute 欄位接受字符串值或可以留空。',
            'nullable_string_max_in' => ':attribute 字段可以留空，或者如果提供的話，必須是一個最大長度為 :max 字符的字符串，並且必須是以下值之一：:values。',
        ],
    ],
];
