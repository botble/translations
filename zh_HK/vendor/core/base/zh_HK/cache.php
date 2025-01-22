<?php

return [
    'cache_management' => '快取管理',
    'cache_management_description' => '清除快取以使您的網站保持最新。',
    'cache_commands' => '清除快取命令',
    'commands' => [
        'clear_cms_cache' => [
            'title' => '清除所有CMS快取',
            'description' => '清除CMS緩存：數據庫緩存、靜態區塊……當你在更新數據後看不到變更時，運行這個命令。',
            'success_msg' => '快取已清除',
        ],
        'refresh_compiled_views' => [
            'title' => '刷新已編譯的視圖',
            'description' => '清除已編譯的視圖以使視圖保持最新。',
            'success_msg' => '快取視圖已更新',
        ],
        'clear_config_cache' => [
            'title' => '清除配置快取',
            'description' => '你可能需要在生產環境中更改某些東西時刷新配置緩存。',
            'success_msg' => '配置快取已清除',
        ],
        'clear_route_cache' => [
            'title' => '清除路由緩存',
            'description' => '清除快取路由。',
            'success_msg' => '路由緩存已經清理。',
        ],
        'clear_log' => [
            'title' => '清除日誌',
            'description' => '清除系統日誌文件',
            'success_msg' => '系統日誌已經清理。',
        ],
    ],
];
