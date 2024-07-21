<?php

return [
    'tools' => [
        'export_import_data' => 'Xuất/Nhập dữ liệu',
    ],
    'import' => [
        'name' => 'Nhập khẩu',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'Tệp không hợp lệ hoặc bị hỏng hoặc quá lớn để đọc.',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'Kéo và thả file vào đây hoặc click để tải lên',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => 'Nhập khẩu',
            'chunk_size' => 'Kích thước đoạn',
            'chunk_size_helper' => 'Số lượng hàng được nhập tại một thời điểm được xác định bởi kích thước khối. Tăng giá trị này nếu bạn có tệp lớn và dữ liệu được nhập rất nhanh. Hãy giảm giá trị này nếu bạn gặp phải vấn đề về giới hạn bộ nhớ hoặc thời gian chờ của cổng khi nhập dữ liệu.',
        ],
        'failures' => [
            'title' => 'Thất bại',
            'attribute' => 'Thuộc tính',
            'errors' => 'Lỗi',
        ],
        'example' => [
            'title' => 'Ví dụ',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => 'Quy tắc',
            'column' => 'Cột',
        ],
        'uploading_message' => 'Đang bắt đầu tải tệp lên...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => 'Xác thực không thành công. Vui lòng kiểm tra các lỗi dưới đây.',
        'no_data_message' => 'Dữ liệu của bạn đã được cập nhật hoặc không có dữ liệu để nhập.',
    ],
    'export' => [
        'name' => 'Xuất khẩu',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => 'Cột',
            'format' => 'Định dạng',
            'export_button' => 'Xuất khẩu',
        ],
        'success_message' => 'Đã xuất thành công.',
        'error_message' => 'Xuất không thành công.',
        'empty_state' => [
            'title' => 'Không có dữ liệu để xuất',
            'description' => 'Có vẻ như không có dữ liệu để xuất.',
            'back' => 'Back to :page',
        ],
    ],
];
