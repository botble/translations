<?php

return [
    'title' => '成员',
    'description' => '查看和更新​​会员设置',
    'verify_account_email' => '验证帐户的电子邮件？',
    'verify_account_email_helper' => '启用后，验证链接将发送到帐户的电子邮件，客户需要点击此链接验证电子邮件才能登录。需要在管理 -> 设置 -> 电子邮件中配置电子邮件以发送电子邮件验证。',
    'enabled_login' => '允许访客登录吗？',
    'enabled_login_helper' => '启用后，访问者如果有帐户就可以登录您的网站。',
    'enabled_registration' => '允许访客注册帐户吗？',
    'enabled_registration_helper' => '启用后，访问者可以在您的网站上注册帐户。',
    'email' => [
        'templates' => [
            'confirm_email' => [
                'title' => '确认电子邮件',
                'description' => '当用户注册帐户时向他们发送电子邮件以验证其电子邮件',
                'subject' => '确认电子邮件通知',
                'verify_link' => '验证电子邮件链接',
                'member_name' => '会员姓名',
            ],
            'password_reminder' => [
                'title' => '重置密码',
                'description' => '请求重置密码时向用户发送电子邮件',
                'subject' => '重置密码',
                'reset_link' => '重置密码链接',
            ],
            'new_pending_post' => [
                'title' => '新的待处理帖子',
                'description' => '创建新帖子时向管理员发送电子邮件',
                'subject' => '{{ post_author }} 在 {{ site_title }} 上等待发布新帖子',
                'post_author' => '帖子作者',
                'post_name' => '帖子名称',
                'post_url' => '发布网址',
            ],
        ],
    ],
];
