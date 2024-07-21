<?php

return [
    'name' => 'Đăng ký nhận bản tin',
    'newsletter_form' => 'Mẫu bản tin',
    'description' => 'Xem và xóa người đăng ký nhận bản tin',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Đăng ký nhận bản tin',
                'description' => 'Cấu hình email xác nhận đăng ký nhận bản tin',
                'to_admin' => [
                    'title' => 'Email gửi tới cho quản trị viên',
                    'description' => 'Mẫu email gửi tới cho quản trị viên',
                ],
                'to_user' => [
                    'title' => 'Email gửi tới cho người đăng ký',
                    'description' => 'Mẫu email gửi tới cho người đăng ký',
                ],
            ],
        ],
        'title' => 'Bản tin',
        'panel_description' => 'Xem và cập nhật cài đặt bản tin',
        'description' => 'Cài đặt bản tin (tự động gửi email bản tin tới SendGrid, Mailchimp... khi có người đăng ký bản tin trên website).',
        'mailchimp_api_key' => 'Khóa API Mailchimp',
        'mailchimp_list_id' => 'ID danh sách Mailchimp',
        'mailchimp_list' => 'Danh sách Mailchimp',
        'sendgrid_api_key' => 'Khóa API Sendgrid',
        'sendgrid_list_id' => 'ID danh sách lưới gửi',
        'sendgrid_list' => 'Danh sách lưới gửi',
        'enable_newsletter_contacts_list_api' => 'Bật API danh sách liên hệ bản tin?',
    ],
    'statuses' => [
        'subscribed' => 'Theo dõi',
        'unsubscribed' => 'Hủy theo dõi',
    ],
];
