<?php

return [
    'no_select' => '請至少選擇一筆記錄來執行此操作！',
    'cannot_find_user' => '無法找到指定用戶',
    'supper_revoked' => '超級使用者存取權限被撤銷',
    'cannot_revoke_yourself' => '無法自行撤銷超級使用者存取權限！',
    'cant_remove_supper' => '您無權刪除該超級用戶',
    'cant_find_user_with_email' => '無法找到具有指定電子郵件地址的用戶',
    'supper_granted' => '授予超級使用者存取權限',
    'delete_log_success' => '刪除日誌檔成功！',
    'get_member_success' => '會員清單檢索成功',
    'error_occur' => '出現以下錯誤',
    'user_management' => '使用者管理',
    'user_management_description' => '管理用戶。',
    'role_and_permission' => '角色和權限',
    'role_and_permission_description' => '管理可用角色。',
    'user' => [
        'list_super' => '列出超級用戶',
        'email' => 'Email',
        'last_login' => '上次登入',
        'username' => '使用者名稱',
        'add_user' => '新增超級用戶',
        'cancel' => '刪除',
        'create' => '創建',
    ],
    'options' => [
        'features' => '功能存取控制',
        'feature_description' => '管理可用的',
        'manage_super' => '超級用戶管理',
        'manage_super_description' => '新增/刪除超級用戶',
        'info' => '系統資訊',
        'info_description' => '有關目前系統配置的所有資訊',
    ],
    'info' => [
        'title' => '系統資訊',
        'description' => '有關目前系統配置的所有資訊',
        'cache' => '緩存',
        'locale' => '活動區域設置',
        'environment' => '環境',
    ],
    'disabled_in_demo_mode' => '您無法在演示模式下執行此操作！',
    'report_description' => '請分享此資訊以進行故障排除',
    'get_system_report' => '取得系統報告',
    'system_environment' => '系統環境',
    'framework_version' => '框架版本',
    'timezone' => '時區',
    'debug_mode' => '偵錯模式',
    'debug_mode_off' => '偵錯模式關閉',
    'storage_dir_writable' => '儲存目錄可寫',
    'cache_dir_writable' => '緩存目錄可寫',
    'app_size' => 'App Size',
    'server_environment' => '伺服器環境',
    'php_version' => 'PHP版本',
    'php_version_error' => 'PHP 必須 >= :version',
    'server_software' => '伺服器軟體',
    'server_os' => '伺服器 OS',
    'database' => '資料庫',
    'ssl_installed' => 'SSL 已安裝',
    'cache_driver' => '緩存驅動',
    'session_driver' => '工作階段驅動',
    'queue_connection' => '隊列連接',
    'mbstring_ext' => '多媒體分機',
    'openssl_ext' => 'OpenSSL 擴充',
    'pdo_ext' => 'PDO 擴充',
    'curl_ext' => 'CURL 擴充',
    'exif_ext' => 'Exif 擴充',
    'file_info_ext' => '文件資料擴充',
    'tokenizer_ext' => '分詞器擴充',
    'extra_stats' => '額外統計數據',
    'installed_packages' => '安裝的軟體包及其版本號',
    'extra_information' => '額外資訊',
    'copy_report' => '複製報告',
    'package_name' => '方案名稱',
    'dependency_name' => '類似案件',
    'server_ip' => '伺服器 IP',
    'version' => '版本',
    'cms_version' => 'CMS 版本',
    'imagick_or_gd_ext' => 'Imagick/GD 分機',
    'updater' => '系統更新程式',
    'zip' => '郵編擴充',
    'iconv' => 'Iconv 擴充',
    'memory_limit' => '記憶體限制',
    'max_execution_time' => '最大執行時間（秒）',
    'allow_url_fopen_enabled' => '啟用allow_url_fopen',
    'cleanup' => [
        'title' => '清理系統',
        'description' => '清理資料庫中未使用的數據',
        'table' => [
            'name' => '列表名稱',
            'count' => '記錄',
        ],
        'backup_alert' => '清理前請備份您的資料庫和腳本文件，它將清除資料庫中的資料。',
        'messenger_choose_without_table' => '請選擇忽略不想清理的列表',
        'messenger_confirm_cleanup' => '您確定要進行資料庫清理操作，它會清除資料庫中的資料嗎？',
        'submit_button' => '清理',
        'success_message' => '資料清理成功',
        'not_enabled_yet' => '此功能尚未啟用。 <br />請在.env中新增：<code>CMS_ENABLED_CLEANUP_DATABASE=true</code>以啟用此功能！',
    ],
];
