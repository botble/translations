<?php

return [
    'name' => 'Newsletters',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Configurer les modèles de newsletter',
                'to_admin' => [
                    'title' => 'Envoi d\'un e-mail à l\'administrateur',
                    'description' => 'Modèle pour l\'envoi d\'un e-mail à l\'administrateur',
                ],
                'to_user' => [
                    'title' => 'Envoi d\'un e-mail à l\'utilisateur',
                    'description' => 'Modèle pour l\'envoi d\'un e-mail à l\'abonné',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'description' => 'Paramètres de la Newsletter',
        'mailchimp_api_key' => 'Mailchimp API Key',
        'mailchimp_list_id' => 'Mailchimp List ID',
        'mailchimp_list' => 'Mailchimp List',
        'sendgrid_api_key' => 'Sendgrid API Key',
        'sendgrid_list_id' => 'Sendgrid List ID',
        'sendgrid_list' => 'Sendgrid List',
    ],
    'statuses' => [
        'subscribed' => 'Abonné(e)',
        'unsubscribed' => 'Désabonné',
    ],
];
