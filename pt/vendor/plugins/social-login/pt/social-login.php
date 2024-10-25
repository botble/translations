<?php

return [
    'settings' => [
        'title' => 'Configurações de login social',
        'description' => 'Configurar opções de login social',
        'facebook' => [
            'enable' => 'Habilitar login no Facebook',
            'app_id' => 'ID do aplicativo',
            'app_secret' => 'Segredo do aplicativo',
            'helper' => 'Please go to https://developers.facebook.com to create new app update App ID, App Secret. Callback URL is :callback',
            'data_deletion_request_callback_url' => 'Set this URL :url as the Data Deletion Request URL in your Facebook app settings to allow users to request deletion of their data.',
        ],
        'google' => [
            'enable' => 'Ativar login do Google',
            'app_id' => 'ID do aplicativo',
            'app_secret' => 'Segredo do aplicativo',
            'helper' => 'Please go to https://console.developers.google.com/apis/dashboard to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'github' => [
            'enable' => 'Habilitar login no GitHub',
            'app_id' => 'ID do aplicativo',
            'app_secret' => 'Segredo do aplicativo',
            'helper' => 'Please go to https://github.com/settings/developers to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin' => [
            'enable' => 'Habilitar login no Linkedin',
            'app_id' => 'ID do aplicativo',
            'app_secret' => 'Segredo do aplicativo',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Habilite o Linkedin usando login do OpenID Connect',
            'app_id' => 'ID do aplicativo',
            'app_secret' => 'Segredo do aplicativo',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'enable' => 'Ativar login social?',
        'style' => 'Estilo',
        'minimal' => 'Mínimo',
        'default' => 'Padrão',
        'basic' => 'Básico',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
    ],
    'menu' => 'Login Social',
    'description' => 'Visualize e atualize suas configurações de login social',
    'sign_in_with' => 'Sign in with :provider',
];
