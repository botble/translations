<?php

return [
    'create' => '新しい投稿を作成する',
    'form' => [
        'name' => '名前',
        'name_placeholder' => 'Post\'s name (Maximum :c characters)',
        'description' => '説明',
        'description_placeholder' => 'Short description for post (Maximum :c characters)',
        'categories' => 'カテゴリー',
        'tags' => 'タグ',
        'tags_placeholder' => 'タグ',
        'content' => 'コンテンツ',
        'is_featured' => 'この投稿を特集する',
        'note' => 'メモ内容',
        'format_type' => '形式',
    ],
    'cannot_delete' => '投稿を削除できませんでした',
    'post_deleted' => '投稿が削除されました',
    'posts' => '投稿',
    'post' => '役職',
    'edit_this_post' => 'この投稿を編集する',
    'no_new_post_now' => '現在新しい投稿はありません！',
    'menu_name' => '投稿',
    'widget_posts_recent' => '最近の投稿',
    'categories' => 'カテゴリー',
    'category' => 'カテゴリ',
    'author' => '著者',
    'export' => [
        'description' => '投稿をCSV/Excelファイルにエクスポートします。',
        'total' => '総投稿数',
    ],
    'import' => [
        'description' => 'CSV/Excelファイルから投稿をインポートします。',
        'done_message' => ':created posts created and :updated posts updated.',
        'rules' => [
            'nullable_string_max' => 'The :attribute field accepts a string value of up to :max characters or may be left blank.',
            'sometimes_array' => 'The :attribute field accepts an array value or may be left blank.',
            'in' => ':attribute must be one of the following values: :values.',
            'nullable_string' => 'The :attribute field accepts a string value or may be left blank.',
            'nullable_string_max_in' => 'The :attribute field can be left blank, or must be a string with a maximum length of :max characters if provided and must be one of the following values: :values.',
        ],
    ],
];
