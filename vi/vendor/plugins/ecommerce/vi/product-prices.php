<?php

return [
    'name' => 'Giá sản phẩm',
    'warning_prices' => 'Những mức giá này thể hiện giá gốc của sản phẩm và có thể không phản ánh giá cuối cùng, giá này có thể thay đổi do các yếu tố như khuyến mại chớp nhoáng, khuyến mãi, v.v.',
    'import' => [
        'name' => 'Cập nhật giá sản phẩm',
        'description' => 'Cập nhật giá sản phẩm hàng loạt bằng cách tải lên tệp CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'Trường ID là bắt buộc và phải tồn tại trong bảng sản phẩm.',
            'name' => 'Trường tên là bắt buộc và phải là một chuỗi.',
            'sku' => 'Trường SKU phải là một chuỗi.',
            'cost_per_item' => 'Trường chi phí cho mỗi mặt hàng phải là giá trị số.',
            'price' => 'Trường giá là bắt buộc và phải là giá trị số.',
            'sale_price' => 'Trường giá ưu đãi phải là giá trị số.',
        ],
    ],
    'export' => [
        'description' => 'Xuất giá sản phẩm sang tệp CSV/Excel.',
    ],
];
