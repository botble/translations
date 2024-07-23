<?php

return [
    'name' => 'Виведення коштів',
    'edit' => 'Редагувати виведення',
    'statuses' => [
        'pending' => 'Очікує',
        'processing' => 'Обробляється',
        'completed' => 'Завершено',
        'canceled' => 'Скасовано',
        'refused' => 'Відмовлено',
    ],
    'amount' => 'Сума',
    'customer' => 'Клієнт',
    'vendor' => 'Постачальник',
    'currency' => 'Валюта',
    'forms' => [
        'amount' => 'Сума',
        'amount_placeholder' => 'Сума, яку ви хочете вивести',
        'fee' => 'Комісія',
        'fee_helper' => 'Вам потрібно сплатити комісію при виведенні: :fee',
        'pending_status_helper' => 'Щоб завершити виведення, будь ласка, оновіть статус на обробляється, а потім завершено',
        'payment_channel' => 'Канал платежу',
        'payment_channel_placeholder' => 'Канал платежу',
        'transaction_id' => 'ID транзакції',
        'transaction_id_placeholder' => 'ID транзакції',
        'amount_with_balance' => 'Сума (баланс: :balance)',
    ],
    'new_withdrawal_request_notifications' => [
        'new_withdrawal_request' => 'Новий запит на виведення',
        'view' => 'Переглянути',
        'description' => ':customer подав запит на виведення.',
    ],
];
