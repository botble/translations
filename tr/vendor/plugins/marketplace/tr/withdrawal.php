<?php

return [
    'name' => 'Withdrawals',
    'edit' => 'Edit withdrawal',
    'statuses' => [
        'pending' => 'Pending',
        'processing' => 'Processing',
        'completed' => 'Completed',
        'canceled' => 'Canceled',
        'refused' => 'Refused',
    ],
    'amount' => 'Amount',
    'customer' => 'Customer',
    'vendor' => 'Vendor',
    'currency' => 'Currency',
    'forms' => [
        'amount' => 'Amount',
        'amount_placeholder' => 'Amount you want to withdrawal',
        'fee' => 'Fee',
        'fee_helper' => 'You have to pay a fee when withdrawing: :fee',
        'pending_status_helper' => 'To complete withdrawal, please update status as processing then completed',
        'payment_channel' => 'Payment Channel',
        'payment_channel_placeholder' => 'Payment Channel',
        'transaction_id' => 'Transaction ID',
        'transaction_id_placeholder' => 'Transaction ID',
    ],
];
