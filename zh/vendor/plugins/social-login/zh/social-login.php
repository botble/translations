<?php

return [
    'settings' => [
        'title' => '社交登录设置',
        'description' => '配置社交登录选项',
        'facebook' => [
            'enable' => '启用Facebook登录',
            'app_id' => '应用程序 ID',
            'app_secret' => '应用密钥',
            'helper' => '请访问 https://developers.facebook.com 创建新的应用程序更新 App ID 和 App Secret。回调 URL 是 :callback',
            'data_deletion_request_callback_url' => '将此 URL :url 设置为您的 Facebook 应用程序设置中的数据删除请求 URL，以允许用户请求删除他们的数据。',
        ],
        'google' => [
            'enable' => '启用Google登录',
            'app_id' => '应用程序 ID',
            'app_secret' => '应用密钥',
            'helper' => '请访问 https://console.developers.google.com/apis/dashboard 创建新的应用程序更新 App ID 和 App Secret。回调 URL 是 :callback',
            'use_google_button' => '使用谷歌按钮',
            'use_google_button_helper' => '如果您启用此选项，将使用 Google 按钮而不是默认按钮。',
        ],
        'github' => [
            'enable' => '启用 GitHub 登录',
            'app_id' => '应用程序 ID',
            'app_secret' => '应用密钥',
            'helper' => '请访问 https://github.com/settings/developers 创建新的应用更新 App ID 和 App Secret。回调 URL 是 :callback',
        ],
        'linkedin' => [
            'enable' => '启用Linkedin登录',
            'app_id' => '应用程序 ID',
            'app_secret' => '应用密钥',
            'helper' => '请访问 https://www.linkedin.com/developers/apps/new 创建新的应用程序，更新应用程序 ID 和应用程序密钥。回调 URL 是 :callback',
        ],
        'linkedin-openid' => [
            'enable' => '启用Linkedin使用OpenID Connect登录',
            'app_id' => '应用程序 ID',
            'app_secret' => '应用密钥',
            'helper' => '请访问 https://www.linkedin.com/developers/apps/new 创建新的应用程序，更新应用程序 ID 和应用程序密钥。回调 URL 是 :callback',
        ],
        'enable' => '启用社交登录？',
        'style' => '风格',
        'minimal' => '最小化',
        'default' => '默认',
        'basic' => '基本',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => '谷歌',
        'github' => 'GitHub',
        'linkedin' => '领英',
        'linkedin-openid' => 'Linkedin开放ID连接',
    ],
    'menu' => '社交登录',
    'description' => '查看和更新您的社交登录设置',
    'sign_in_with' => '使用 :provider 登录',
];
