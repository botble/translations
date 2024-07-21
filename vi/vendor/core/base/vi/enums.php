<?php

return [
    'statuses' => [
        'draft' => 'Bản nháp',
        'pending' => 'Đang chờ xử lý',
        'published' => 'Đã xuất bản',
    ],
    'system_updater_steps' => [
        'download' => 'Tải xuống tập tin cập nhật',
        'update_files' => 'Cập nhật tập tin hệ thống',
        'update_database' => 'Cập nhật cơ sở dữ liệu',
        'publish_core_assets' => 'Xuất bản nội dung cốt lõi',
        'publish_packages_assets' => 'Xuất bản nội dung gói',
        'clean_up' => 'Dọn dẹp các tập tin cập nhật hệ thống',
        'done' => 'Hệ thống được cập nhật thành công',
        'messages' => [
            'download' => 'Đang tải xuống các tập tin cập nhật...',
            'update_files' => 'Đang cập nhật tập tin hệ thống...',
            'update_database' => 'Đang cập nhật cơ sở dữ liệu...',
            'publish_core_assets' => 'Xuất bản nội dung cốt lõi...',
            'publish_packages_assets' => 'Đang xuất bản nội dung gói...',
            'clean_up' => 'Dọn dẹp các tập tin cập nhật hệ thống...',
            'done' => 'Xong! Trình duyệt của bạn sẽ được làm mới sau 30 giây.',
        ],
        'failed_messages' => [
            'download' => 'Không thể tải xuống tập tin cập nhật',
            'update_files' => 'Không thể cập nhật tập tin hệ thống',
            'update_database' => 'Không thể cập nhật cơ sở dữ liệu',
            'publish_core_assets' => 'Không thể xuất bản nội dung cốt lõi',
            'publish_packages_assets' => 'Không thể xuất bản nội dung gói',
            'clean_up' => 'Không thể dọn sạch các tập tin cập nhật hệ thống',
        ],
        'success_messages' => [
            'download' => 'Đã tải xuống tập tin cập nhật thành công.',
            'update_files' => 'Đã cập nhật tập tin hệ thống thành công.',
            'update_database' => 'Cập nhật cơ sở dữ liệu thành công.',
            'publish_core_assets' => 'Đã xuất bản thành công tài sản cốt lõi.',
            'publish_packages_assets' => 'Đã xuất bản nội dung gói thành công.',
            'clean_up' => 'Đã dọn dẹp thành công các tập tin cập nhật hệ thống.',
        ],
    ],
];
