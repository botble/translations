<?php

return [
    'name' => 'Bản tin',
    'newsletter_form' => 'Biểu mẫu bản tin',
    'description' => 'Xem và xóa người đăng ký bản tin',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Bản tin',
                'description' => 'Cấu hình mẫu email bản tin',
                'to_admin' => [
                    'title' => 'Email gửi đến quản trị viên',
                    'description' => 'Mẫu để gửi email đến quản trị viên',
                    'subject' => 'Người dùng mới đã đăng ký bản tin của bạn',
                    'newsletter_email' => 'Email của người dùng đăng ký bản tin',
                ],
                'to_user' => [
                    'title' => 'Email gửi đến người dùng',
                    'description' => 'Mẫu để gửi email đến người đăng ký',
                    'subject' => '{{ site_title }}: Đăng ký xác nhận!',
                    'newsletter_name' => 'Họ tên đầy đủ của người dùng đăng ký bản tin',
                    'newsletter_email' => 'Email của người dùng đăng ký bản tin',
                    'newsletter_unsubscribe_link' => 'Liên kết để hủy đăng ký bản tin',
                    'newsletter_unsubscribe_url' => 'URL để hủy đăng ký bản tin',
                ],
            ],
        ],
        'title' => 'Bản tin',
        'panel_description' => 'Xem và cập nhật cài đặt bản tin',
        'description' => 'Cài đặt cho bản tin (tự động gửi email bản tin đến SendGrid, Mailchimp... khi có người đăng ký bản tin trên trang web).',
        'mailchimp_api_key' => 'Mailchimp API Key',
        'mailchimp_list_id' => 'Mailchimp List ID',
        'mailchimp_list' => 'Danh sách Mailchimp',
        'sendgrid_api_key' => 'Sendgrid API Key',
        'sendgrid_list_id' => 'Sendgrid List ID',
        'sendgrid_list' => 'Danh sách Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Bật API danh sách liên hệ bản tin?',
    ],
    'statuses' => [
        'subscribed' => 'Đã đăng ký',
        'unsubscribed' => 'Đã hủy đăng ký',
    ],
];
