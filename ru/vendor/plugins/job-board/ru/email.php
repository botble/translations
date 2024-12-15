<?php

return [
    'templates' => [
        'admin-new-job-application' => [
            'title' => 'New job application (to admin users)',
            'description' => 'Email template to send notice to administrators when system get new job application',
            'subject' => 'Новый отклик на вакансию',
        ],
        'employer-new-job-application' => [
            'title' => 'Новый отклик на вакансию (Работодателю и его коллегам)',
            'description' => 'Email template to send notice to employer and colleagues when system get new job application',
            'subject' => 'Новый отклик на вакансию',
        ],
        'new-job-posted' => [
            'title' => 'Вакансий не опубликовано',
            'description' => 'Send email to admin when a new job posted',
            'subject' => 'New job is posted on {{ site_title }} by {{ job_author }}',
        ],
        'new-company-profile-created' => [
            'title' => 'New company profile created',
            'description' => 'Send email to admin when a employer create a new company profile',
            'subject' => 'New company profile is created on {{ site_title }} by {{ employer_name }}',
        ],
        'job-expired-soon' => [
            'title' => 'Заканчивается срок публикации вакансии',
            'description' => 'Send email to the author if their job will be expired in next 3 days',
            'subject' => 'Вакансия "{{ job_name }}" будет снята с публикации через  {{ job_expired_after }} дней',
        ],
        'job-renewed' => [
            'title' => 'Вакансия обновлена',
            'description' => 'Отправка письма автору когда вакансия обновлена',
            'subject' => 'Ваша вакансия "{{ job_name }}" автоматически обновлена.',
        ],
        'payment-receipt' => [
            'title' => 'Квитанция об оплате',
            'description' => 'Уведомление пользователю после покупки кредитов',
            'subject' => 'Квитанция об оплате пакета услуг {{ package_name }} на {{ site_title }}',
        ],
        'account-registered' => [
            'title' => 'Профиль зарегистрирован',
            'description' => 'Send a notification to admin when a new employer/job seeker registered',
            'subject' => 'New {{ account_type }} registered on {{ site_title }}',
        ],
        'confirm-email' => [
            'title' => 'Подтверждение email',
            'description' => 'Отправка письма пользователю для подтверждения Email',
            'subject' => 'Уведомление о подтверждении Email',
        ],
        'password-reminder' => [
            'title' => 'Сбросить пароль',
            'description' => 'Отправка письма пользователю при запросе на сброс пароля',
            'subject' => 'Сбросить пароль',
        ],
        'free-credit-claimed' => [
            'title' => 'Free credit claimed',
            'description' => 'Send a notification to admin when free credit is claimed',
            'subject' => '{{ account_name }} has claimed free credit on {{ site_title }}',
        ],
        'payment-received' => [
            'title' => 'Оплата получена',
            'description' => 'Send a notification to admin when someone buy credits',
            'subject' => 'Payment received from {{ account_name }} on {{ site_title }}',
        ],
        'invoice-payment-created' => [
            'title' => 'Invoice Payment Detail',
            'description' => 'Send a notification to the customer who makes the job posting payment',
            'subject' => 'Payment received from {{ account_name }} on {{ site_title }}',
        ],
        'job-seeker-job-alert' => [
            'title' => 'Опубликована новая вакансия',
            'description' => 'Отправка письма соискателю о публикации новой вакансии',
            'subject' => 'Hiring {{ job_name }} at {{ company_name }}',
        ],
        'job-approved' => [
            'title' => 'Вакансия подтверждена',
            'description' => 'Письмо email автору после подтверждения вакансии',
            'subject' => 'Ваша вакансия "{{ job_name }}" подтверждена',
        ],
        'company-approved' => [
            'title' => 'Компания подтверждена',
            'description' => 'Отправка email автору о подтверждении компании',
            'subject' => 'Ваша компания "{{ company_name }}" подтверждена',
        ],
        'job-seeker-applied-job' => [
            'title' => 'Подтверждение отклика на вакансию',
            'description' => 'Отправка письма Соискателю после отклика на вакансию',
            'subject' => 'Подтверждение отклика на вакансию {{ job_name }}',
        ],
    ],
    'variables' => [
        'position' => 'Вакансия',
        'resume' => 'Резюме',
        'name' => 'Имя',
        'package_name' => 'Название пакета услуг',
        'phone' => 'Телефон',
        'cover_letter' => 'Сопроводительное письмо',
        'summary' => 'Обзор',
        'job_application' => 'Отклик на вакансию',
        'job_name' => 'Название вакансии',
        'job_expired_after' => 'Публикация закончится через  x дней',
        'account_name' => 'Имя профиля',
        'package_price' => 'Цена',
        'package_percent_discount' => 'Процент скидки',
        'package_number_of_listings' => 'Кол-во публикаций',
        'account_type' => 'Тип аккаунта (Работодатель / Соискатель)',
        'verify_link' => 'Ссылка на подтверждение',
        'reset_link' => 'Ссылка сброса',
        'invoice_code' => 'Номер счета',
        'invoice_link' => 'Ссылка на счет',
    ],
];
