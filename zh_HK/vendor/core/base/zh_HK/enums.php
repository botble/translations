<?php

return [
    'statuses' => [
        'draft' => '草稿',
        'pending' => '待處理',
        'published' => '已發佈',
    ],
    'system_updater_steps' => [
        'download' => '下載更新檔案',
        'update_files' => '更新系統文件',
        'update_database' => '更新數據庫',
        'publish_core_assets' => '發佈核心資產',
        'publish_packages_assets' => '發佈套件資產',
        'clean_up' => '清理系統更新文件',
        'done' => '系統已成功更新',
        'messages' => [
            'download' => '下載更新文件...',
            'update_files' => '更新系統文件...',
            'update_database' => '更新數據庫...',
            'publish_core_assets' => '發佈核心資產...',
            'publish_packages_assets' => '發佈套件資產...',
            'clean_up' => '清理系統更新文件...',
            'done' => '完成！你的瀏覽器將在30秒內刷新。',
        ],
        'failed_messages' => [
            'download' => '無法下載更新文件',
            'update_files' => '無法更新系統文件',
            'update_database' => '無法更新數據庫',
            'publish_core_assets' => '無法發佈核心資產',
            'publish_packages_assets' => '無法發佈套件資產',
            'clean_up' => '無法清理系統更新文件',
        ],
        'success_messages' => [
            'download' => '成功下載更新文件。',
            'update_files' => '成功更新系統文件。',
            'update_database' => '成功更新數據庫。',
            'publish_core_assets' => '成功發佈核心資產。',
            'publish_packages_assets' => '成功發佈套件資產。',
            'clean_up' => '成功清理系統更新文件。',
        ],
    ],
];
