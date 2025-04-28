<?php

return [
    'name' => 'Thông báo',

    'enums' => [
        'announce_placement' => [
            'top' => 'Trên cùng',
            'bottom' => 'Cố định ở dưới cùng',
            'popup' => 'Popup',
            'theme' => 'Tích hợp sẵn trong giao diện',
        ],

        'text_alignment' => [
            'start' => 'Bắt đầu',
            'center' => 'Giữa',
        ],
    ],

    'validation' => [
        'font_size' => 'Kích thước phông chữ phải là giá trị kích thước phông chữ CSS hợp lệ.',
        'text_color' => 'Màu văn bản phải là giá trị màu hex hợp lệ.',
    ],

    'create' => 'Tạo thông báo mới',
    'add_new' => 'Thêm mới',
    'settings' => [
        'name' => 'Thông báo',
        'description' => 'Quản lý cài đặt thông báo',
    ],

    'background_color' => 'Màu nền',
    'font_size' => 'Kích thước phông chữ',
    'font_size_help' => 'Để trống để sử dụng mặc định. Ví dụ: 1rem, 1em, 12px, ...',
    'text_color' => 'Màu văn bản',
    'start_date' => 'Ngày bắt đầu',
    'end_date' => 'Ngày kết thúc',
    'has_action' => 'Có hành động',
    'action_label' => 'Nhãn hành động',
    'action_url' => 'URL hành động',
    'action_open_new_tab' => 'Mở trong tab mới',
    'dismissible_label' => 'Cho phép người dùng đóng thông báo',
    'placement' => 'Vị trí',
    'text_alignment' => 'Căn chỉnh văn bản',
    'is_active' => 'Đang hoạt động',
    'max_width' => 'Chiều rộng tối đa',
    'max_width_help' => 'Để trống để sử dụng giá trị mặc định. Ví dụ: 100%, 500px, ...',
    'max_width_unit' => 'Đơn vị chiều rộng tối đa',
    'font_size_unit' => 'Đơn vị kích thước phông chữ',
    'autoplay_label' => 'Tự động phát',
    'autoplay_delay_label' => 'Độ trễ tự động phát',
    'autoplay_delay_help' => 'Độ trễ giữa mỗi thông báo tính bằng mili giây. Để trống để sử dụng giá trị mặc định (5000).',
    'lazy_loading' => 'Tải chậm',
    'lazy_loading_description' => 'Bật tùy chọn này để cải thiện tốc độ tải trang',
    'hide_on_mobile' => 'Ẩn trên thiết bị di động',
];
