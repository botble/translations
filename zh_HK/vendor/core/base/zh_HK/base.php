<?php

return [
    'yes' => '係',
    'no' => '唔係',
    'is_default' => '係咪默認？',
    'proc_close_disabled_error' => 'Function proc_close() 已被禁用。請聯繫您的主機提供商以啟用它。或者您可以在 .env 中添加: CAN_EXECUTE_COMMAND=false 來禁用此功能。',
    'email_template' => [
        'header' => '電郵模板標題',
        'footer' => '電郵模板底部',
        'site_title' => '網站標題',
        'site_url' => '網站網址',
        'site_logo' => '網站標誌',
        'site_email' => '網站管理員電郵',
        'site_copyright' => '網站版權',
        'site_social_links' => '社交網站連結（數據類型：數組）',
        'date_time' => '目前日期和時間',
        'date_year' => '目前年份',
        'settings' => '設定值',
        'email_css' => '電郵 CSS',
        'variable' => '變量',
        'preview' => '預覽',
        'icon_variables' => '圖標變量',
        'usage' => '用法：',
        'icon_variable_usage_description' => '你可以複製變量 :variable 然後粘貼：',
        'add_new_icons' => '新增圖標：',
        'add_more_icon_description' => '你可以通過將更多圖標上傳到以下路徑（支持PNG、JPEG、JPG和GIF格式）來添加更多圖標：:path',
        'missing_icons' => '缺少圖標',
        'missing_icons_description' => '以下圖標在路徑中缺失：:to，請將所有圖標文件從 :from 複製到 :to。',
        'twig' => [
            'tag' => [
                'apply' => 'apply 標籤讓你可以應用 Twig 過濾器',
                'for' => '逐個遍歷序列中的每個項目',
                'if' => 'Twig 嘅 if 語句可以同 PHP 嘅 if 語句相比。',
            ],
        ],
    ],
    'change_image' => '更改圖片',
    'delete_image' => '刪除圖片',
    'preview_image' => '預覽圖片',
    'image' => '影像',
    'using_button' => '使用按鈕',
    'select_image' => '選擇圖片',
    'click_here' => '點擊這裡',
    'to_add_more_image' => '添加更多圖片',
    'add_image' => '添加圖片',
    'tools' => '工具',
    'close' => '關閉',
    'panel' => [
        'others' => '其他人',
        'system' => '系統',
        'manage_description' => '管理 :name',
    ],
    'global_search' => [
        'title' => '搜尋',
        'search' => '搜尋',
        'clear' => '清楚',
        'no_result' => '未找到結果',
        'to_select' => '選擇',
        'to_navigate' => '導航',
        'to_close' => '關閉',
    ],
    'validation' => [
        'email_in_blacklist' => ':attribute 已在黑名單中。請使用另一個電子郵件地址。',
        'domain' => ':attribute 必須是一個有效的域名。',
    ],
    'showing_records' => '顯示 :from 至 :to 的 :total 筆記錄',
    'copy' => '複製',
    'copied' => '複製',
];
