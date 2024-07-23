<?php

return [
    'name' => 'Boletines',
    'newsletter_form' => 'Formulario de boletines',
    'description' => 'Ver y eliminar suscriptores del boletín',
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
        'mailchimp_api_key' => 'Clave API de Mailchimp',
        'mailchimp_list_id' => 'ID de lista de Mailchimp',
        'sendgrid_api_key' => 'Clave API de SendGrid',
        'sendgrid_list_id' => 'ID de lista de Sendgrid',
        'panel_description' => 'Ver y actualizar la configuración del boletín',
        'mailchimp_list' => 'Lista de MailChimp',
        'sendgrid_list' => 'Lista de cuadrícula de envío',
        'enable_newsletter_contacts_list_api' => '¿Habilitar la API de la lista de contactos del boletín?',
    ],
    'statuses' => [
        'subscribed' => 'Suscrito',
        'unsubscribed' => 'Darme de baja',
    ],
];
