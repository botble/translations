<?php

return [
    'create' => 'Создать новый пост',
    'form' => [
        'name' => 'Название',
        'name_placeholder' => 'Название поста (Максимум :c знаков)',
        'description' => 'Описание',
        'description_placeholder' => 'Краткое описание поста (Максимум :c знаков)',
        'categories' => 'Категории',
        'tags' => 'Теги',
        'tags_placeholder' => 'Теги',
        'content' => 'Содержание',
        'is_featured' => 'Рекомендованный?',
        'note' => 'Содержание заметки',
        'format_type' => 'Формат',
    ],
    'cannot_delete' => 'Сообщение не может быть удалено',
    'post_deleted' => 'Сообщение удалено',
    'posts' => 'Посты',
    'post' => 'Пост',
    'edit_this_post' => 'Редактировать это сообщение',
    'no_new_post_now' => 'Теперь нет новых сообщений!',
    'menu_name' => 'Посты',
    'widget_posts_recent' => 'Последние записи',
    'categories' => 'Категории',
    'category' => 'Категория',
    'author' => 'Автор',
    'export' => [
        'description' => 'Export posts to CSV/Excel file.',
        'total' => 'Total Posts',
    ],
    'import' => [
        'description' => 'Import posts from a CSV/Excel file.',
        'done_message' => ':created posts created and :updated posts updated.',
        'rules' => [
            'nullable_string_max' => 'The :attribute field accepts a string value of up to :max characters or may be left blank.',
            'sometimes_array' => 'The :attribute field accepts an array value or may be left blank.',
            'in' => ':attribute must be one of the following values: :values.',
            'nullable_string' => 'The :attribute field accepts a string value or may be left blank.',
            'nullable_string_max_in' => 'The :attribute field can be left blank, or must be a string with a maximum length of :max characters if provided and must be one of the following values: :values.',
        ],
    ],
    'edit' => 'Редактировать пост',
];
