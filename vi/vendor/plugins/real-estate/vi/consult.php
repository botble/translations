<?php

return [
    'name' => 'Tư vấn',
    'edit' => 'Xem tư vấn',
    'statuses' => [
        'read' => 'Đã đọc',
        'unread' => 'Chưa đọc',
    ],
    'phone' => 'Điện thoại',
    'ip_address' => 'địa chỉ IP',
    'content' => 'Chi tiết',
    'consult_information' => 'Nội dung yêu cầu tư vấn',
    'email' => [
        'header' => 'E-mail',
        'title' => 'Yêu cầu tư vấn mới',
        'success' => 'Gửi yêu cầu tư vấn thành công!',
        'failed' => 'Gửi yêu cầu tư vấn thất bại, vui lòng thử lại sau!',
    ],
    'form' => [
        'name' => [
            'required' => 'Tên là bắt buộc',
        ],
        'email' => [
            'required' => 'Email là bắt buộc',
            'email' => 'Địa chỉ email không hợp lệ',
        ],
        'content' => [
            'required' => 'Nội dung là bắt buộc',
        ],
        'g-recaptcha-response' => [
            'required' => 'Hãy xác minh không phải là robot trước khi gửi tin nhắn.',
            'captcha' => 'Bạn chưa xác minh không phải là robot thành công.',
        ],
    ],
    'consult_sent_from' => 'Yêu cầu tư vấn này được gửi từ',
    'time' => 'Thời gian',
    'consult_id' => 'Mã yêu cầu tư vấn',
    'form_name' => 'Tên',
    'form_email' => 'E-mail',
    'form_phone' => 'Điện thoại',
    'mark_as_read' => 'Đánh dấu đã đọc',
    'mark_as_unread' => 'Đánh dấu chưa đọc',
    'new_consult_notice' => 'Bạn có <span class="bold">:count</span> yêu cầu tư vấn mới',
    'view_all' => 'Xem tất cả',
    'project' => 'Dự án',
    'property' => 'Nhà ở - Căn hộ',
    'custom_field' => [
        'name' => 'Trường tùy chỉnh',
        'create' => 'Tạo trường tùy chỉnh',
        'type' => 'Kiểu',
        'required' => 'Yêu cầu',
        'placeholder' => 'Trình giữ chỗ',
        'order' => 'Đặt hàng',
        'options' => 'Tùy chọn',
        'option' => [
            'label' => 'Nhãn',
            'value' => 'Giá trị',
            'add' => 'Thêm tùy chọn mới',
        ],
        'enums' => [
            'types' => [
                'text' => 'Chữ',
                'number' => 'Con số',
                'dropdown' => 'Thả xuống',
                'checkbox' => 'Hộp kiểm',
                'radio' => 'Đài',
                'textarea' => 'Vùng văn bản',
                'date' => 'Ngày',
                'datetime' => 'Ngày giờ',
                'time' => 'Thời gian',
            ],
        ],
    ],
];
