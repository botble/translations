<?php

return [
    'settings' => [
        'enable' => 'Etkinleştir',
        'google' => [
            'helper' => 'Lütfen uygulamanızı oluşturmak için şu adrese gidin: https://console.developers.google.com/apis/dashboard Çağırma Bağlantısı :callback',
            'description' => 'Google ile giriş Etkinleştir / Devre dışı bırak veya Kimlik Bilgilerini düzenle',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'app_id' => 'Uygulama Kimliği',
            'title' => 'Google Uygulama Ayarları',
        ],
        'description' => 'Sosyal Medya Girişlerini Düzenle',
        'facebook' => [
            'app_id' => 'Uygulama Kimliği',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'description' => 'Facebook ile girişi Etkinleştir / Devre dışı bırak veya Kimlik Bilgilerini düzenle',
            'helper' => 'Lütfen uygulamanızı oluşturmak için şu adrese gidin: https://developers.facebook.com Çağırma Bağlantısı :callback',
            'title' => 'Facebook Uygulama Ayarları',
        ],
        'github' => [
            'description' => 'GitHub ile girişi Etkinleştir / Devre dışı bırak veya Kimlik Bilgilerini düzenle',
            'helper' => 'Lütfen uygulamanızı oluşturmak için şu adrese gidin: https://github.com/settings/developers Çağırma Bağlantısı :callback',
            'app_id' => 'Uygulama Kimliği',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'title' => 'GitHub Uygulama Ayarları',
        ],
        'linkedin' => [
            'description' => 'Linkedin ile giriş Etkinleştir / Devre dışı bırak veya Kimlik Bilgilerini düzenle',
            'helper' => 'Lütfen uygulamanızı oluşturmak için şu adrese gidin: https://www.linkedin.com/developers/apps/new Çağırma Bağlantısı :callback',
            'app_secret' => 'Uygulama Gizli Anahtarı',
            'app_id' => 'Uygulama Kimliği',
            'title' => 'Linkedin Uygulama Ayarları',
        ],
        'title' => 'Sosyal Medya ile Giriş Ayarları',
    ],
    'menu' => 'Sosyal Medya API',
];
