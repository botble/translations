<?php

return [
    'title' => 'تثبيت',
    'next' => 'الخطوة التالية',
    'back' => 'سابق',
    'finish' => 'ثَبَّتَ',
    'installation' => 'تثبيت',
    'forms' => [
        'errorTitle' => 'وقعت الأخطاء التالية:',
    ],
    'welcome' => [
        'title' => 'مرحباً',
        'message' => 'قبل البدء، نحتاج إلى بعض المعلومات عن قاعدة البيانات. سوف تحتاج إلى معرفة العناصر التالية قبل المتابعة.',
        'language' => 'لغة',
        'next' => 'دعنا نذهب',
    ],
    'requirements' => [
        'title' => 'متطلبات الخادم',
        'next' => 'تحقق من الأذونات',
    ],
    'permissions' => [
        'next' => 'تكوين البيئة',
    ],
    'environment' => [
        'wizard' => [
            'title' => 'إعدادات البيئة',
            'form' => [
                'name_required' => 'مطلوب اسم البيئة.',
                'app_name_label' => 'عنوان الموقع',
                'app_name_placeholder' => 'عنوان الموقع',
                'app_url_label' => 'عنوان URL',
                'app_url_placeholder' => 'عنوان URL',
                'db_connection_label' => 'اتصال قاعدة البيانات',
                'db_connection_label_mysql' => 'ماي إس كيو إل',
                'db_connection_label_sqlite' => 'سكليتي',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'مضيف قاعدة البيانات',
                'db_host_placeholder' => 'مضيف قاعدة البيانات',
                'db_port_label' => 'منفذ قاعدة البيانات',
                'db_port_placeholder' => 'منفذ قاعدة البيانات',
                'db_name_label' => 'اسم قاعدة البيانات',
                'db_name_placeholder' => 'اسم قاعدة البيانات',
                'db_username_label' => 'اسم مستخدم قاعدة البيانات',
                'db_username_placeholder' => 'اسم مستخدم قاعدة البيانات',
                'db_password_label' => 'كلمة مرور قاعدة البيانات',
                'db_password_placeholder' => 'كلمة مرور قاعدة البيانات',
                'buttons' => [
                    'install' => 'ثَبَّتَ',
                ],
                'db_host_helper' => 'إذا كنت تستخدم Laravel Sail، فما عليك سوى تغيير DB_HOST إلى DB_HOST=mysql. في بعض الاستضافة، يمكن أن يكون DB_HOST مضيفًا محليًا بدلاً من 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'ماي إس كيو إل',
                    'sqlite' => 'سكليتي',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'تم حفظ إعدادات ملف .env الخاص بك.',
        'errors' => 'غير قادر على حفظ ملف .env، يرجى إنشائه يدويًا.',
    ],
    'theme' => [
        'title' => 'اختيار موضوع',
        'message' => 'اختر موضوعًا لتخصيص مظهر موقع الويب الخاص بك. سيؤدي هذا التحديد أيضًا إلى استيراد بيانات نموذجية مخصصة للموضوع المختار.',
    ],
    'createAccount' => [
        'title' => 'إنشاء حساب',
        'form' => [
            'first_name' => 'الاسم الأول',
            'last_name' => 'اسم العائلة',
            'username' => 'اسم المستخدم',
            'email' => 'بريد إلكتروني',
            'password' => 'كلمة المرور',
            'password_confirmation' => 'تأكيد كلمة المرور',
            'create' => 'يخلق',
        ],
    ],
    'license' => [
        'title' => 'تفعيل الترخيص',
        'skip' => 'تخطي في الوقت الراهن',
    ],
    'install' => 'ثَبَّتَ',
    'final' => [
        'pageTitle' => 'انتهى التثبيت',
        'title' => 'منتهي',
        'message' => 'تم تثبيت التطبيق بنجاح.',
        'exit' => 'انتقل إلى لوحة تحكم المشرف',
    ],
    'install_success' => 'تم التثبيت بنجاح!',
    'install_step_title' => 'Installation - Step :step: :title',
];
