<?php

return [
    'settings' => [
        'title' => '社交登錄設置',
        'description' => '配置社交登錄選項',
        'facebook' => [
            'enable' => '啟用 Facebook 登錄',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://developers.facebook.com 創建新的應用程式並更新應用程式 ID 和應用程式密鑰。回呼 URL 為',
            'data_deletion_request_callback_url' => '將此 URL設為您的 Facebook 應用程式設置中的資料刪除請求 URL，以允許用戶要求刪除他們的資料。',
        ],
        'google' => [
            'enable' => '啟用 Google 登錄',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://console.developers.google.com/apis/dashboard 創建新的應用程式並更新應用程式 ID 和應用程式密鑰。回呼 URL 為',
        ],
        'github' => [
            'enable' => '啟用 GitHub 登錄',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://github.com/settings/developers 創建新的應用程式並更新應用程式 ID 和應用程式密鑰。回呼 URL 為',
        ],
        'linkedin' => [
            'enable' => '啟用 LinkedIn 登錄',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://www.linkedin.com/developers/apps/new 創建新的應用程式並更新應用程式 ID 和應用程式密鑰。回呼 URL 為',
        ],
        'linkedin-openid' => [
            'enable' => '啟用使用 OpenID Connect 的 LinkedIn 登錄',
            'app_id' => '應用程式 ID',
            'app_secret' => '應用程式密鑰',
            'helper' => '請前往 https://www.linkedin.com/developers/apps/new 創建新的應用程式並更新應用程式 ID 和應用程式密鑰。回呼 URL 為',
        ],
        'enable' => '啟用社交登錄？',
        'style' => '樣式',
        'minimal' => '最小',
        'default' => '預設',
        'basic' => '基本',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID 連接',
    ],
    'menu' => '社交登錄',
    'description' => '查看並更新您的社交登入設定',
    'sign_in_with' => '使用提供者登入',
];
