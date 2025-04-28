<?php

return [
    'create' => 'Tạo bài viết mới',
    'form' => [
        'name' => 'Tên',
        'name_placeholder' => 'Tên bài viết (Tối đa :c ký tự)',
        'description' => 'Mô tả',
        'description_placeholder' => 'Mô tả ngắn cho bài viết (Tối đa :c ký tự)',
        'categories' => 'Danh mục',
        'tags' => 'Thẻ',
        'tags_placeholder' => 'Thẻ',
        'content' => 'Nội dung',
        'is_featured' => 'Đánh dấu bài viết này',
        'note' => 'Nội dung ghi chú',
        'format_type' => 'Định dạng',
    ],
    'cannot_delete' => 'Không thể xóa bài viết',
    'post_deleted' => 'Bài viết đã xóa',
    'posts' => 'Bài viết',
    'post' => 'Bài viết',
    'edit_this_post' => 'Chỉnh sửa bài viết này',
    'no_new_post_now' => 'Không có bài viết mới nào bây giờ!',
    'menu_name' => 'Bài viết',
    'widget_posts_recent' => 'Bài viết gần đây',
    'categories' => 'Danh mục',
    'category' => 'Danh mục',
    'author' => 'Tác giả',
    'export' => [
        'description' => 'Xuất bài viết sang tệp CSV/Excel.',
        'total' => 'Tổng số bài viết',
    ],
    'import' => [
        'description' => 'Nhập bài viết từ tệp CSV/Excel.',
        'done_message' => ':created bài viết đã được tạo và :updated bài viết đã được cập nhật.',
        'rules' => [
            'nullable_string_max' => 'Trường :attribute chấp nhận giá trị chuỗi tối đa :max ký tự hoặc có thể để trống.',
            'sometimes_array' => 'Trường :attribute chấp nhận giá trị mảng hoặc có thể để trống.',
            'in' => ':attribute phải là một trong các giá trị sau: :values.',
            'nullable_string' => 'Trường :attribute chấp nhận giá trị chuỗi hoặc có thể để trống.',
            'nullable_string_max_in' => 'Trường :attribute có thể để trống, hoặc phải là một chuỗi có độ dài tối đa :max ký tự nếu được cung cấp và phải là một trong các giá trị sau: :values.',
        ],
    ],
];
