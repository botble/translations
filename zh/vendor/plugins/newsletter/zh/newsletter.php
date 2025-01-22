<?php

return [
    'name' => '新闻通讯',
    'newsletter_form' => '新闻通讯表格',
    'description' => '查看和删除新闻通讯订阅者',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => '通讯',
                'description' => '配置新闻通讯电子邮件模板',
                'to_admin' => [
                    'title' => '发送电子邮件给管理员',
                    'description' => '发送给管理员的电子邮件模板',
                    'subject' => '新用户订阅了您的新闻通讯',
                    'newsletter_email' => '订阅新闻通讯的用户电子邮件',
                ],
                'to_user' => [
                    'title' => '发送电子邮件给用户',
                    'description' => '发送给订阅者的电子邮件模板',
                    'subject' => '{{ site_title }}: 订阅已确认！',
                    'newsletter_name' => '订阅新闻通讯的用户全名',
                    'newsletter_email' => '订阅新闻通讯的用户电子邮件',
                    'newsletter_unsubscribe_link' => '退订新闻通讯的链接',
                    'newsletter_unsubscribe_url' => '退订新闻通讯的链接',
                ],
            ],
        ],
        'title' => '通讯',
        'panel_description' => '查看和更新新闻通讯设置',
        'description' => '网站上有人注册新闻通讯时，自动将新闻通讯电子邮件发送到 SendGrid、Mailchimp 等的设置。',
        'mailchimp_api_key' => 'Mailchimp API 密钥',
        'mailchimp_list_id' => 'Mailchimp 列表 ID',
        'mailchimp_list' => 'Mailchimp 列表',
        'sendgrid_api_key' => 'Sendgrid API 密钥',
        'sendgrid_list_id' => 'Sendgrid 列表 ID',
        'sendgrid_list' => 'Sendgrid 列表',
        'enable_newsletter_contacts_list_api' => '启用通讯稿联系人列表API？',
    ],
    'statuses' => [
        'subscribed' => '已订阅',
        'unsubscribed' => '退订',
    ],
];
