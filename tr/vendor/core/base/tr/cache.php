<?php

return [
    'cache_management' => 'Önbellek Yönetimi',
    'cache_management_description' => 'Sitenizi güncel tutmak için önbelleği temizleyin.',
    'cache_commands' => 'Önbelleği temizle komutları',
    'current_size' => 'Mevcut Boyut',
    'clear_button' => 'Temizle',
    'refresh_button' => 'Yenile',
    'cache_size_warning' => 'CMS önbellek boyutunuz oldukça büyük (>50MB). Bunu temizlemek sistem performansını iyileştirebilir.',
    'footer_note' => 'Sitenizde değişiklik yaptıktan sonra, bunların doğru şekilde görüntülendiğinden emin olmak için önbelleği temizleyin.',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Tüm CMS önbelleğini temizle',
            'description' => 'CMS önbelleğini temizle: veritabanı önbelleği, statik bloklar... Verileri güncelledikten sonra değişiklikleri görmediğinizde bu komutu çalıştırın.',
            'success_msg' => 'Önbellek temizlendi',
        ],
        'refresh_compiled_views' => [
            'title' => 'Derlenmiş görünümleri yenile',
            'description' => 'Görünümleri güncel hale getirmek için derlenmiş görünümleri temizleyin.',
            'success_msg' => 'Önbellek görünümü yenilendi',
        ],
        'clear_config_cache' => [
            'title' => 'Yapılandırma önbelleğini temizle',
            'description' => 'Üretim ortamında bir değişiklik yaptığınızda yapılandırma önbelleğini yenilemeniz gerekebilir.',
            'success_msg' => 'Yapılandırma önbelleği temizlendi',
        ],
        'clear_route_cache' => [
            'title' => 'Rota önbelleğini temizle',
            'description' => 'Önbellek yönlendirmesini temizle.',
            'success_msg' => 'Rota önbelleği temizlendi',
        ],
        'clear_log' => [
            'title' => 'Günlüğü temizle',
            'description' => 'Sistem günlük dosyalarını temizle',
            'success_msg' => 'Sistem günlüğü temizlendi',
        ],
    ],
];
