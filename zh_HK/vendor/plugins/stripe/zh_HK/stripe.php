<?php

return [
    'webhook_secret' => 'Webhook 密鑰',
    'webhook_setup_guide' => [
        'title' => 'Stripe Webhook 設定指南',
        'description' => '跟隨這些步驟來設置 Stripe webhook',
        'step_1_label' => '登入 Stripe 控制面板',
        'step_1_description' => '訪問 :link，然後在「開發者」選項卡的「Webhooks」部分中點擊「添加端點」按鈕。',
        'step_2_label' => '選擇事件並配置端點',
        'step_2_description' => '選擇 "payment_intent.succeeded" 事件，並在 "Endpoint URL" 欄位中輸入以下網址：:url',
        'step_3_label' => '添加端點',
        'step_3_description' => '點擊「添加端點」按鈕以保存網絡hooks。',
        'step_4_label' => '複製簽名密鑰',
        'step_4_description' => '將「Webhook 詳情」部分的「Signing Secret」值複製，然後粘貼到「設置」頁面「付款」選項卡的「Stripe」部分的「Stripe Webhook Secret」字段中。',
    ],
];
