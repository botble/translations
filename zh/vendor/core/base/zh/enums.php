<?php

return [
    'statuses' => [
        'draft' => '草稿',
        'pending' => '待辦',
        'published' => '已發表',
    ],
    'system_updater_steps' => [
        'download' => '下載更新文件',
        'update_files' => '更新系統檔案',
        'update_database' => '更新資料庫',
        'publish_core_assets' => '發布核心資產',
        'publish_packages_assets' => '發布方案',
        'clean_up' => '清理系統更新文件',
        'done' => '系統更新成功',
        'messages' => [
            'download' => '正在下載更新檔案...',
            'update_files' => '正在更新系統檔案...',
            'update_database' => '正在更新資料庫...',
            'publish_core_assets' => '發布核心資產...',
            'publish_packages_assets' => '發布方案',
            'clean_up' => '清理系統更新檔案...',
            'done' => '完畢！您的瀏覽器將在 30 秒後刷新。',
        ],
        'failed_messages' => [
            'download' => '無法下載更新文件',
            'update_files' => '無法更新系統文件',
            'update_database' => '無法更新資料庫',
            'publish_core_assets' => '無法發布核心資產',
            'publish_packages_assets' => '無法發布方案',
            'clean_up' => '無法清理系統更新文件',
        ],
        'success_messages' => [
            'download' => '更新文件下載成功',
            'update_files' => '更新系統檔案成功',
            'update_database' => '更新資料庫成功',
            'publish_core_assets' => '核心資產成功發布',
            'publish_packages_assets' => '成功發布包資源',
            'clean_up' => '成功清理系統更新檔案',
        ],
    ],
];
