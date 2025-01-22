<?php

return [
    'login' => [
        'fail' => '用户名或密码错误。',
        'username' => '电子邮件/用户名',
        'password' => '密码',
        'title' => '用户登录',
        'remember' => '记得我吗？',
        'login' => '登录',
        'placeholder' => [
            'username' => '输入您的用户名或电子邮件地址',
            'email' => '输入您的电子邮件地址',
            'password' => '输入您的密码',
        ],
        'success' => '登录成功！',
        'not_active' => '您的账户尚未激活！',
        'banned' => '该账户已被禁止。',
        'logout_success' => '注销成功！',
        'dont_have_account' => '您在此系统中没有账户，请联系管理员以获取更多信息！',
        'email' => '电子邮件',
    ],
    'forgot_password' => [
        'title' => '忘记密码',
        'message' => '<p>您是否忘记了密码？</p><p>请输入您的电子邮件账户。系统将发送一封带有激活链接的电子邮件以重置您的密码。</p>',
        'submit' => '提交',
    ],
    'reset' => [
        'new_password' => '新密码',
        'password_confirmation' => '确认新密码',
        'email' => '电子邮件',
        'title' => '重置您的密码',
        'update' => '更新',
        'wrong_token' => '此链接无效或已过期。请尝试再次使用重置表单。',
        'user_not_found' => '该用户名不存在。',
        'success' => '重置密码成功！',
        'fail' => '令牌无效，重置密码链接已过期！',
        'reset' => [
            'title' => '重置密码邮件',
        ],
        'send' => [
            'success' => '一封电子邮件已发送到您的邮箱。请检查并完成此操作。',
            'fail' => '无法在此时发送电子邮件。请稍后再试。',
        ],
        'new-password' => '新密码',
        'placeholder' => [
            'new_password' => '输入您的新密码',
            'new_password_confirmation' => '确认您的新密码',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => '重置密码邮件',
        ],
    ],
    'password_confirmation' => '密码确认',
    'failed' => '失败',
    'throttle' => '节流阀',
    'not_member' => '还不是会员吗？',
    'register_now' => '立即注册',
    'lost_your_password' => '找不到你的密码？',
    'login_title' => '管理员',
    'login_via_social' => '使用社交网络登录',
    'back_to_login' => '返回登录页面',
    'sign_in_below' => '在下面登录',
    'languages' => '语言',
    'reset_password' => '重置密码',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL电子邮件配置',
            'templates' => [
                'password_reminder' => [
                    'title' => '重置密码',
                    'description' => '当请求重置密码时向用户发送电子邮件',
                    'subject' => '重置密码',
                    'reset_link' => '重置密码链接',
                ],
            ],
        ],
    ],
];
