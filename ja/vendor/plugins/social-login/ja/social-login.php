<?php

return [
    'settings' => [
        'title' => 'ソーシャルログイン設定',
        'description' => 'ソーシャル ログイン オプションを構成する',
        'facebook' => [
            'enable' => 'Facebook ログインを有効にする',
            'app_id' => 'アプリID',
            'app_secret' => 'アプリの秘密',
            'helper' => 'Please go to https://developers.facebook.com to create new app update App ID, App Secret. Callback URL is :callback',
            'data_deletion_request_callback_url' => 'Set this URL :url as the Data Deletion Request URL in your Facebook app settings to allow users to request deletion of their data.',
        ],
        'google' => [
            'enable' => 'Google ログインを有効にする',
            'app_id' => 'アプリID',
            'app_secret' => 'アプリの秘密',
            'helper' => 'Please go to https://console.developers.google.com/apis/dashboard to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'github' => [
            'enable' => 'GitHub ログインを有効にする',
            'app_id' => 'アプリID',
            'app_secret' => 'アプリの秘密',
            'helper' => 'Please go to https://github.com/settings/developers to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin' => [
            'enable' => 'Linkedin ログインを有効にする',
            'app_id' => 'アプリID',
            'app_secret' => 'アプリの秘密',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'OpenID Connect ログインを使用して Linkedin を有効にする',
            'app_id' => 'アプリID',
            'app_secret' => 'アプリの秘密',
            'helper' => 'Please go to https://www.linkedin.com/developers/apps/new to create new app update App ID, App Secret. Callback URL is :callback',
        ],
        'enable' => 'ソーシャルログインを有効にしますか?',
        'style' => 'スタイル',
        'minimal' => '最小限',
        'default' => 'デフォルト',
        'basic' => '基本',
    ],
    'socials' => [
        'facebook' => 'フェイスブック',
        'google' => 'グーグル',
        'github' => 'GitHub',
        'linkedin' => 'リンクトイン',
        'linkedin-openid' => 'Linkedin OpenID Connect',
    ],
    'menu' => 'ソーシャルログイン',
    'description' => 'ソーシャル ログイン設定の表示と更新',
    'sign_in_with' => 'Sign in with :provider',
];
