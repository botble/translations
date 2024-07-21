<?php

return [
    'settings' => [
        'facebook' => [
            'enable' => 'Activer la connexion Facebook',
            'app_id' => 'Identifiant de l\'application',
            'app_secret' => 'Secret d\'application',
            'data_deletion_request_callback_url' => 'Set this URL :url as the Data Deletion Request URL in your Facebook app settings to allow users to request deletion of their data.',
        ],
        'google' => [
            'enable' => 'Activer la connexion Google',
            'app_id' => 'Identifiant de l\'application',
            'app_secret' => 'Secret d\'application',
            'helper' => 'Please go to https://console.developers.google.com/apis/dashboard to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'github' => [
            'enable' => 'Activer la connexion à GitHub',
            'app_id' => 'Identifiant de l\'application',
            'app_secret' => 'Secret d\'application',
            'helper' => 'Please go to https://github.com/settings/developers to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin' => [
            'enable' => 'Activer la connexion Linkedin',
            'app_id' => 'Identifiant de l\'application',
            'app_secret' => 'Secret d\'application',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Activer Linkedin à l\'aide de la connexion OpenID Connect',
            'app_id' => 'Identifiant de l\'application',
            'app_secret' => 'Secret d\'application',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'style' => 'Style',
        'minimal' => 'Minimal',
        'default' => 'Défaut',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
    ],
    'menu' => 'Social Login',
    'description' => 'Afficher et mettre à jour vos paramètres de connexion sociale',
    'sign_in_with' => 'Sign in with :provider',
];
