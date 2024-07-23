<?php

return [
    'settings' => [
        'title' => 'Social Login settings',
        'description' => 'Configure social login options',
        'facebook' => [
            'enable' => 'Enable Facebook login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://developers.facebook.com to create new app update App ID, App Secret. Callback URL is :callback',
            'data_deletion_request_callback_url' => 'Set this URL :url as the Data Deletion Request URL in your Facebook app settings to allow users to request deletion of their data.',
        ],
        'google' => [
            'enable' => 'Enable Google login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://console.developers.google.com/apis/dashboard to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'github' => [
            'enable' => 'Enable GitHub login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://github.com/settings/developers to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin' => [
            'enable' => 'Enable Linkedin login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Enable Linkedin using OpenID Connect login',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'enable' => 'Enable Social login?',
    ],
    'menu' => 'Social Login',
    'description' => 'View and update your social login settings',
];
