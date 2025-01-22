<?php

return [
    'title' => '安装',
    'next' => '下一步',
    'back' => '上一个',
    'finish' => '安装',
    'installation' => '安装',
    'forms' => [
        'errorTitle' => '发生了以下错误：',
    ],
    'welcome' => [
        'title' => '欢迎',
        'message' => '在开始之前，我们需要一些关于数据库的信息。在继续之前，您需要了解以下事项。',
        'language' => '语言',
        'next' => '我们走吧',
    ],
    'requirements' => [
        'title' => '服务器要求',
        'next' => '检查权限',
    ],
    'permissions' => [
        'next' => '配置环境',
    ],
    'environment' => [
        'success' => '您的 .env 文件设置已保存。',
        'wizard' => [
            'form' => [
                'app_url_label' => '网址',
                'name_required' => '环境名称是必需的。',
                'app_name_label' => '网站标题',
                'app_name_placeholder' => '网站标题',
                'db_connection_label' => '数据库连接',
                'db_host_label' => '数据库主机',
                'db_host_placeholder' => '数据库主机',
                'db_port_label' => '数据库端口',
                'db_port_placeholder' => '数据库端口',
                'db_name_label' => '数据库名称',
                'db_name_placeholder' => '数据库名称',
                'db_username_label' => '数据库用户名',
                'db_username_placeholder' => '数据库用户名',
                'db_password_label' => '数据库密码',
                'db_password_placeholder' => '数据库密码',
                'buttons' => [
                    'install' => '安装',
                ],
                'db_host_helper' => '如果您使用 Laravel Sail，只需将 DB_HOST 更改为 DB_HOST=mysql。在某些托管服务中，DB_HOST 可以是 localhost 而不是 127.0.0.1。',
                'app_url_placeholder' => '网址',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
            'title' => '环境设置',
        ],
        'errors' => '无法保存 .env 文件，请手动创建它。',
    ],
    'theme' => [
        'title' => '选择主题',
        'message' => '选择一个主题以个性化您网站的外观。此选择还将导入与所选主题相匹配的示例数据。',
    ],
    'createAccount' => [
        'title' => '创建账户',
        'form' => [
            'first_name' => '名字',
            'last_name' => '姓',
            'username' => '用户名',
            'email' => '电子邮件',
            'password' => '密码',
            'password_confirmation' => '密码确认',
            'create' => '创建',
        ],
    ],
    'license' => [
        'title' => '激活许可证',
        'skip' => '暂时跳过',
    ],
    'install' => '安装',
    'final' => [
        'pageTitle' => '安装完成',
        'title' => '完成',
        'message' => '应用程序已成功安装。',
        'exit' => '去管理仪表板',
    ],
    'install_success' => '安装成功！',
    'install_step_title' => '安装 - 步骤 :step: :title',
];
