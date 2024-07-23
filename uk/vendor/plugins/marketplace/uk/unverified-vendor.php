<?php

return [
    'name' => 'Непідтверджені постачальники',
    'verify' => 'Підтвердити постачальника ":name"',
    'forms' => [
        'email' => 'Електронна пошта',
        'store_name' => 'Назва магазину',
        'store_phone' => 'Телефон магазину',
        'vendor_phone' => 'Телефон',
        'verify_vendor' => 'Підтвердити постачальника',
        'registered_at' => 'Зареєстровано о',
        'certificate' => 'Сертифікат',
        'government_id' => 'Державне посвідчення особи',
    ],
    'view_certificate' => 'Переглянути сертифікат',
    'view_government_id' => 'Переглянути офіційне посвідчення особи',
    'approve' => 'Затвердити',
    'reject' => 'Відхиляти',
    'approve_vendor_confirmation' => 'Підтвердження затвердження постачальника',
    'approve_vendor_confirmation_description' => 'Ви впевнені, що дійсно хочете затвердити :vendor для продажу на цьому сайті?',
    'reject_vendor_confirmation' => 'Відхилити підтвердження постачальника',
    'reject_vendor_confirmation_description' => 'Are you sure you really want to reject :vendor for selling on this site?',
    'new_vendor_notifications' => [
        'new_vendor' => 'Новий постачальник',
        'view' => 'Переглянути',
        'description' => ':customer зареєстрований, але не підтверджений.',
    ],
    'vendor_approval_notification' => 'Ви хочете затвердити цього постачальника для продажу на цьому сайті? :approve_link',
];
