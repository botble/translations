<?php

return [
    'create' => 'Yeni gönderi oluştur',
    'form' => [
        'name' => 'İsim',
        'name_placeholder' => 'Gönderinin ismi (Maks. :c karakter)',
        'description' => 'Tanım',
        'description_placeholder' => 'Gönderi için kısa açıklama (Maks. :c karakter)',
        'categories' => 'Kategoriler',
        'tags' => 'Etiketler',
        'tags_placeholder' => 'Etiketler',
        'content' => 'İçerik',
        'is_featured' => 'Öne çıkan mı?',
        'note' => 'İçerik notu',
        'format_type' => 'Biçim',
    ],
    'cannot_delete' => 'Gönderi silinemez',
    'post_deleted' => 'Gönderi silindi',
    'posts' => 'Gönderiler',
    'post' => 'Gönderi',
    'edit_this_post' => 'Gönderiyi düzenle',
    'no_new_post_now' => 'Şimdilik yeni gönderi yok!',
    'menu_name' => 'Gönderiler',
    'widget_posts_recent' => 'Son Gönderiler',
    'categories' => 'Kategoriler',
    'category' => 'Kategori',
    'author' => 'Yazar',
    'export' => [
        'description' => 'Gönderileri CSV/Excel dosyasına aktarın.',
        'total' => 'Toplam Mesajlar',
    ],
    'import' => [
        'description' => 'Gönderileri CSV/Excel dosyasından içe aktarın.',
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
