<?php

return [
    'name' => 'Розсилки',
    'newsletter_form' => 'Форма підписки на розсилку',
    'description' => 'Перегляньте та видаліть підписників розсилки',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Розсилка',
                'description' => 'Налаштування шаблонів електронних листів для розсилки',
                'to_admin' => [
                    'title' => 'Електронний лист адміністратору',
                    'description' => 'Шаблон для надсилання електронного листа адміністратору',
                ],
                'to_user' => [
                    'title' => 'Електронний лист користувачеві',
                    'description' => 'Шаблон для надсилання електронного листа підписнику',
                ],
            ],
        ],
        'title' => 'Розсилка',
        'panel_description' => 'Перегляньте та оновіть налаштування розсилки',
        'description' => 'Налаштування для розсилки (автоматичне надсилання розсилки електронною поштою до SendGrid, Mailchimp... коли хтось підписується на розсилку на сайті).',
        'mailchimp_api_key' => 'API-ключ Mailchimp',
        'mailchimp_list_id' => 'ID списку Mailchimp',
        'mailchimp_list' => 'Список Mailchimp',
        'sendgrid_api_key' => 'API-ключ SendGrid',
        'sendgrid_list_id' => 'ID списку SendGrid',
        'sendgrid_list' => 'Список SendGrid',
        'enable_newsletter_contacts_list_api' => 'Увімкнути API списку контактів розсилки?',
    ],
    'statuses' => [
        'subscribed' => 'Підписано',
        'unsubscribed' => 'Відписано',
    ],
];
