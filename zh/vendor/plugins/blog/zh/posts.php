<?php

return [
    'create' => '建立新帖子',
    'form' => [
        'name' => '名稱',
        'name_placeholder' => '貼文名稱（最多 :c 個字元）',
        'description' => '描述',
        'description_placeholder' => '貼文簡短描述（最多 :c 個字元）',
        'categories' => '類別',
        'tags' => '標籤',
        'tags_placeholder' => '標籤',
        'content' => '內容',
        'is_featured' => '有特色嗎？',
        'note' => '備註內容',
        'format_type' => '格式',
    ],
    'cannot_delete' => '貼文無法刪除',
    'post_deleted' => '貼文已刪除',
    'posts' => '貼文',
    'post' => '發文',
    'edit_this_post' => '編輯這篇文章',
    'no_new_post_now' => '現在沒有新貼文了！',
    'menu_name' => '貼文',
    'widget_posts_recent' => '最近的貼文',
    'categories' => '類別',
    'category' => '類別',
    'author' => '作者',
    'export' => [
        'description' => '將貼文匯出到 CSV/Excel 文件。',
        'total' => '貼文總數',
    ],
    'import' => [
        'rules' => [
            'nullable_string_max' => ':attribute 可以為空，也可以是最大長度為 :max 個字元的字串（如果提供）。',
            'sometimes_array' => ':attribute 可以留空，或者如果提供的話必須是數組。',
            'nullable_string' => ':attribute 可以留空或必須是字串（如果提供）。',
            'nullable_string_max_in' => ':attribute 可以留空，或者必須是最大長度為 :max 個字元的字串（如果提供），並且必須是以下值之一：:values。',
            'in' => ':attribute 必須是以下值之一：:values。',
        ],
        'done_message' => ':created 帖子已創建， :updated 帖子已更新。',
        'description' => '從 CSV/Excel 文件匯入帖子。',
    ],
];
