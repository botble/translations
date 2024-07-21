<?php

return [
    'name' => 'Địa điểm',
    'all_states' => 'Tất cả tỉnh thành',
    'abbreviation' => 'Viết tắt',
    'abbreviation_placeholder' => 'Ví dụ: CA',
    'enums' => [
        'import_type' => [
            'country' => 'Quốc gia',
            'state' => 'Bang',
            'city' => 'Thành phố',
        ],
    ],
    'export' => [
        'total' => 'Tổng số địa điểm',
        'total_countries' => 'Tổng số quốc gia',
        'total_states' => 'Tổng số bang',
        'total_cities' => 'Tổng số thành phố',
        'description' => 'Xuất dữ liệu vị trí của bạn như quốc gia, tiểu bang và thành phố.',
    ],
    'import' => [
        'description' => 'Nhập dữ liệu vị trí dễ dàng từ dữ liệu có sẵn hoặc bằng cách tải lên tệp CSV/Excel.',
        'rules' => [
            'name' => 'Tên của địa điểm là bắt buộc và không được vượt quá 120 ký tự.',
            'slug' => 'Phần mở rộng của vị trí, nếu được cung cấp, không được vượt quá 120 ký tự.',
            'import_type' => 'Loại nhập là bắt buộc và phải là một trong các giá trị được xác định trước.',
            'order' => 'Thứ tự của vị trí, nếu được cung cấp, phải là số nguyên dương trong khoảng từ 0 đến 127.',
            'abbreviation' => 'Chữ viết tắt của địa điểm, nếu được cung cấp, không được vượt quá 10 ký tự.',
            'status' => 'Trạng thái của vị trí là bắt buộc và phải là một trong các giá trị được xác định trước.',
            'country' => 'Trường quốc gia là bắt buộc nếu loại nhập là tiểu bang hoặc thành phố.',
            'state' => 'Trường trạng thái là bắt buộc nếu loại nhập là thành phố.',
            'nationality' => 'Quốc tịch của địa điểm, nếu được cung cấp, không được vượt quá 120 ký tự.',
        ],
    ],
    'create' => 'Thêm địa điểm',
    'edit' => 'Sửa địa điểm',
];
