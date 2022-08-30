<?php

return [
    'settings' => [
        'title' => 'Параметры социального входа',
        'description' => 'Настройка параметров социального входа',
        'facebook' => [
            'title' => 'Настройки входа в Facebook',
            'description' => 'Включение/отключение и настройка учетных данных приложения для входа в Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Пожалуйста, перейдите на https://developers.facebook.com для создания нового обновления приложения App ID, App Secret. Callback URL is :callback',
        ],
        'google' => [
            'title' => 'Настройки входа в Google',
            'description' => 'Включение/отключение и настройка учетных данных приложения для входа в Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Пожалуйста, перейдите на https://console.developers.google.com/apis/dashboard для создания нового обновления приложения App ID, App Secret. Callback URL is :callback',
        ],
        'github' => [
            'title' => 'Настройки входа в Github',
            'description' => 'Включение/выключение и настройка учетных данных приложения для входа на Github',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Пожалуйста, перейдите на https://github.com/settings/developers для создания нового обновления приложения App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin' => [
            'title' => 'Настройки входа в Linkedin',
            'description' => 'Включение/выключение и настройка учетных данных приложения для входа в Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Пожалуйста, перейдите на https://www.linkedin.com/developers/apps/new для создания нового обновления приложения App ID, App Secret. Callback URL is :callback',
        ],
        'enable' => 'Включить?',
    ],
    'menu' => 'Социальный вход',
];
