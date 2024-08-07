<?php

return [
    'no_select' => 'Hãy chọn ít nhất 1 trường để thực hiện hành động này!',
    'cannot_find_user' => 'Không thể tải được thông tin người dùng',
    'supper_revoked' => 'Quyền quản trị viên cao nhất đã được gỡ bỏ',
    'cannot_revoke_yourself' => 'Không thể gỡ bỏ quyền quản trị cấp cao của chính bạn!',
    'cant_remove_supper' => 'Bạn không có quyền xóa quản trị viên cấp cao',
    'cant_find_user_with_email' => 'Không thể tìm thấy người dùng với email này',
    'supper_granted' => 'Quyền quản trị cao nhất đã được gán',
    'delete_log_success' => 'Xóa tập tin log thành công!',
    'get_member_success' => 'Hiển thị danh sách thành viên thành công',
    'error_occur' => 'Có lỗi dưới đây',
    'user_management' => 'Quản lý thành viên',
    'user_management_description' => 'Quản lý người dùng trong hệ thống',
    'role_and_permission' => 'Phân quyền hệ thống',
    'role_and_permission_description' => 'Quản lý những phân quyền trong hệ thống',
    'user' => [
        'list_super' => 'Danh sách quản trị viên cấp cao',
        'username' => 'Tên đăng nhập',
        'email' => 'E-mail',
        'last_login' => 'Đăng nhập lần cuối	',
        'add_user' => 'Thêm quản trị viên cấp cao',
        'cancel' => 'Hủy bỏ',
        'create' => 'Thêm',
    ],
    'options' => [
        'features' => 'Kiểm soát truy cập các tính năng',
        'feature_description' => 'Bật/tắt các tính năng.',
        'manage_super' => 'Quản lý quản trị viên cấp cao',
        'manage_super_description' => 'Thêm/xóa quản trị viên cấp cao',
        'info' => 'Thông tin hệ thống',
        'info_description' => 'Những thông tin về cấu hình hiện tại của hệ thống.',
    ],
    'info' => [
        'title' => 'Thông tin hệ thống',
        'cache' => 'Bộ nhớ đệm',
        'environment' => 'Môi trường',
        'locale' => 'Ngôn ngữ hệ thống',
        'description' => 'Tất cả thông tin về cấu hình hệ thống hiện tại.',
    ],
    'disabled_in_demo_mode' => 'Bạn không thể thực hiện hành động này ở chế độ demo!',
    'report_description' => 'Vui lòng chia sẻ thông tin này nhằm mục đích điều tra nguyên nhân gây lỗi',
    'get_system_report' => 'Lấy thông tin hệ thống',
    'system_environment' => 'Môi trường hệ thống',
    'framework_version' => 'Phiên bản framework',
    'timezone' => 'Múi giờ',
    'debug_mode' => 'Chế độ sửa lỗi',
    'debug_mode_off' => 'Tắt chế độ sửa lỗi',
    'storage_dir_writable' => 'Có thể lưu trữ dữ liệu tạm',
    'cache_dir_writable' => 'Có thể ghi bộ nhớ đệm',
    'app_size' => 'Kích thước ứng dụng',
    'server_environment' => 'Môi trường máy chủ',
    'php_version' => 'Phiên bản PHP',
    'php_version_error' => 'Phiên bản PHP phải >= :version',
    'server_software' => 'Phần mềm',
    'server_os' => 'Hệ điều hành của máy chủ',
    'database' => 'Hệ thống dữ liệu',
    'ssl_installed' => 'Đã cài đặt chứng chỉ SSL',
    'cache_driver' => 'Loại lưu trữ bộ nhớ đệm',
    'session_driver' => 'Loại lưu trữ phiên làm việc',
    'queue_connection' => 'Kết nối hàng đợi',
    'mbstring_ext' => 'Mbstring Ext',
    'openssl_ext' => 'OpenSSL mở rộng',
    'pdo_ext' => 'Phần mở rộng PDO',
    'curl_ext' => 'CURL mở rộng',
    'exif_ext' => 'Ext Ext',
    'file_info_ext' => 'Thông tin tập tin Ext',
    'tokenizer_ext' => 'Mã thông báo mở rộng',
    'extra_stats' => 'Thống kê thêm',
    'installed_packages' => 'Các gói đã cài đặt và phiên bản',
    'extra_information' => 'Thông tin mở rộng',
    'copy_report' => 'Sao chép báo cáo',
    'package_name' => 'Tên gói',
    'dependency_name' => 'Tên gói',
    'version' => 'Phiên bản',
    'cms_version' => 'Phiên bản CMS',
    'imagick_or_gd_ext' => 'Hình ảnh/GD Ext',
    'updater' => 'Nâng cấp hệ thống',
    'zip' => 'Zip Ext',
    'iconv' => 'Iconv Ext',
    'memory_limit' => 'Giới hạn bộ nhớ',
    'max_execution_time' => 'Thời gian thực hiện tối đa (s)',
    'allow_url_fopen_enabled' => 'đã bật allow_url_fopen',
    'cleanup' => [
        'title' => 'Hệ thống dọn dẹp',
        'description' => 'Dọn dẹp dữ liệu không sử dụng của bạn trong cơ sở dữ liệu',
        'table' => [
            'name' => 'Tên bảng',
            'count' => 'Hồ sơ',
        ],
        'backup_alert' => 'Vui lòng sao lưu cơ sở dữ liệu và tệp tập lệnh của bạn trước khi dọn dẹp, nó sẽ xóa dữ liệu của bạn trong cơ sở dữ liệu.',
        'messenger_choose_without_table' => 'Hãy chọn bỏ qua những bàn không muốn được dọn dẹp',
        'messenger_confirm_cleanup' => 'Bạn có chắc chắn muốn thực hiện hành động dọn dẹp cơ sở dữ liệu, nó sẽ xóa dữ liệu của bạn trong cơ sở dữ liệu?',
        'submit_button' => 'Dọn dẹp',
        'success_message' => 'Đã xóa dữ liệu thành công',
        'not_enabled_yet' => 'Tính năng này chưa được kích hoạt. <br />Hãy thêm vào .env: <code>CMS_ENABLED_CLEANUP_DATABASE=true</code> để kích hoạt tính năng này!',
    ],
];
