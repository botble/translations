<?php

return [
    'stripe_account_id' => 'ストライプアカウントID',
    'go_to_dashboard' => 'Express ダッシュボードに移動',
    'connect' => [
        'label' => 'Stripe で接続する',
        'description' => 'Stripe アカウントに接続して支払いを受け取ります。',
    ],
    'disconnect' => [
        'label' => 'ストライプの切断',
        'confirm' => 'Stripe アカウントを切断してもよろしいですか?',
    ],
    'notifications' => [
        'connected' => 'Stripe アカウントが接続されました。',
        'disconnected' => 'Stripe アカウントが切断されました。',
        'now_active' => 'Stripe アカウントがアクティブになりました。',
    ],
    'withdrawal' => [
        'payout_info' => 'Your payout will be automatically transferred to your Stripe account with ID: :stripe_account_id.',
    ],
];
