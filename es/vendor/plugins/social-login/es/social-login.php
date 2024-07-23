<?php

return [
    'settings' => [
        'title' => 'Configuración de inicio de sesión social',
        'description' => 'Configurar opciones de inicio de sesión social',
        'facebook' => [
            'title' => 'Configuración de inicio de sesión de Facebook',
            'description' => 'Habilitar / deshabilitar y configurar las credenciales de la aplicación para iniciar sesión en Facebook',
            'app_id' => 'ID de aplicación',
            'app_secret' => 'App secreta',
            'helper' => 'Vaya a: https://developers.facebook.com para crear una nueva Aplicación: App ID, App clave secreta. La URL de devolución de llamada es:  :callback',
            'enable' => 'Habilitar inicio de sesión de Facebook',
            'data_deletion_request_callback_url' => 'Set this URL :url as the Data Deletion Request URL in your Facebook app settings to allow users to request deletion of their data.',
        ],
        'google' => [
            'title' => 'Configuración de inicio de sesión de Google',
            'description' => 'Habilitar / deshabilitar y configurar las credenciales de la aplicación para el inicio de sesión de Google',
            'app_id' => 'ID de aplicación',
            'app_secret' => 'App secreta',
            'helper' => 'Vaya a: https://console.developers.google.com/apis/dashboard para crear una nueva Aplicación: App ID, App clave secreta. La URL de devolución de llamada es:  :callback',
            'enable' => 'Habilitar el inicio de sesión de Google',
        ],
        'github' => [
            'title' => 'Configuración de inicio de sesión de Github',
            'description' => 'Habilitar / deshabilitar y configurar las credenciales de la aplicación para el inicio de sesión de Github',
            'app_id' => 'ID de aplicación',
            'app_secret' => 'App secreta',
            'helper' => 'Vaya a:  https://github.com/settings/developers '."\n"
                .'para crear una aplicación: ID de la aplicación, App Secreta. La URL de devolución de llamada es :callback',
            'enable' => 'Habilitar el inicio de sesión en GitHub',
        ],
        'linkedin' => [
            'title' => 'Configuración de inicio de sesión de Linkedin',
            'description' => 'Habilitar / deshabilitar y configurar las credenciales de la aplicación para el inicio de sesión de Linkedin',
            'app_id' => 'ID de aplicación',
            'app_secret' => 'App secreta',
            'helper' => 'Vaya a: https://www.linkedin.com/developers/apps/new para crear una nueva Aplicación: App ID, App clave secreta. La URL de devolución de llamada es:  :callback',
            'enable' => 'Habilitar inicio de sesión en Linkedin',
        ],
        'enable' => '¿Habilitar?',
        'linkedin-openid' => [
            'enable' => 'Habilite Linkedin mediante el inicio de sesión de OpenID Connect',
            'app_id' => 'ID de aplicación',
            'app_secret' => 'App secreta',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'style' => 'Estilo',
        'minimal' => 'Mínimo',
        'default' => 'Por defecto',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'LinkedIn',
        'linkedin-openid' => 'Conexión OpenID de Linkedin',
    ],
    'menu' => 'Sesión Social',
    'description' => 'Ver y actualizar su configuración de inicio de sesión social',
    'sign_in_with' => 'Sign in with :provider',
];
