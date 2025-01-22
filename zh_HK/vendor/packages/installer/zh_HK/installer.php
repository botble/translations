<?php

return [
    'title' => '安裝',
    'next' => '下一步',
    'back' => '上一頁',
    'finish' => '安裝',
    'installation' => '安裝',
    'forms' => [
        'errorTitle' => '發生了以下錯誤：',
    ],
    'welcome' => [
        'title' => '歡迎',
        'message' => '在開始之前，我們需要一些有關數據庫的信息。在繼續之前，你需要知道以下項目。',
        'language' => '語言',
        'next' => '我們走吧',
    ],
    'requirements' => [
        'title' => '伺服器要求',
        'next' => '檢查權限',
    ],
    'permissions' => [
        'next' => '配置環境',
    ],
    'environment' => [
        'wizard' => [
            'title' => '環境設置',
            'form' => [
                'name_required' => '需要環境名稱。',
                'app_name_label' => '網站標題',
                'app_name_placeholder' => '網站標題',
                'app_url_label' => '網址',
                'app_url_placeholder' => '網址',
                'db_connection_label' => '數據庫連接',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => '數據庫主機',
                'db_host_placeholder' => '數據庫主機',
                'db_port_label' => '數據庫端口',
                'db_port_placeholder' => '數據庫端口',
                'db_name_label' => '數據庫名稱',
                'db_name_placeholder' => '數據庫名稱',
                'db_username_label' => '數據庫用戶名',
                'db_username_placeholder' => '數據庫用戶名',
                'db_password_label' => '數據庫密碼',
                'db_password_placeholder' => '數據庫密碼',
                'buttons' => [
                    'install' => '安裝',
                ],
                'db_host_helper' => '如果你使用 Laravel Sail，只需將 DB_HOST 更改為 DB_HOST=mysql。在某些主機上，DB_HOST 可以是 localhost 而不是 127.0.0.1。',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => '你的 .env 文件設置已經保存。',
        'errors' => '無法保存 .env 文件，請手動創建它。',
    ],
    'theme' => [
        'title' => '選擇主題',
        'message' => '選擇一個主題來個性化你網站的外觀。這個選擇還會導入針對所選主題的示例數據。',
    ],
    'createAccount' => [
        'title' => '創建帳戶',
        'form' => [
            'first_name' => '名字',
            'last_name' => '姓',
            'username' => '用戶名',
            'email' => '電郵',
            'password' => '密碼',
            'password_confirmation' => '密碼確認',
            'create' => '創建',
        ],
    ],
    'license' => [
        'title' => '啟用許可證',
        'skip' => '暫時跳過',
    ],
    'install' => '安裝',
    'final' => [
        'pageTitle' => '安裝完成',
        'title' => '完成',
        'message' => '應用程式已成功安裝。',
        'exit' => '去管理儀表板',
    ],
    'install_success' => '安裝成功！',
    'install_step_title' => '安裝 - 步驟 :step: :title',
];
