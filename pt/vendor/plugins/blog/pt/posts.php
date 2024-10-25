<?php

return [
    'create' => 'Crie uma nova postagem',
    'form' => [
        'name' => 'Nome',
        'name_placeholder' => 'Post\'s name (Maximum :c characters)',
        'description' => 'Descrição',
        'description_placeholder' => 'Short description for post (Maximum :c characters)',
        'categories' => 'Categorias',
        'tags' => 'Etiquetas',
        'tags_placeholder' => 'Etiquetas',
        'content' => 'Contente',
        'is_featured' => 'Destaque esta postagem',
        'note' => 'Conteúdo da nota',
        'format_type' => 'Formatar',
    ],
    'cannot_delete' => 'Não foi possível excluir a postagem',
    'post_deleted' => 'Postagem excluída',
    'posts' => 'Postagens',
    'post' => 'Publicar',
    'edit_this_post' => 'Edite esta postagem',
    'no_new_post_now' => 'Não há nenhuma postagem nova agora!',
    'menu_name' => 'Postagens',
    'widget_posts_recent' => 'Postagens recentes',
    'categories' => 'Categorias',
    'category' => 'Categoria',
    'author' => 'Autor',
    'export' => [
        'description' => 'Exporte postagens para arquivo CSV/Excel.',
        'total' => 'Total de postagens',
    ],
    'import' => [
        'description' => 'Importe postagens de um arquivo CSV/Excel.',
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
