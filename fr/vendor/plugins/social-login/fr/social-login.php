<?php

return [
    'settings' => [
        'title' => 'Paramètres de connexion sociale',
        'description' => 'Configurer les options de connexion sociale',
        'facebook' => [
            'title' => 'Paramètres de connexion à Facebook',
            'description' => 'Activer/désactiver et configurer les informations d\'identification de l\'application pour la connexion à Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Rendez-vous sur https://developers.facebook.com pour créer une nouvelle application et mettre à jour App ID, App Secret. Callback URL is :callback',
        ],
        'google' => [
            'title' => 'Paramètres de connexion à Google',
            'description' => 'Enable/disable & configure app credentials for Google login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://console.developers.google.com/apis/dashboard to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'github' => [
            'title' => 'Github login settings',
            'description' => 'Enable/disable & configure app credentials for Github login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://github.com/settings/developers to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin' => [
            'title' => 'Paramètres de connexion à Linkedin',
            'description' => 'Enable/disable & configure app credentials for Linkedin login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'enable' => 'Activer ?',
    ],
    'menu' => 'Connexion sociale',
];
