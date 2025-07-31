<?php

return [
    'name' => 'Konumlar',
    'all_states' => 'Tüm eyaletler',
    'abbreviation' => 'Kısaltma',
    'abbreviation_placeholder' => 'Örn: CA',
    'enums' => [
        'import_type' => [
            'country' => 'Ülke',
            'state' => 'Durum',
            'city' => 'Şehir',
        ],
    ],
    'export' => [
        'total' => 'Toplam Lokasyonlar',
        'total_countries' => 'Toplam Ülkeler',
        'total_states' => 'Toplam Eyaletler',
        'total_cities' => 'Toplam Şehirler',
        'description' => 'Ülke, eyalet ve şehir gibi konum verilerinizi dışa aktarın.',
    ],
    'import' => [
        'description' => 'Konum verilerini mevcut verilerden veya CSV/Excel dosyası yükleyerek kolayca içe aktarın.',
        'rules' => [
            'name' => 'Lokasyon adı zorunludur ve 120 karakteri geçmemelidir.',
            'slug' => 'Eğer konum bilgisi verilecekse, slug\'ı 120 karakteri geçmemelidir.',
            'import_type' => 'İthalat türü zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır.',
            'order' => 'Konum sırası, eğer belirtilmişse, 0 ile 127 arasında pozitif bir tam sayı olmalıdır.',
            'abbreviation' => 'Eğer yerin kısaltması verilecekse, bu 10 karakteri geçmemelidir.',
            'status' => 'Lokasyonun durumu zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır.',
            'country' => 'İthalat türü eyalet veya şehir ise ülke alanı zorunludur.',
            'state' => 'İthalat türü şehir ise eyalet alanı zorunludur.',
            'nationality' => 'Eğer belirtilecekse lokasyonun milliyeti 120 karakteri geçmemelidir.',
        ],
    ],
    'create' => 'Yeni Konum',
    'edit' => 'Konumu Düzenle',
    'export_location' => 'İhracat Konumu',
    'exporting' => 'İhracat',
    'start_export' => 'Dışa Aktarmaya Başla',
    'total_city' => 'Toplam Şehirler',
    'total_country' => 'Toplam Ülke',
    'total_state' => 'Toplam Durum',
];
