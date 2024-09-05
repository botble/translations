<?php

return [
    'name' => '時事通訊',
    'newsletter_form' => '通訊形式',
    'description' => '查看並刪除訂閱電子報的用戶',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => '通訊',
                'description' => '配置新聞通訊Email模板',
                'to_admin' => [
                    'title' => 'Email發送給管理員',
                    'description' => '向管理員發送Email的模板',
                ],
                'to_user' => [
                    'title' => 'Email發送給用戶',
                    'description' => '用於向訂閱者發送Email的模板',
                ],
            ],
        ],
        'title' => '通訊',
        'panel_description' => '查看並更新電子報設定',
        'description' => '時事通訊設定（當有人在網站上註冊電子報時，請自動將電子報電子郵件傳送至 SendGrid、Mailchimp...）。',
        'mailchimp_api_key' => 'Mailchimp API 金鑰',
        'mailchimp_list_id' => 'Mailchimp 清單 ID',
        'mailchimp_list' => 'Mailchimp 清單',
        'sendgrid_api_key' => 'Sendgrid API 金鑰',
        'sendgrid_list_id' => 'Sendgrid 清單 ID',
        'sendgrid_list' => 'Sendgrid 清單',
        'enable_newsletter_contacts_list_api' => '啟用新聞通訊聯絡人清單 API 嗎？',
    ],
    'statuses' => [
        'subscribed' => '已訂閱',
        'unsubscribed' => '已取消訂閱',
    ],
];
