<?php

return [
    'name' => '電子報',
    'newsletter_form' => '新聞通訊表格',
    'description' => '查看和刪除通訊訂閱者',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => '通訊',
                'description' => '配置電子報電子郵件模板',
                'to_admin' => [
                    'title' => '電郵發送給管理員',
                    'description' => '發送電子郵件給管理員的模板',
                    'subject' => '新用戶訂閱了你的通訊。',
                    'newsletter_email' => '訂閱電子報的用戶電子郵件',
                ],
                'to_user' => [
                    'title' => '電郵已發送給用戶',
                    'description' => '發送電子郵件給訂閱者的模板',
                    'subject' => '{{ site_title }}: 訂閱已確認！',
                    'newsletter_name' => '訂閱通訊的用戶全名',
                    'newsletter_email' => '訂閱電子報的用戶電郵',
                    'newsletter_unsubscribe_link' => '取消訂閱通訊的連結',
                    'newsletter_unsubscribe_url' => '取消訂閱電子報的網址',
                ],
            ],
        ],
        'title' => '通訊',
        'panel_description' => '查看和更新通訊設定',
        'description' => '網站上有人註冊電子報時，自動將電子報電郵發送到 SendGrid、Mailchimp 等的設置。',
        'mailchimp_api_key' => 'Mailchimp API 密鑰',
        'mailchimp_list_id' => 'Mailchimp 名單 ID',
        'mailchimp_list' => 'Mailchimp 名單',
        'sendgrid_api_key' => 'Sendgrid API 密鑰',
        'sendgrid_list_id' => 'Sendgrid 名單 ID',
        'sendgrid_list' => 'Sendgrid 名單',
        'enable_newsletter_contacts_list_api' => '啟用通訊稿聯絡人列表API？',
    ],
    'statuses' => [
        'subscribed' => '訂閱',
        'unsubscribed' => '取消訂閱',
    ],
];
