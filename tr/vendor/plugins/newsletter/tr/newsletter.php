<?php

return [
    'name' => 'Bültenler',
    'newsletter_form' => 'Bülten formu',
    'description' => 'Bülten abonelerini görüntüleme ve silme',
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
        'panel_description' => 'Haber bülteni ayarlarını görüntüleyin ve güncelleyin',
        'enable_newsletter_contacts_list_api' => 'Bülten kişi listesi API\'si etkinleştirilsin mi?',
    ],
    'statuses' => [
        'subscribed' => 'Abone Olundu',
        'unsubscribed' => 'Abonelikten Çıkıldı',
    ],
];
