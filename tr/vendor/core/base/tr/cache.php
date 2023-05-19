<?php

return [
    'cache_management' => 'Cache yönetimi',
    'cache_commands' => 'Cache temizleme komutları',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'CMS\'nin cache\'ini temizle',
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
            'description' => 'Üretim ortamında bir şeyi değiştirdiğinizde yapılandırma önbelleğini yenilemeniz gerekebilir.',
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
