<?php

return [
    'title' => 'Kurulum',
    'next' => 'Sonraki adım',
    'back' => 'Öncesi',
    'finish' => 'Düzenlemek',
    'installation' => 'Kurulum',
    'forms' => [
        'errorTitle' => 'şu hatalar oluştu:',
    ],
    'welcome' => [
        'title' => 'Hoş geldin',
        'message' => 'Başlamadan önce veritabanı hakkında bazı bilgilere ihtiyacımız var. Devam etmeden önce aşağıdaki öğeleri bilmeniz gerekecektir.',
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
            'title' => 'Ortam Ayarları',
            'form' => [
                'name_required' => 'Bir ortam adı gerekli.',
                'app_name_label' => 'Site Başlığı',
                'app_name_placeholder' => 'Site Başlığı',
                'app_url_label' => 'URL\'si',
                'app_url_placeholder' => 'URL\'si',
                'db_connection_label' => 'Veritabanı Bağlantısı',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Veritabanı ana bilgisayarı',
                'db_host_placeholder' => 'Veritabanı ana bilgisayarı',
                'db_port_label' => 'Veritabanı bağlantı noktası',
                'db_port_placeholder' => 'Veritabanı bağlantı noktası',
                'db_name_label' => 'Veri tabanı ismi',
                'db_name_placeholder' => 'Veri tabanı ismi',
                'db_username_label' => 'Veritabanı kullanıcı adı',
                'db_username_placeholder' => 'Veritabanı kullanıcı adı',
                'db_password_label' => 'Veritabanı şifresi',
                'db_password_placeholder' => 'Veritabanı şifresi',
                'buttons' => [
                    'install' => 'Düzenlemek',
                ],
                'db_host_helper' => 'Laravel Sail kullanıyorsanız DB_HOST\'u DB_HOST=mysql olarak değiştirin. Bazı barındırmalarda DB_HOST, 127.0.0.1 yerine localhost olabilir',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => '.env dosya ayarlarınız kaydedildi.',
        'errors' => '.env dosyası kaydedilemiyor. Lütfen manuel olarak oluşturun.',
    ],
    'theme' => [
        'title' => 'Tema seç',
        'message' => 'Web sitenizin görünümünü kişiselleştirmek için bir tema seçin. Bu seçim aynı zamanda seçilen temaya göre uyarlanmış örnek verileri de içe aktaracaktır.',
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
        'skip' => 'Şimdilik geç',
    ],
    'install' => 'Düzenlemek',
    'final' => [
        'message' => 'Uygulama başarıyla kuruldu.',
        'pageTitle' => 'Kurulum Tamamlandı',
        'title' => 'Tamamlamak',
        'exit' => 'Yönetici kontrol paneline gidin',
    ],
    'install_success' => 'Başarıyla kuruldu!',
    'install_step_title' => 'Installation - Step :step: :title',
];
