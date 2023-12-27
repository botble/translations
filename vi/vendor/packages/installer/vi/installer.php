<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Cài đặt',
    'next' => 'Bước tiếp theo',
    'back' => 'Trước đó',
    'finish' => 'Cài đặt',
    'installation' => 'Cài đặt',
    'forms' => [
        'errorTitle' => 'Có lỗi sau đây:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'pageTitle' => 'Cài đặt - Bước 1: Chào mừng',
        'title' => 'Chào mừng',
        'message' => 'Trước khi bắt đầu, chúng ta cần một số thông tin về cơ sở dữ liệu. Bạn cần biết các mục sau trước khi tiếp tục.',
        'language' => 'Ngôn ngữ',
        'next' => 'Bắt đầu',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'pageTitle' => 'Cài đặt - Bước 2: Yêu cầu máy chủ',
        'title' => 'Yêu cầu máy chủ',
        'next' => 'Kiểm tra quyền',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Cấu hình môi trường',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'pageTitle' => 'Cài đặt - Bước 3: Cài đặt môi trường',
            'title' => 'Cài đặt môi trường',
            'form' => [
                'name_required' => 'Cần có tên môi trường.',
                'app_name_label' => 'Tiêu đề trang',
                'app_name_placeholder' => 'Tiêu đề trang',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Kết nối cơ sở dữ liệu',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Máy chủ cơ sở dữ liệu',
                'db_host_placeholder' => 'Máy chủ cơ sở dữ liệu',
                'db_port_label' => 'Cổng cơ sở dữ liệu',
                'db_port_placeholder' => 'Cổng cơ sở dữ liệu',
                'db_name_label' => 'Tên cơ sở dữ liệu',
                'db_name_placeholder' => 'Tên cơ sở dữ liệu',
                'db_username_label' => 'Tên người dùng cơ sở dữ liệu',
                'db_username_placeholder' => 'Tên người dùng cơ sở dữ liệu',
                'db_password_label' => 'Mật khẩu cơ sở dữ liệu',
                'db_password_placeholder' => 'Mật khẩu cơ sở dữ liệu',
                'buttons' => [
                    'install' => 'Cài đặt',
                ],
                'db_host_helper' => 'Nếu bạn sử dụng Laravel Sail, chỉ cần thay đổi DB_HOST thành DB_HOST = mysql. Trên một số hosting, DB_HOST có thể là localhost thay vì 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Cài đặt file .env của bạn đã được lưu.',
        'errors' => 'Không thể lưu file .env, Vui lòng tạo nó thủ công.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'pageTitle' => 'Cài đặt - Bước 4: Tạo tài khoản',
        'title' => 'Tạo tài khoản',
        'form' => [
            'first_name' => 'Tên',
            'last_name' => 'Họ',
            'username' => 'Tên người dùng',
            'email' => 'Email',
            'password' => 'Mật khẩu',
            'password_confirmation' => 'Xác nhận mật khẩu',
            'create' => 'Tạo',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'pageTitle' => 'Cài đặt - Bước 5: Kích hoạt giấy phép',
        'title' => 'Kích hoạt giấy phép',
        'skip' => 'Bỏ qua tạm thời',
    ],

    'install' => 'Cài đặt',

    'final' => [
        'pageTitle' => 'Cài đặt đã hoàn thành',
        'title' => 'Hoàn tất',
        'message' => 'Ứng dụng đã được cài đặt thành công.',
        'exit' => 'Điều hướng đến bảng điều khiển quản trị',
    ],

    'install_success' => 'Cài đặt thành công!',
];
