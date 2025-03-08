<?php

return [
    'name' => 'Newsletter',
    'newsletter_form' => 'Newsletter Form',
    'description' => 'Sehen Sie sich Newsletter -Abonnenten an und löschen Sie',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'E -Mail -Vorlagen für Konfiguration Newsletter',
                'to_admin' => [
                    'title' => 'E -Mail an admin senden',
                    'description' => 'Vorlage zum Senden von E -Mails an den Administrator',
                    'subject' => 'Der neue Benutzer hat Ihren Newsletter abonniert',
                    'newsletter_email' => 'E -Mail des Benutzer, der Newsletter abonniert',
                ],
                'to_user' => [
                    'title' => 'E -Mail an den Benutzer senden',
                    'description' => 'Vorlage zum Senden von E -Mails an den Abonnenten',
                    'subject' => '{{Site_title}}: Abonnement bestätigt!',
                    'newsletter_name' => 'Vollständiger Name des Benutzer, der Newsletter abonniert',
                    'newsletter_email' => 'E -Mail des Benutzer, der Newsletter abonniert',
                    'newsletter_unsubscribe_link' => 'Link für den Abbestellen -Newsletter',
                    'newsletter_unsubscribe_url' => 'URL für den Abbestellen -Newsletter',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'Die Einstellungen der Newsletter anzeigen und aktualisieren',
        'description' => 'Einstellungen für Newsletter (automatische Newsletter -E -Mail an SendGrid, MailChimp ... Wenn jemand Newsletter auf der Website registriert).',
        'mailchimp_api_key' => 'MailChimp -API -Schlüssel',
        'mailchimp_list_id' => 'MailChimp -Listen -ID',
        'mailchimp_list' => 'Mailchimp -Liste',
        'sendgrid_api_key' => 'SendGrid API -Schlüssel',
        'sendgrid_list_id' => 'SendGrid List ID',
        'sendgrid_list' => 'SendGrid -Liste',
        'enable_newsletter_contacts_list_api' => 'Aktivieren Sie Newsletter -Kontaktlisten -API?',
    ],
    'statuses' => [
        'subscribed' => 'Gezeichnet',
        'unsubscribed' => 'Abgemeldet',
    ],
];
