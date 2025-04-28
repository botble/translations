<?php

return [
    'settings' => [
        'title' => 'Cài đặt đăng nhập mạng xã hội',
        'description' => 'Cấu hình tùy chọn đăng nhập mạng xã hội',
        'facebook' => [
            'enable' => 'Bật đăng nhập Facebook',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vui lòng truy cập https://developers.facebook.com để tạo ứng dụng mới cập nhật App ID, App Secret. URL callback là :callback',
            'data_deletion_request_callback_url' => 'Đặt URL này :url làm URL yêu cầu xóa dữ liệu trong cài đặt ứng dụng Facebook của bạn để cho phép người dùng yêu cầu xóa dữ liệu của họ.',
        ],
        'google' => [
            'enable' => 'Bật đăng nhập Google',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vui lòng truy cập https://console.developers.google.com/apis/dashboard để tạo ứng dụng mới cập nhật App ID, App Secret. URL callback là :callback',
            'use_google_button' => 'Sử dụng nút Google',
            'use_google_button_helper' => 'Nếu bạn bật tùy chọn này, nút Google sẽ được sử dụng thay vì nút mặc định.',
        ],
        'github' => [
            'enable' => 'Bật đăng nhập GitHub',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vui lòng truy cập https://github.com/settings/developers để tạo ứng dụng mới cập nhật App ID, App Secret. URL callback là :callback',
        ],
        'linkedin' => [
            'enable' => 'Bật đăng nhập Linkedin',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vui lòng truy cập https://www.linkedin.com/developers/apps/new để tạo ứng dụng mới cập nhật App ID, App Secret. URL callback là :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Bật đăng nhập Linkedin sử dụng OpenID Connect',
            'app_id' => 'App ID',
            'app_secret' => 'App Secret',
            'helper' => 'Vui lòng truy cập https://www.linkedin.com/developers/apps/new để tạo ứng dụng mới cập nhật App ID, App Secret. URL callback là :callback',
        ],
        'enable' => 'Bật đăng nhập mạng xã hội?',
        'style' => 'Kiểu',
        'minimal' => 'Tối giản',
        'default' => 'Mặc định',
        'basic' => 'Cơ bản',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
    ],
    'menu' => 'Đăng nhập mạng xã hội',
    'description' => 'Xem và cập nhật cài đặt đăng nhập mạng xã hội của bạn',
    'sign_in_with' => 'Đăng nhập với :provider',
];
