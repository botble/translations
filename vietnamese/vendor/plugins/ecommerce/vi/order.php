<?php

return [
    'statuses'                            => [
        'pending'    => 'Chưa xử lý',
        'processing' => 'Đang xử lý',
        'delivering' => 'Đang giao hàng',
        'delivered'  => 'Đã giao hàng',
        'completed'  => 'Hoàn thành',
        'canceled'   => 'Bị huỷ',
    ],
    'name'                                => 'Đơn hàng',
    'customer'                            => [
        'messages' => [
            'cancel_error'   => 'Đơn hàng đang được giao hoặc đã hoàn thành',
            'cancel_success' => 'Huỷ đơn hàng thành công',
        ],
    ],
    'incomplete_order'                    => 'Đơn hàng chưa hoàn tất',
    'order_id'                            => 'Mã đơn hàng',
    'customer_label'                      => 'Khách hàng',
    'amount'                              => 'Tổng cộng',
    'shipping_amount'                     => 'Phí vận chuyển',
    'payment_method'                      => 'Phương thức thanh toán',
    'payment_status_label'                => 'Trạng thái thanh toán',
    'manage_orders'                       => 'Quản lý đơn hàng',
    'order_intro_description'             => 'Một khi cửa hàng của bạn có đơn đặt hàng, đây sẽ là nơi bạn xử lý và theo dõi những đơn đặt hàng đó.',
    'create_new_order'                    => 'Tạo đơn hàng',
    'manage_incomplete_orders'            => 'Quản lý đơn hàng chưa hoàn tất',
    'incomplete_orders_intro_description' => 'Đơn hàng chưa hoàn tất là đơn hàng được tạo khi khách hàng thêm sản phẩm vào giỏ hàng, tiến hành điền thông tin mua hàng nhưng không hoàn tất quá trình thanh toán.',
    'cannot_send_order_recover_to_mail'   => 'Không tìm thấy email nên không thể gửi email khôi phục cho khách hàng.',
];
