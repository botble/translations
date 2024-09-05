<?php

return [
    'webhook_secret' => 'Webhook 密碼',
    'webhook_setup_guide' => [
        'step_1_description' => '存取 :link 並點擊「開發人員」標籤的「Webhooks」部分中的「新增端點」按鈕。',
        'step_2_description' => '選擇 “付款意向成功” 事件，並在 “端點網址” 欄位中輸入以下網址：',
        'step_3_description' => '點擊 “新增端點” 按鈕以保存 Webhook。',
        'step_3_label' => '新增端點',
        'step_4_description' => '從 “Webhook 詳細資料” 部分複製 “簽名密鑰” 的值，並將其粘貼到 “設定” 頁面中 “付款” 標籤下的 “Stripe” 部分中的 “Stripe Webhook 密鑰” 欄位。',
        'step_4_label' => '複製簽名密鑰',
        'step_2_label' => '選擇事件並配置端點',
        'title' => 'Stripe Webhook 設置指南',
        'description' => '按照這些步驟設置 Stripe Webhook',
        'step_1_label' => '登錄到 Stripe 儀表板',
    ],
];
