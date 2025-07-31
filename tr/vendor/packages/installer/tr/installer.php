<?php

return [
    'title' => 'Kurulum',
    'next' => 'Sonraki Adım',
    'back' => 'Öncesi',
    'finish' => 'Kur',
    'installation' => 'Kurulum',
    'forms' => [
        'errorTitle' => 'Aşağıdaki hatalar oluştu:',
    ],
    'welcome' => [
        'title' => 'Hoş geldin',
        'message' => 'Başlamadan önce, veritabanı hakkında bazı bilgilere ihtiyacımız var. Devam etmeden önce aşağıdaki maddeleri bilmeniz gerekecektir.',
        'language' => 'Dil',
        'next' => 'Hadi gidelim',
    ],
    'requirements' => [
        'title' => 'Sunucu Gereksinimleri',
        'next' => 'İzinleri Kontrol Et',
    ],
    'permissions' => [
        'next' => 'Ortamı Yapılandır',
    ],
    'environment' => [
        'wizard' => [
            'title' => 'Çevre Ayarları',
            'form' => [
                'name_required' => 'Bir ortam adı gerekli.',
                'app_name_label' => 'Site başlığı',
                'app_name_placeholder' => 'Site başlığı',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Veritabanı Bağlantısı',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Veritabanı ana bilgisayarı',
                'db_host_placeholder' => 'Veritabanı ana bilgisayarı',
                'db_port_label' => 'Veritabanı portu',
                'db_port_placeholder' => 'Veritabanı portu',
                'db_name_label' => 'Veritabanı adı',
                'db_name_placeholder' => 'Veritabanı adı',
                'db_username_label' => 'Veritabanı kullanıcı adı',
                'db_username_placeholder' => 'Veritabanı kullanıcı adı',
                'db_password_label' => 'Veritabanı şifresi',
                'db_password_placeholder' => 'Veritabanı şifresi',
                'buttons' => [
                    'install' => 'Kur',
                ],
                'db_host_helper' => 'Laravel Sail kullanıyorsanız, DB_HOST\'u DB_HOST=mysql olarak değiştirmeniz yeterlidir. Bazı barındırmalarda DB_HOST 127.0.0.1 yerine localhost olabilir.',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => '.env dosyanızın ayarları kaydedildi.',
        'errors' => '.env dosyası kaydedilemedi. Lütfen manuel olarak oluşturun.',
    ],
    'theme' => [
        'title' => 'Tema seçin',
        'message' => 'Web sitenizin görünümünü kişiselleştirmek için bir tema seçin. Bu seçim, seçilen temaya göre uyarlanmış örnek verileri de içe aktaracaktır.',
    ],
    'theme_preset' => [
        'title' => 'Tema ön ayarını seçin',
        'message' => 'Web sitenizin görünümünü kişiselleştirmek için bir tema ön ayarı seçin. Bu seçim, seçilen temaya göre uyarlanmış örnek verileri de içe aktaracaktır.',
    ],
    'createAccount' => [
        'title' => 'Hesap oluşturmak',
        'form' => [
            'first_name' => 'İlk adı',
            'last_name' => 'Soy isim',
            'username' => 'Kullanıcı adı',
            'email' => 'E-posta',
            'password' => 'Şifre',
            'password_confirmation' => 'Şifre onayı',
            'create' => 'Yaratmak',
        ],
    ],
    'license' => [
        'title' => 'Lisansı Etkinleştir',
        'skip' => 'Şimdilik atla',
    ],
    'install' => 'Düzenle',
    'final' => [
        'message' => 'Uygulama başarıyla kuruldu.',
        'pageTitle' => 'Kurulum Tamamlandı',
        'title' => 'Tamamlamak',
        'exit' => 'Yönetici panosuna git',
    ],
    'install_success' => 'Başarıyla kuruldu!',
    'install_step_title' => 'Kurulum - Adım :step: :title',
];
