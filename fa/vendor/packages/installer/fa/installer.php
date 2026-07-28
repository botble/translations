<?php

return [
    'title' => 'نصب',
    'next' => 'مرحله بعد',
    'forms' => [
        'errorTitle' => 'خطاهای زیر رخ داد:',
    ],
    'welcome' => [
        'title' => 'خوش آمدید',
        'message' => 'پیش از شروع، به برخی اطلاعات درباره پایگاه داده نیاز داریم. باید موارد زیر را پیش از ادامه بدانید.',
        'language' => 'زبان',
        'next' => 'بزن بریم',
    ],
    'requirements' => [
        'title' => 'نیازمندی‌های سرور',
        'php_version_required' => 'نسخه PHP :version موردنیاز است',
    ],
    'permissions' => [
        'next' => 'پیکربندی محیط',
    ],
    'environment' => [
        'wizard' => [
            'title' => 'تنظیمات محیط',
            'form' => [
                'name_required' => 'نام محیط الزامی است.',
                'app_name_label' => 'عنوان سایت',
                'app_url_label' => 'آدرس',
                'db_connection_label' => 'اتصال پایگاه داده',
                'db_connection_label_mysql' => 'MySQL',
                'db_host_label' => 'میزبان پایگاه داده',
                'db_port_label' => 'پورت پایگاه داده',
                'db_name_label' => 'نام پایگاه داده',
                'db_name_placeholder' => 'نام پایگاه داده',
                'db_username_label' => 'نام کاربری پایگاه داده',
                'db_username_placeholder' => 'نام کاربری پایگاه داده',
                'db_password_label' => 'رمز عبور پایگاه داده',
                'db_password_placeholder' => 'رمز عبور پایگاه داده',
                'buttons' => [
                    'install' => 'نصب',
                ],
                'db_host_helper' => 'اگر از Laravel Sail استفاده می‌کنید، فقط DB_HOST را به DB_HOST=mysql تغییر دهید. در برخی هاست‌ها DB_HOST می‌تواند به‌جای 127.0.0.1، localhost باشد',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'تنظیمات فایل .env شما ذخیره شد.',
        'errors' => 'امکان ذخیره فایل .env وجود ندارد، لطفاً آن را به‌صورت دستی ایجاد کنید.',
    ],
    'theme' => [
        'title' => 'انتخاب قالب',
        'message' => 'برای شخصی‌سازی ظاهر وب‌سایت خود، یک قالب انتخاب کنید. این انتخاب همچنین داده‌های نمونه متناسب با قالب انتخاب‌شده را درون‌ریزی می‌کند.',
    ],
    'theme_preset' => [
        'title' => 'انتخاب پیش‌تنظیم قالب',
        'message' => 'برای شخصی‌سازی ظاهر وب‌سایت خود، یک پیش‌تنظیم قالب انتخاب کنید. این انتخاب همچنین داده‌های نمونه متناسب با قالب انتخاب‌شده را درون‌ریزی می‌کند.',
    ],
    'createAccount' => [
        'title' => 'ایجاد حساب کاربری',
        'form' => [
            'first_name' => 'نام',
            'last_name' => 'نام خانوادگی',
            'username' => 'نام کاربری',
            'email' => 'ایمیل',
            'password' => 'رمز عبور',
            'password_confirmation' => 'تأیید رمز عبور',
            'create' => 'ایجاد',
        ],
    ],
    'license' => [
        'title' => 'فعال‌سازی مجوز',
        'skip' => 'فعلاً رد شو',
    ],
    'final' => [
        'pageTitle' => 'نصب پایان یافت',
        'title' => 'انجام شد',
        'message' => 'برنامه با موفقیت نصب شد.',
        'exit' => 'رفتن به داشبورد مدیریت',
    ],
    'install_step_title' => 'نصب - مرحله :step: :title',
];
