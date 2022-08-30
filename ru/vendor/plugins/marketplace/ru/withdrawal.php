<?php

return [
    'name' => 'Вывод средств',
    'edit' => 'Редактирование вывода',
    'statuses' => [
        'pending' => 'В ожидании',
        'processing' => 'Обработка',
        'completed' => 'Завершено',
        'canceled' => 'Отменено',
        'refused' => 'Отказано',
    ],
    'amount' => 'Сумма',
    'customer' => 'Клиент',
    'vendor' => 'Поставщик',
    'currency' => 'Валюта',
    'forms' => [
        'amount' => 'Сумма',
        'amount_placeholder' => 'Сумма, которую вы хотите снять',
        'fee' => 'Плата за услуги',
        'fee_helper' => 'Вы должны заплатить комиссию при снятии денег: :fee',
        'pending_status_helper' => 'Чтобы завершить снятие средств, пожалуйста, обновите статус: обработка завершена',
        'payment_channel' => 'Канал оплаты',
        'payment_channel_placeholder' => 'Канал оплаты',
        'transaction_id' => 'Транзакция ID',
        'transaction_id_placeholder' => 'Транзакция ID',
        'amount_with_balance' => 'Сумма (баланс: :balance)',
    ],
];
