<?php

return [
    'name' => 'ニュースレター',
    'newsletter_form' => 'ニュースレターフォーム',
    'description' => 'ニュースレター購読者の表示と削除',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'ニュースレター',
                'description' => 'ニュースレターの電子メール テンプレートを構成する',
                'to_admin' => [
                    'title' => '管理者にメールを送信',
                    'description' => '管理者にメールを送信するためのテンプレート',
                    'subject' => '新しいユーザーがニュースレターを購読しました',
                    'newsletter_email' => 'ニュースレターを購読しているユーザーのメールアドレス',
                ],
                'to_user' => [
                    'title' => 'ユーザーに電子メールを送信',
                    'description' => '購読者に電子メールを送信するためのテンプレート',
                    'subject' => '{{ site_title }}: サブスクリプションが確認されました。',
                    'newsletter_name' => 'ニュースレターを購読しているユーザーのフルネーム',
                    'newsletter_email' => 'ニュースレターを購読しているユーザーのメールアドレス',
                    'newsletter_unsubscribe_link' => 'ニュースレターの購読を解除するためのリンク',
                    'newsletter_unsubscribe_url' => 'ニュースレター購読解除用URL',
                ],
            ],
        ],
        'title' => 'ニュースレター',
        'panel_description' => 'ニュースレター設定の表示と更新',
        'description' => 'ニュースレターの設定 (誰かが Web サイトでニュースレターを登録すると、ニュースレター電子メ​​ールが SendGrid、Mailchimp に自動的に送信されます)。',
        'mailchimp_api_key' => 'Mailchimp API キー',
        'mailchimp_list_id' => 'Mailchimp リスト ID',
        'mailchimp_list' => 'メールチンパンジーのリスト',
        'sendgrid_api_key' => 'センドグリッド API キー',
        'sendgrid_list_id' => 'センドグリッドリストID',
        'sendgrid_list' => 'センドグリッド一覧',
        'enable_newsletter_contacts_list_api' => 'ニュースレターの連絡先リスト API を有効にしますか?',
    ],
    'statuses' => [
        'subscribed' => '購読しました',
        'unsubscribed' => '購読解除済み',
    ],
];
