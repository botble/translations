<?php

return [
    'statuses' => [
        'draft' => '草稿',
        'pending' => '待处理',
        'published' => '发布',
    ],
    'system_updater_steps' => [
        'download' => '下载更新文件',
        'update_files' => '更新系统文件',
        'update_database' => '更新数据库',
        'publish_core_assets' => '发布核心资产',
        'publish_packages_assets' => '发布包资产',
        'clean_up' => '清理系统更新文件',
        'done' => '系统更新成功',
        'messages' => [
            'download' => '下载更新文件...',
            'update_files' => '更新系统文件...',
            'update_database' => '更新数据库...',
            'publish_core_assets' => '发布核心资产...',
            'publish_packages_assets' => '发布包资产...',
            'clean_up' => '清理系统更新文件...',
            'done' => '完成！您的浏览器将在30秒内刷新。',
        ],
        'failed_messages' => [
            'download' => '无法下载更新文件',
            'update_files' => '无法更新系统文件',
            'update_database' => '无法更新数据库',
            'publish_core_assets' => '无法发布核心资产',
            'publish_packages_assets' => '无法发布软件包资产',
            'clean_up' => '无法清理系统更新文件',
        ],
        'success_messages' => [
            'download' => '下载更新文件成功。',
            'update_files' => '成功更新系统文件。',
            'update_database' => '成功更新数据库。',
            'publish_core_assets' => '成功发布核心资产。',
            'publish_packages_assets' => '成功发布包资产。',
            'clean_up' => '成功清理了系统更新文件。',
        ],
    ],
];
