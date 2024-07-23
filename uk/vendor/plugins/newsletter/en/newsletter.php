<?php

return [
    'name' => 'Newsletters',
    'newsletter_form' => 'Newsletters form',
    'description' => 'View and delete newsletter subscribers',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Newsletter',
                'description' => 'Config newsletter email templates',
                'to_admin' => [
                    'title' => 'Email send to admin',
                    'description' => 'Template for sending email to admin',
                ],
                'to_user' => [
                    'title' => 'Email send to user',
                    'description' => 'Template for sending email to subscriber',
                ],
            ],
        ],
        'title' => 'Newsletter',
        'panel_description' => 'View and update newsletter settings',
        'description' => 'Settings for newsletter (auto send newsletter email to SendGrid, Mailchimp... when someone register newsletter on website).',
        'mailchimp_api_key' => 'Mailchimp API Key',
        'mailchimp_list_id' => 'Mailchimp List ID',
        'mailchimp_list' => 'Mailchimp List',
        'sendgrid_api_key' => 'Sendgrid API Key',
        'sendgrid_list_id' => 'Sendgrid List ID',
        'sendgrid_list' => 'Sendgrid List',
        'enable_newsletter_contacts_list_api' => 'Enable newsletter contacts list API?',
    ],
    'statuses' => [
        'subscribed' => 'Subscribed',
        'unsubscribed' => 'Unsubscribed',
    ],
];
