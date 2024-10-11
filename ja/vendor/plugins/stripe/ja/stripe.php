<?php

return [
    'webhook_secret' => 'Webhook シークレット',
    'webhook_setup_guide' => [
        'title' => 'Stripe Webhook セットアップガイド',
        'description' => 'Stripe Webhook を設定するには、次の手順に従います。',
        'step_1_label' => 'Stripe ダッシュボードにログインする',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'イベントを選択してエンドポイントを構成する',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'エンドポイントの追加',
        'step_3_description' => '「エンドポイントの追加」ボタンをクリックして Webhook を保存します。',
        'step_4_label' => '署名シークレットをコピーする',
        'step_4_description' => '「Webhook の詳細」セクションから「Signing Secret」の値をコピーし、「設定」ページの「Payment」タブの「Stripe」セクションにある「Stripe Webhook Secret」フィールドに貼り付けます。',
    ],
];
