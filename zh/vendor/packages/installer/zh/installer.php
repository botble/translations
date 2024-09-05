<?php

return [
    'title' => '安裝',
    'next' => '下一步',
    'back' => '以前的',
    'finish' => '安裝',
    'installation' => '安裝',
    'forms' => [
        'errorTitle' => '出現以下錯誤：',
    ],
    'welcome' => [
        'title' => '歡迎',
        'message' => '在開始之前，我們需要一些有關資料庫的資訊。在繼續之前，您需要了解以下事項。',
        'language' => '語言',
        'next' => 'Let\'s go',
    ],
    'requirements' => [
        'title' => '伺服器要求',
        'next' => '檢查權限',
    ],
    'permissions' => [
        'next' => '配置環境',
    ],
    'environment' => [
        'success' => '您的 .env 檔案設定已儲存。',
        'wizard' => [
            'form' => [
                'app_url_label' => '網址',
                'name_required' => '需要環境名稱。',
                'app_name_label' => '網站標題',
                'app_name_placeholder' => '網站標題',
                'db_connection_label' => '資料庫連線',
                'db_host_label' => '資料庫主機',
                'db_host_placeholder' => '資料庫主機',
                'db_port_label' => '資料庫連接埠',
                'db_port_placeholder' => '資料庫連接埠',
                'db_name_label' => '資料庫名稱',
                'db_name_placeholder' => '資料庫名稱',
                'db_username_label' => '資料庫使用者名稱',
                'db_username_placeholder' => '資料庫使用者名稱',
                'db_password_label' => '資料庫密碼',
                'db_password_placeholder' => '資料庫密碼',
                'buttons' => [
                    'install' => '安裝',
                ],
                'db_host_helper' => '如果你使用 Laravel Sail，只要將 DB_HOST 改為 DB_HOST=mysql 即可。在某些主機上 DB_HOST 可以是 localhost 而不是 127.0.0.1',
            ],
            'title' => '環境設定',
        ],
        'errors' => '無法儲存 .env 檔案，請手動創建它。',
    ],
    'theme' => [
        'title' => '選擇主題',
        'message' => '選擇一個主題來個性化您網站的外觀。此選擇還將匯入根據所選主題自訂的範例資料。',
    ],
    'createAccount' => [
        'title' => '建立帳戶',
        'form' => [
            'first_name' => '名',
            'last_name' => '姓',
            'username' => '使用者名稱',
            'email' => 'Email',
            'password' => '密碼',
            'password_confirmation' => '密碼確認',
            'create' => '創建',
        ],
    ],
    'license' => [
        'title' => '啟動許可證',
        'skip' => '暫時跳過',
    ],
    'install' => '安裝',
    'final' => [
        'pageTitle' => '安裝完成',
        'title' => '完成',
        'message' => '應用程式已成功安裝。',
        'exit' => '前往管理儀表板',
    ],
    'install_success' => '安裝成功！',
    'install_step_title' => '安裝 - 步驟 :step: :title',
];
