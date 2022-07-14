<?php

return [
    'name' => 'Đăng ký nhận bản tin',
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
    ],
    'statuses' => [
        'subscribed' => 'Theo dõi',
        'unsubscribed' => 'Hủy theo dõi',
    ],
];
