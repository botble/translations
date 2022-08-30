<?php

return [
    'name' => 'Рассылки',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Рассылка',
                'description' => 'Настройка шаблонов электронной почты для рассылки новостей',
                'to_admin' => [
                    'title' => 'Отправить письмо администратору',
                    'description' => 'Шаблон для отправки письма администратору',
                ],
                'to_user' => [
                    'title' => 'Отправка электронной почты пользователю',
                    'description' => 'Шаблон для отправки электронного письма подписчику',
                ],
            ],
        ],
        'title' => 'Рассылка',
        'description' => 'Настройки для рассылки новостей',
        'mailchimp_api_key' => 'Mailchimp API Key',
        'mailchimp_list_id' => 'Mailchimp List ID',
        'mailchimp_list' => 'Mailchimp List',
        'sendgrid_api_key' => 'Sendgrid API Key',
        'sendgrid_list_id' => 'Sendgrid List ID',
        'sendgrid_list' => 'Sendgrid List',
    ],
    'statuses' => [
        'subscribed' => 'Подписка',
        'unsubscribed' => 'Отписаться',
    ],
];
