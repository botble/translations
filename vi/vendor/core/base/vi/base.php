<?php

return [
    'yes' => 'Có',
    'no' => 'Không',
    'is_default' => 'Mặc định?',
    'proc_close_disabled_error' => 'Hàm proc_close() đã bị tắt. Vui lòng liên hệ nhà cung cấp hosting để mở hàm này. Hoặc có thể thêm vào .env: CAN_EXECUTE_COMMAND=false để tắt tính năng này.',
    'email_template' => [
        'date_time' => 'Ngày giờ hiện tại',
        'date_year' => 'Năm hiện tại',
        'footer' => 'Mẫu chân trang email',
        'header' => 'Mẫu đầu trang email',
        'site_admin_email' => 'Email quản trị viên',
        'site_logo' => 'Logo của trang',
        'site_title' => 'Tiêu đề trang',
        'site_url' => 'URL trang',
        'site_email' => 'Email quản trị trang web',
        'site_copyright' => 'Bản quyền trang web',
        'site_social_links' => 'Liên kết xã hội của trang web (kiểu dữ liệu: mảng)',
        'settings' => 'Đặt giá trị',
        'email_css' => 'CSS gửi email',
        'variable' => 'Biến đổi',
        'preview' => 'Xem trước',
        'icon_variables' => 'Biến biểu tượng',
        'usage' => 'Cách sử dụng:',
        'icon_variable_usage_description' => 'Bạn có thể sao chép biến :variable và dán:',
        'add_new_icons' => 'Thêm biểu tượng mới:',
        'add_more_icon_description' => 'Bạn có thể thêm nhiều biểu tượng hơn bằng cách tải chúng lên (hỗ trợ định dạng PNG, JPEG, JPG và GIF) vào đường dẫn sau: :path',
        'missing_icons' => 'Thiếu các biểu tượng',
        'missing_icons_description' => 'Các biểu tượng sau đang thiếu trong đường dẫn: :to, vui lòng sao chép tất cả các tệp biểu tượng từ :from sang :to.',
        'twig' => [
            'tag' => [
                'apply' => 'Thẻ áp dụng cho phép bạn áp dụng các bộ lọc Twig',
                'for' => 'Lặp lại từng mục theo trình tự',
                'if' => 'Câu lệnh if trong Twig có thể so sánh với câu lệnh if của PHP',
            ],
        ],
    ],
    'change_image' => 'Đổi ảnh',
    'delete_image' => 'Xóa ảnh',
    'preview_image' => 'Ảnh xem trước',
    'image' => 'Hình ảnh',
    'using_button' => 'Sử dụng nút',
    'select_image' => 'Chọn ảnh',
    'click_here' => 'Bấm vào đây',
    'to_add_more_image' => 'để thêm hình ảnh',
    'add_image' => 'Thêm ảnh',
    'tools' => 'Công cụ',
    'close' => 'Đóng',
    'panel' => [
        'others' => 'Khác',
        'system' => 'Hệ thống',
        'manage_description' => 'Quản lý :name',
    ],
    'global_search' => [
        'title' => 'Tìm kiếm',
        'search' => 'Tìm kiếm',
        'clear' => 'Thông thoáng',
        'no_result' => 'Không có kết quả nào',
        'to_select' => 'chọn',
        'to_navigate' => 'để điều hướng',
        'to_close' => 'đóng',
    ],
    'validation' => [
        'email_in_blacklist' => 'Email :attribute nằm trong danh sách đen. Vui lòng sử dụng địa chỉ email khác.',
        'domain' => 'Tên miền :attribute phải hợp lệ.',
    ],
    'showing_records' => 'Hiển thị từ :from đến :to trong tổng số :total bản ghi',
    'copy' => 'Sao chép',
    'copied' => 'Đã sao chép',
];
