<?php

return [
    'name' => 'Bültenler',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Bülten',
                'description' => 'Bülten E-Posta şablonlarını yapılandırın',
                'to_admin' => [
                    'title' => 'Yöneticiye e-posta gönder',
                    'description' => 'Yöneticiye e-posta göndermek için şablon',
                ],
                'to_user' => [
                    'title' => 'Kullanıcıya e-posta gönder',
                    'description' => 'Aboneye e-posta göndermek için şablon',
                ],
            ],
        ],
        'title' => 'Bülten',
        'description' => 'Bülten Ayarları',
        'mailchimp_api_key' => 'Mailchimp API Anahtarı',
        'mailchimp_list_id' => 'Mailchimp Listesi Kimliği',
        'mailchimp_list' => 'Mailchimp Listesi',
        'sendgrid_api_key' => 'Sendgrid API Anahtarı',
        'sendgrid_list_id' => 'Sendgrid Liste Kimliği',
        'sendgrid_list' => 'SendGrid Listesi',
    ],
    'statuses' => [
        'subscribed' => 'Abone Olundu',
        'unsubscribed' => 'Abonelikten Çıkıldı',
    ],
];
