<?php

return [
    'webhook_secret' => 'Webhook 密钥',
    'webhook_setup_guide' => [
        'step_1_description' => '访问 :link 并在 "开发者" 标签的 "Webhooks" 部分点击 "添加端点" 按钮。',
        'step_2_description' => '选择“payment_intent.succeeded”事件，并在“端点 URL”字段中输入以下 URL：:url',
        'step_3_description' => '点击“添加端点”按钮以保存 webhook。',
        'step_3_label' => '添加端点',
        'step_4_description' => '复制“Webhook 详细信息”部分中的“签名密钥”值，并将其粘贴到“设置”页面“支付”选项卡中“Stripe”部分的“Stripe Webhook 密钥”字段中。',
        'step_4_label' => '复制签名密钥',
        'step_2_label' => '选择事件并配置端点',
        'title' => 'Stripe Webhook 设置指南',
        'description' => '按照以下步骤设置 Stripe webhook',
        'step_1_label' => '登录到 Stripe 控制面板',
    ],
];
