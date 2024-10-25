<?php

return [
    'stripe_account_id' => 'ID da conta Stripe',
    'go_to_dashboard' => 'Vá para o Painel Expresso',
    'connect' => [
        'label' => 'Conecte-se com Stripe',
        'description' => 'Conecte sua conta Stripe para receber pagamentos.',
    ],
    'disconnect' => [
        'label' => 'Desconectar faixa',
        'confirm' => 'Tem certeza de que deseja desconectar sua conta Stripe?',
    ],
    'notifications' => [
        'connected' => 'Sua conta Stripe foi conectada.',
        'disconnected' => 'Sua conta Stripe foi desconectada.',
        'now_active' => 'Sua conta Stripe agora está ativa.',
    ],
    'withdrawal' => [
        'payout_info' => 'Your payout will be automatically transferred to your Stripe account with ID: :stripe_account_id.',
    ],
];
