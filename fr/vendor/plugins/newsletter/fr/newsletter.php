<?php

return [
    'name' => 'Lettres d\'information',
    'newsletter_form' => 'Formulaire de newsletter',
    'description' => 'Afficher et supprimer les abonnés à la newsletter',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Bulletin',
            ],
        ],
        'title' => 'Bulletin',
        'panel_description' => 'Afficher et mettre à jour les paramètres de la newsletter',
        'mailchimp_api_key' => 'Clé API Mailchimp',
        'mailchimp_list_id' => 'ID de liste Mailchimp',
        'mailchimp_list' => 'Liste Mailchimp',
        'sendgrid_api_key' => 'Clé API Sendgrid',
        'sendgrid_list_id' => 'ID de liste Sendgrid',
        'sendgrid_list' => 'Liste Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Activer l\'API de la liste de contacts de la newsletter ?',
    ],
    'statuses' => [
        'subscribed' => 'Subscribed',
        'unsubscribed' => 'Unsubscribed',
    ],
];
