<?php

return [
    'cache_management' => '緩存管理',
    'cache_management_description' => '清除緩存以使您的網站保持最新狀態。',
    'cache_commands' => '清除緩存命令',
    'commands' => [
        'clear_cms_cache' => [
            'title' => '清除所有 CMS 緩存',
            'description' => '清除 CMS 緩存：資料庫緩存、靜態區塊...更新資料後看不到更改時運行此命令。',
            'success_msg' => '緩存已刪除',
        ],
        'refresh_compiled_views' => [
            'title' => '刷新編譯檢視',
            'description' => '清除編譯的圖示以使圖示保持最新。',
            'success_msg' => '緩存圖示已刷新',
        ],
        'clear_config_cache' => [
            'title' => '清除配置緩存',
            'description' => '當您在生產環境中變更某些內容時，您可能需要刷新配置緩存。',
            'success_msg' => '配置緩存已清理',
        ],
        'clear_route_cache' => [
            'title' => '清除路由器緩存',
            'description' => '清除緩存',
            'success_msg' => '路由緩存已被清理',
        ],
        'clear_log' => [
            'title' => '清除日誌',
            'description' => '清除系統日誌文件',
            'success_msg' => '系統日誌已清理',
        ],
    ],
];
