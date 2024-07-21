<?php

return [
    'create' => 'Create new post',
    'form' => [
        'description' => 'Description',
        'categories' => 'Catégories',
        'tags' => 'Mots clés',
        'tags_placeholder' => 'Mots clés',
        'format_type' => 'Format',
    ],
    'cannot_delete' => 'Post could not be deleted',
    'post_deleted' => 'Post deleted',
    'posts' => 'Des postes',
    'post' => 'Poste',
    'edit_this_post' => 'Edit this post',
    'no_new_post_now' => 'There is no new post now!',
    'menu_name' => 'Des postes',
    'widget_posts_recent' => 'Recent Posts',
    'categories' => 'Catégories',
    'category' => 'Category',
    'author' => 'Author',
    'export' => [
        'description' => 'Exportez les publications vers un fichier CSV/Excel.',
        'total' => 'Total des messages',
    ],
    'import' => [
        'description' => 'Importez des publications à partir d\'un fichier CSV/Excel.',
        'done_message' => ':created posts created and :updated posts updated.',
        'rules' => [
            'nullable_string_max' => ':attribute can be empty or a string with a maximum length of :max characters if provided.',
            'sometimes_array' => ':attribute can be left empty or must be an array if provided.',
            'in' => ':attribute must be one of the following values: :values.',
            'nullable_string' => ':attribute can be left empty or must be a string if provided.',
            'nullable_string_max_in' => ':attribute can be left empty or must be a string with a maximum length of :max characters if provided and must be one of the following values: :values.',
        ],
    ],
];
