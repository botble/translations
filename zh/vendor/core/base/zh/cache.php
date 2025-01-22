<?php

return [
    'cache_management' => '缓存管理',
    'cache_management_description' => '清除缓存以使您的网站保持最新。',
    'cache_commands' => '清除缓存命令',
    'commands' => [
        'clear_cms_cache' => [
            'title' => '清除所有CMS缓存',
            'description' => '清除CMS缓存：数据库缓存、静态块... 当您在更新数据后未看到更改时，请运行此命令。',
            'success_msg' => '缓存已清理',
        ],
        'refresh_compiled_views' => [
            'title' => '刷新编译视图',
            'description' => '清除编译的视图以使视图保持最新。',
            'success_msg' => '缓存视图已刷新',
        ],
        'clear_config_cache' => [
            'title' => '清除配置缓存',
            'description' => '您在生产环境中更改某些内容时，可能需要刷新配置缓存。',
            'success_msg' => '配置缓存已清理',
        ],
        'clear_route_cache' => [
            'title' => '清除路由缓存',
            'description' => '清除缓存路由。',
            'success_msg' => '路由缓存已被清除',
        ],
        'clear_log' => [
            'title' => '清除日志',
            'description' => '清除系统日志文件',
            'success_msg' => '系统日志已被清理',
        ],
    ],
];
