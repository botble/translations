<?php

return [
    'webhook_secret' => 'Bí mật webhook',
    'webhook_setup_guide' => [
        'title' => 'Hướng dẫn thiết lập Webhook sọc',
        'description' => 'Hãy làm theo các bước sau để thiết lập webhook Stripe',
        'step_1_label' => 'Đăng nhập vào Bảng điều khiển Stripe',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'Chọn sự kiện và định cấu hình điểm cuối',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'Thêm điểm cuối',
        'step_3_description' => 'Nhấp vào nút "Thêm điểm cuối" để lưu webhook.',
        'step_4_label' => 'Sao chép bí mật ký tên',
        'step_4_description' => 'Sao chép giá trị "Bí mật ký tên" từ phần "Chi tiết Webhook" và dán vào trường "Bí mật sọc Webhook" trong phần "Sọc" của tab "Thanh toán" trong trang "Cài đặt".',
    ],
];
