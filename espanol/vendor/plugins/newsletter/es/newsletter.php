<?php

return [
    'name' => 'Boletines',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Boletin informativo',
                'description' => 'Configurar plantillas de correo electrónico para boletines',
                'to_admin' => [
                    'title' => 'Enviar correo electrónico al administrador',
                    'description' => 'Plantilla para enviar correo electrónico al administrador',
                ],
                'to_user' => [
                    'title' => 'Enviar correo electrónico al usuario',
                    'description' => 'Plantilla para enviar correo electrónico al suscriptor',
                ],
            ],
        ],
        'title' => 'Boletin informativo',
        'description' => 'Configuración del boletín',
        'mailchimp_api_key' => 'Mailchimp API Key',
        'mailchimp_list_id' => 'Mailchimp List ID',
        'sendgrid_api_key' => 'Sendgrid API Key',
        'sendgrid_list_id' => 'Sendgrid List ID',
    ],
    'statuses' => [
        'subscribed' => 'Suscrito',
        'unsubscribed' => 'Darme de baja',
    ],
];
