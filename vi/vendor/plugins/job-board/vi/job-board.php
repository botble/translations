<?php

return [
    'name' => 'Bảng việc làm',
    'settings' => 'Cài đặt',
    'emails' => [
        'title' => 'Bảng việc làm',
        'description' => 'Cấu hình email Bảng việc làm',
        'templates' => [
            'admin_new_job_application_title' => 'Đơn xin việc mới (dành cho người dùng quản trị)',
            'admin_new_job_application_description' => 'Mẫu email gửi thông báo cho quản trị viên khi hệ thống nhận được đơn xin việc mới',
            'employer_new_job_application_title' => 'Đơn xin việc mới (cho người sử dụng lao động và đồng nghiệp)',
            'employer_new_job_application_description' => 'Mẫu email gửi thông báo tới nhà tuyển dụng và đồng nghiệp khi hệ thống nhận được đơn xin việc mới',
        ],
    ],
    'job-attributes' => 'Thuộc tính công việc',
    'theme_options' => [
        'name' => 'Bảng việc làm',
        'description' => 'Tùy chọn chủ đề cho Bảng việc làm',
        'logo_employer_dashboard' => 'Logo trong bảng điều khiển của nhà tuyển dụng (Mặc định là logo chính)',
        'default_company_cover_image' => 'Ảnh bìa công ty mặc định',
        'default_company_logo' => 'Logo công ty mặc định (Mặc định là logo chính)',
        'job_companies_page_id' => 'Trang công ty việc làm',
        'job_categories_page_id' => 'Trang danh mục công việc',
        'job_candidates_page_id' => 'Trang ứng viên xin việc',
        'job_list_page_id' => 'Trang danh sách việc làm',
    ],
    'jobs_page' => 'Trang việc làm',
    'categories_page' => 'Trang danh mục công việc',
    'companies_page' => 'Trang công ty việc làm',
    'candidates_page' => 'Trang ứng viên xin việc',
    'form' => [
        'unique_id' => 'ID duy nhất',
    ],
    'login_form' => 'mẫu đăng nhập',
    'register_form' => 'Đăng ký mẫu',
    'forgot_password_form' => 'Quên mật khẩu',
    'reset_password_form' => 'Đặt lại mẫu mật khẩu',
];
