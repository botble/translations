<?php

return [
    'name' => 'النشرات الإخبارية',
    'newsletter_form' => 'نموذج النشرات الإخبارية',
    'description' => 'عرض وحذف المشتركين في النشرة الإخبارية',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'النشرة الإخبارية',
                'description' => 'تكوين قوالب البريد الإلكتروني للنشرة الإخبارية',
                'to_admin' => [
                    'title' => 'إرسال البريد الإلكتروني إلى المشرف',
                    'description' => 'نموذج لإرسال البريد الإلكتروني إلى المشرف',
                ],
                'to_user' => [
                    'title' => 'إرسال البريد الإلكتروني إلى المستخدم',
                    'description' => 'نموذج لإرسال البريد الإلكتروني للمشترك',
                ],
            ],
        ],
        'title' => 'النشرة الإخبارية',
        'description' => 'Settings for newsletter',
        'mailchimp_api_key' => 'مفتاح واجهة برمجة تطبيقات Mailchimp',
        'mailchimp_list_id' => 'معرف قائمة Mailchimp',
        'sendgrid_api_key' => 'مفتاح API Sendgrid',
        'sendgrid_list_id' => 'معرف قائمة Sendgrid',
        'panel_description' => 'عرض وتحديث إعدادات النشرة الإخبارية',
        'mailchimp_list' => 'قائمة ميل تشيمب',
        'sendgrid_list' => 'قائمة سيندغريد',
        'enable_newsletter_contacts_list_api' => 'هل تريد تمكين واجهة برمجة تطبيقات قائمة جهات اتصال الرسائل الإخبارية؟',
    ],
    'statuses' => [
        'subscribed' => 'مشترك',
        'unsubscribed' => 'غير مشترك',
    ],
];
