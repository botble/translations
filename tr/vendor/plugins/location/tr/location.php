<?php

return [
    'name' => 'Teslimat Bölgeleri',
    'all_states' => 'Tüm Şehirler',
    'abbreviation' => 'Kısaltma',
    'abbreviation_placeholder' => 'örn: AF.',
    'enums' => [
        'import_type' => [
            'country' => 'Ülke',
            'state' => 'Durum',
            'city' => 'Şehir',
        ],
    ],
    'export' => [
        'total' => 'Toplam Konumlar',
        'total_countries' => 'Toplam Ülkeler',
        'total_states' => 'Toplam Durumlar',
        'total_cities' => 'Toplam Şehirler',
        'description' => 'Ülkeler, eyaletler ve şehirler gibi konum verilerinizi dışa aktarın.',
    ],
    'import' => [
        'description' => 'Mevcut verilerden veya bir CSV/Excel dosyası yükleyerek konum verilerini kolayca içe aktarın.',
        'rules' => [
            'name' => 'Konumun adı zorunludur ve 120 karakteri geçmemelidir.',
            'slug' => 'Sağlanmışsa, konumun bilgisi 120 karakteri geçmemelidir.',
            'import_type' => 'İçe aktarma türü zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır.',
            'order' => 'Sağlandığı takdirde konumun sırası 0 ile 127 arasında pozitif bir tam sayı olmalıdır.',
            'abbreviation' => 'Varsa yer kısaltması 10 karakteri geçmemelidir.',
            'status' => 'Konumun durumu zorunludur ve önceden tanımlanmış değerlerden biri olmalıdır.',
            'country' => 'İçe aktarma türü eyalet veya şehir ise ülke alanı zorunludur.',
            'state' => 'İçe aktarma türü şehir ise eyalet alanı zorunludur.',
            'nationality' => 'Sağlanmışsa, konumun uyruğu 120 karakteri geçmemelidir.',
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
