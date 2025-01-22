<?php

return [
    'settings' => [
        'title' => '社交登錄設置',
        'description' => '配置社交登錄選項',
        'facebook' => [
            'enable' => '啟用 Facebook 登入',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://developers.facebook.com 創建新的應用程式更新應用程式 ID 和應用程式密鑰。回調 URL 是 :callback',
            'data_deletion_request_callback_url' => '將此網址 :url 設定為您的 Facebook 應用程式設置中的數據刪除請求網址，以便用戶可以請求刪除他們的數據。',
        ],
        'google' => [
            'enable' => '啟用 Google 登入',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://console.developers.google.com/apis/dashboard 創建新的應用程式更新應用程式 ID、應用程式密鑰。回調 URL 是 :callback',
            'use_google_button' => '使用Google按鈕',
            'use_google_button_helper' => '如果你啟用這個選項，將會使用Google按鈕而不是默認按鈕。',
        ],
        'github' => [
            'enable' => '啟用 GitHub 登入',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://github.com/settings/developers 創建新的應用程式更新 App ID 和 App Secret。回調 URL 是 :callback',
        ],
        'linkedin' => [
            'enable' => '啟用Linkedin登錄',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://www.linkedin.com/developers/apps/new 創建新的應用程式更新應用程式 ID 和應用程式密鑰。回調 URL 是 :callback',
        ],
        'linkedin-openid' => [
            'enable' => '啟用Linkedin使用OpenID Connect登錄',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://www.linkedin.com/developers/apps/new 創建新的應用程式更新應用程式 ID 和應用程式密鑰。回調 URL 是 :callback',
        ],
        'enable' => '啟用社交登錄？',
        'style' => '風格',
        'minimal' => '最少',
        'default' => '默認',
        'basic' => '基本',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'LinkedIn',
        'linkedin-openid' => 'Linkedin OpenID Connect',
    ],
    'menu' => '社交登入',
    'description' => '查看和更新你的社交登錄設置',
    'sign_in_with' => '使用 :provider 登入',
];
