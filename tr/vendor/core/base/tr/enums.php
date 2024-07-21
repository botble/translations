<?php

return [
    'statuses' => [
        'draft' => 'Taslak',
        'pending' => 'Bekliyor',
        'published' => 'Yayında',
    ],
    'system_updater_steps' => [
        'download' => 'Güncelleme dosyalarını indirin',
        'update_files' => 'Sistem dosyalarını güncelle',
        'update_database' => 'Veritabanlarını güncelle',
        'publish_core_assets' => 'Temel varlıkları yayınlayın',
        'publish_packages_assets' => 'Paket varlıklarını yayınla',
        'clean_up' => 'Sistem güncelleme dosyalarını temizleyin',
        'done' => 'Sistem başarıyla güncellendi',
        'messages' => [
            'download' => 'Güncelleme dosyaları indiriliyor...',
            'update_files' => 'Sistem dosyaları güncelleniyor...',
            'update_database' => 'Veritabanları güncelleniyor...',
            'publish_core_assets' => 'Temel varlıklar yayınlanıyor...',
            'publish_packages_assets' => 'Paket varlıkları yayınlanıyor...',
            'clean_up' => 'Sistem güncelleme dosyaları temizleniyor...',
            'done' => 'Tamamlamak! Tarayıcınız 30 saniye içinde yenilenecektir.',
        ],
        'failed_messages' => [
            'download' => 'Güncelleme dosyaları indirilemedi',
            'update_files' => 'Sistem dosyaları güncellenemedi',
            'update_database' => 'Veritabanları güncellenemedi',
            'publish_core_assets' => 'Temel varlıklar yayınlanamadı',
            'publish_packages_assets' => 'Paket varlıkları yayınlanamadı',
            'clean_up' => 'Sistem güncelleme dosyaları temizlenemedi',
        ],
        'success_messages' => [
            'download' => 'Güncelleme dosyaları başarıyla indirildi.',
            'update_files' => 'Sistem dosyaları başarıyla güncellendi.',
            'update_database' => 'Veritabanları başarıyla güncellendi.',
            'publish_core_assets' => 'Temel varlıklar başarıyla yayınlandı.',
            'publish_packages_assets' => 'Paket varlıkları başarıyla yayınlandı.',
            'clean_up' => 'Sistem güncelleme dosyaları başarıyla temizlendi.',
        ],
    ],
];
