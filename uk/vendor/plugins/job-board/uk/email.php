<?php

return [
    'templates' => [
        'admin-new-job-application' => [
            'title' => 'New job application (to admin users)',
            'description' => 'Email template to send notice to administrators when system get new job application',
            'subject' => 'New job application',
        ],
        'employer-new-job-application' => [
            'title' => 'New job application (to employer and colleagues)',
            'description' => 'Email template to send notice to employer and colleagues when system get new job application',
            'subject' => 'New job application',
        ],
        'new-job-posted' => [
            'title' => 'New job posted',
            'description' => 'Send email to admin when a new job posted',
            'subject' => 'New job is posted on {{ site_title }} by {{ job_author }}',
        ],
        'new-company-profile-created' => [
            'title' => 'New company profile created',
            'description' => 'Send email to admin when a employer create a new company profile',
            'subject' => 'New company profile is created on {{ site_title }} by {{ employer_name }}',
        ],
        'job-expired-soon' => [
            'title' => 'Job expired soon',
            'description' => 'Send email to the author if their job will be expired in next 3 days',
            'subject' => 'Your job "{{ job_name }}" will be expired in {{ job_expired_after }} days',
        ],
        'job-renewed' => [
            'title' => 'Вакансію оновлено',
            'description' => 'Send email to the author when their job renewed',
            'subject' => 'Ваша вакансія "{{ job_name }}" автоматично оновлена.',
        ],
        'payment-receipt' => [
            'title' => 'Payment receipt',
            'description' => 'Send a notification to user when they buy credits',
            'subject' => 'Payment receipt for package {{ package_name }} on {{ site_title }}',
        ],
        'account-registered' => [
            'title' => 'Account registered',
            'description' => 'Send a notification to admin when a new employer/job seeker registered',
            'subject' => 'New {{ account_type }} registered on {{ site_title }}',
        ],
        'confirm-email' => [
            'title' => 'Підтвердження email',
            'description' => 'Send email to user when they register an account to verify their email',
            'subject' => 'Confirm Email Notification',
        ],
        'password-reminder' => [
            'title' => 'Reset password',
            'description' => 'Send email to user when requesting reset password',
            'subject' => 'Reset Password',
        ],
        'free-credit-claimed' => [
            'title' => 'Free credit claimed',
            'description' => 'Send a notification to admin when free credit is claimed',
            'subject' => '{{ account_name }} has claimed free credit on {{ site_title }}',
        ],
        'payment-received' => [
            'title' => 'Payment received',
            'description' => 'Send a notification to admin when someone buy credits',
            'subject' => 'Payment received from {{ account_name }} on {{ site_title }}',
        ],
        'invoice-payment-created' => [
            'title' => 'Invoice Payment Detail',
            'description' => 'Send a notification to the customer who makes the job posting payment',
            'subject' => 'Payment received from {{ account_name }} on {{ site_title }}',
        ],
        'job-seeker-job-alert' => [
            'title' => 'New job posted',
            'description' => 'Send email to job seeker when a new job posted',
            'subject' => 'Hiring {{ job_name }} at {{ company_name }}',
        ],
        'job-approved' => [
            'title' => 'Job approved',
            'description' => 'Send email to the author when their job is approved',
            'subject' => 'Your job "{{ job_name }}" has been approved',
        ],
        'company-approved' => [
            'title' => 'Company approved',
            'description' => 'Send email to the author when their company is approved',
            'subject' => 'Your company "{{ company_name }}" has been approved',
        ],
        'job-seeker-applied-job' => [
            'title' => 'Job application confirmation',
            'description' => 'Send email to job seeker when they applied for a job',
            'subject' => 'Application Confirmation for {{ job_name }}',
        ],
    ],
    'variables' => [
        'name' => 'Ім\'я',
        'phone' => 'Телефон',
    ],
];
