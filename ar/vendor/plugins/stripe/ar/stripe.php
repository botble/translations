<?php

return [
    'webhook_secret' => 'سر الويب هوك',
    'webhook_setup_guide' => [
        'title' => 'دليل إعداد خطاف Webhook الشريطي',
        'description' => 'اتبع هذه الخطوات لإعداد خطاف ويب Stripe',
        'step_1_label' => 'قم بتسجيل الدخول إلى لوحة تحكم Stripe',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'حدد الحدث وقم بتكوين نقطة النهاية',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'أضف نقطة النهاية',
        'step_3_description' => 'انقر فوق الزر "إضافة نقطة نهاية" لحفظ خطاف الويب.',
        'step_4_label' => 'نسخ سر التوقيع',
        'step_4_description' => 'انسخ قيمة "سر التوقيع" من قسم "تفاصيل Webhook" وألصقها في الحقل "Stripe Webhook Secret" في قسم "Stripe" ضمن علامة التبويب "الدفع" في صفحة "الإعدادات".',
    ],
];
