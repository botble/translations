<?php

return [
    'name' => 'Para çekme istekleri',
    'edit' => 'Para çekme isteğini düzenle',
    'statuses' => [
        'pending' => 'Bekliyor',
        'processing' => 'İşleniyor',
        'completed' => 'Tamamlandı',
        'canceled' => 'İptal edildi',
        'refused' => 'Reddedildi',
    ],
    'amount' => 'Tutar',
    'customer' => 'Müşteri',
    'vendor' => 'Bayi',
    'currency' => 'Para Birimi',
    'forms' => [
        'amount' => 'Tutar',
        'amount_placeholder' => 'Tutarı çekme isteğinde bulunmak istiyor musunuz?',
        'fee' => 'Ücret',
        'fee_helper' => 'Para çekerken bir ücret ödemeniz gerekir: :fee',
        'pending_status_helper' => 'Para çekme işlemini tamamlamak için, lütfen durumu işlem olarak güncelleyin ve ardından tamamlandı',
        'payment_channel' => 'Ödeme Kanalı',
        'payment_channel_placeholder' => 'Ödeme Kanalı',
        'transaction_id' => 'İşlem ID',
        'transaction_id_placeholder' => 'İşlem ID',
        'amount_with_balance' => 'Tutar (bakiye: :balance)',
    ],
    'new_withdrawal_request_notifications' => [
        'new_withdrawal_request' => 'Yeni para çekme isteği',
        'view' => 'Gör',
        'description' => ':customer para çekme isteği gönderdi.',
    ],
];
