<?php

return [
    'name' => 'Onaylanmayan bayiler',
    'verify' => 'Bayiyi onayla ":name"',
    'forms' => [
        'email' => 'E-posta',
        'store_name' => 'Mağaza adı',
        'store_phone' => 'Mağaza telefonu',
        'vendor_phone' => 'Telefon',
        'verify_vendor' => 'Bayi onay durumu',
        'registered_at' => 'Kayıt oldu',
    ],
    'approve' => 'Onayla',
    'approve_vendor_confirmation' => 'Bayi bilgilerini onayla',
    'approve_vendor_confirmation_description' => ':vendor \'nin bu sitede satış yapmasını gerçekten onaylamak istediğinizden emin misiniz?',
    'vendor_approval_notification' => 'Bu satıcının bu sitede satış yapmasını onaylamak istiyor musunuz? :approve_link',
    'new_vendor_notifications' => [
        'new_vendor' => 'Yeni bayi',
        'view' => 'Gör',
        'description' => ':customer kaydoldu ancak onaylanmadı.',
    ],
];
