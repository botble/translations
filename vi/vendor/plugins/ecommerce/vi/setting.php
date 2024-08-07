<?php

return [
    'save_settings' => 'Lưu cài đặt',
    'general' => [
        'name' => 'Tổng quan',
        'description' => 'Xem và cập nhật cài đặt chung của bạn',
    ],
    'currency' => [
        'name' => 'Tiền tệ',
        'description' => 'Xem và cập nhật cài đặt tiền tệ',
        'currency_setting_description' => 'Xem và cập nhật các loại tiền tệ sử dụng trên trang web',
        'form' => [
            'enable_auto_detect_visitor_currency' => 'Bật tính năng tự động phát hiện loại tiền tệ của khách truy cập',
            'add_space_between_price_and_currency' => 'Thêm khoảng trắng giữa giá và đơn vị tiền tệ',
            'thousands_separator' => 'Dấu phân cách hàng nghìn',
            'decimal_separator' => 'Phân số thập phân',
            'separator_period' => 'Giai đoạn (.)',
            'separator_comma' => 'Dấu phẩy (,)',
            'separator_space' => 'Không gian ( )',
            'api_key' => 'Khóa tỷ giá hối đoái API',
            'api_key_helper' => 'Get exchange rate API key on :link',
            'update_currency_rates' => 'Cập nhật tỷ giá tiền tệ',
            'use_exchange_rate_from_api' => 'Sử dụng tỷ giá hối đoái từ API',
            'clear_cache_rates' => 'Xóa tốc độ bộ nhớ đệm',
            'auto_detect_visitor_currency_description' => 'Nó phát hiện loại tiền của khách truy cập dựa trên ngôn ngữ trình duyệt. Nó sẽ ghi đè lựa chọn tiền tệ mặc định.',
            'exchange_rate' => [
                'api_provider' => 'nhà cung cấp API',
                'select' => '-- Lựa chọn --',
                'none' => 'Không có',
                'provider' => [
                    'api_layer' => 'Lớp API',
                    'open_exchange_rate' => 'Tỷ giá hối đoái mở',
                ],
                'open_exchange_app_id' => 'Mở ID ứng dụng tỷ giá hối đoái',
            ],
            'default_currency_warning' => 'Đối với loại tiền tệ mặc định, tỷ giá hối đoái phải là 1.',
        ],
    ],
    'product' => [
        'name' => 'Sản phẩm',
        'description' => 'Xem và cập nhật cài đặt sản phẩm của bạn',
        'product_settings' => 'Cài đặt sản phẩm',
        'product_settings_description' => 'Định cấu hình quy tắc cho sản phẩm',
        'form' => [
            'show_number_of_products' => 'Hiển thị số lượng sản phẩm trong một sản phẩm',
            'show_out_of_stock_products' => 'Hiển thị sản phẩm hết hàng',
            'how_to_display_product_variation_images' => 'Cách hiển thị hình ảnh biến thể sản phẩm',
            'only_variation_images' => 'Chỉ có hình ảnh biến thể',
            'variation_images_and_main_product_images' => 'Hình ảnh biến thể và hình ảnh sản phẩm chính',
            'enable_product_options' => 'Bật tùy chọn sản phẩm',
            'is_enabled_cross_sale_products' => 'Cho phép bán chéo sản phẩm',
            'is_enabled_related_products' => 'Kích hoạt các sản phẩm liên quan',
            'auto_generate_product_sku' => 'Tự động tạo SKU khi tạo sản phẩm',
            'product_sku_format' => 'định dạng mã hàng',
            'product_sku_format_helper' => 'Bạn có thể sử dụng %s (1 ký tự chuỗi) hoặc %d (1 chữ số) trong định dạng để tạo chuỗi ngẫu nhiên. Ví dụ: SKU-%s%s%s-HN-%d%d%d',
        ],
    ],
    'product_search' => [
        'name' => 'Tìm kiếm sản phẩm',
        'description' => 'Xem và cập nhật cài đặt tìm kiếm sản phẩm',
        'product_search_settings' => 'Tìm kiếm sản phẩm',
        'product_search_settings_description' => 'Định cấu hình quy tắc tìm kiếm sản phẩm',
        'form' => [
            'search_for_an_exact_phrase' => 'Tìm kiếm một cụm từ chính xác',
            'search_products_by' => 'Tìm kiếm sản phẩm theo:',
            'enable_filter_products_by_brands' => 'Bật tính năng lọc sản phẩm theo thương hiệu',
            'enable_filter_products_by_tags' => 'Bật tính năng lọc sản phẩm theo thẻ',
            'enable_filter_products_by_attributes' => 'Bật tính năng lọc sản phẩm theo thuộc tính',
        ],
    ],
    'digital_product' => [
        'name' => 'Những sàn phẩm kĩ thuật số',
        'description' => 'Xem và cập nhật cài đặt sản phẩm kỹ thuật số',
        'digital_products_settings' => 'Những sàn phẩm kĩ thuật số',
        'digital_products_settings_description' => 'Định cấu hình quy tắc cho sản phẩm kỹ thuật số',
        'form' => [
            'enable_support_digital_product' => 'Nó có được kích hoạt để hỗ trợ các sản phẩm kỹ thuật số không',
            'allow_guest_checkout_for_digital_products' => 'Cho phép khách thanh toán các sản phẩm kỹ thuật số',
            'disable_physical_product' => 'Vô hiệu hóa sản phẩm vật lý',
        ],
    ],
    'product_review' => [
        'name' => 'Đánh giá sản phẩm',
        'description' => 'Xem và cập nhật cài đặt đánh giá sản phẩm của bạn',
        'form' => [
            'enable_review' => 'Bật đánh giá',
            'review' => [
                'max_file_size' => 'Xem lại kích thước tệp tối đa (MB)',
                'max_file_number' => 'Xem lại số tập tin tối đa',
            ],
            'only_allow_customers_purchased_to_review' => 'Chỉ những khách hàng đã mua sản phẩm mới có thể đánh giá sản phẩm',
            'review_need_to_be_approved' => 'Đánh giá cần phải được phê duyệt trước khi hiển thị trên trang sản phẩm',
            'show_customer_full_name' => 'Hiển thị tên đầy đủ của khách hàng',
            'show_customer_full_name_help' => 'Nếu bỏ chọn, tên khách hàng đánh giá sẽ bị ẩn và thay thế bằng dấu hoa thị (***)',
        ],
    ],
    'shopping' => [
        'name' => 'Mua sắm',
        'description' => 'Xem và cập nhật cài đặt mua sắm của bạn',
        'general_setting' => 'Cài đặt chung',
        'return_settings' => 'Trở lại cài đặt',
        'return_settings_description' => 'Định cấu hình quy tắc cho cài đặt trả lại',
        'form' => [
            'enable_cart' => 'Kích hoạt giỏ hàng',
            'enable_wishlist' => 'Bật danh sách yêu thích',
            'enable_wishlist_sharing' => 'Bật chia sẻ danh sách mong muốn',
            'shared_wishlist_lifetime' => 'Danh sách mong muốn được chia sẻ trọn đời (ngày)',
            'shared_wishlist_lifetime_helper' => 'Thời gian tồn tại của danh sách mong muốn được chia sẻ tính theo ngày. Sau thời gian này, danh sách mong muốn được chia sẻ sẽ bị xóa.',
            'enable_compare' => 'Bật so sánh',
            'enable_order_tracking' => 'Bật theo dõi đơn hàng',
            'enable_quick_buy_button' => 'Kích hoạt nút mua nhanh',
            'enable_order_auto_confirmed' => 'Tự động xác nhận đơn hàng',
            'quick_buy_target' => 'Trang mục tiêu mua nhanh',
            'checkout_page' => 'Trang thanh toán',
            'cart_page' => 'Trang giỏ hàng',
            'cart_destroy_on_logout' => 'Phá hủy giỏ hàng khi đăng xuất',
        ],
    ],
    'checkout' => [
        'name' => 'Tiến hành thanh toán',
        'panel_description' => 'Xem và cập nhật cài đặt thanh toán',
        'description' => 'Định cấu hình quy tắc cho cài đặt thanh toán',
        'form' => [
            'display_bank_info_at_the_checkout_success_page' => 'Hiển thị thông tin ngân hàng tại trang thanh toán thành công',
            'mandatory_form_fields_at_checkout' => 'Các trường bắt buộc tại trang thanh toán:',
            'hide_form_fields_at_checkout' => 'Ẩn trường khách hàng tại trang thanh toán:',
            'load_countries_states_cities_from_location_plugin' => 'Tải quốc gia, tiểu bang, thành phố từ vị trí plugin',
            'load_countries_states_cities_from_location_plugin_placeholder' => 'Sau khi thay đổi tùy chọn này, bạn cần cập nhật lại tất cả các địa chỉ. Bạn nên thiết lập nó một lần.',
            'load_countries_states_cities_from_location_plugin_placeholder_2' => 'Sau đó, bạn cần đi tới Công cụ -> Nhập/Xuất dữ liệu để nhập dữ liệu vị trí.',
            'minimum_order_amount' => 'Số lượng đặt hàng tối thiểu để đặt hàng (:tiền tệ).',
            'zip_code_enabled' => 'Kích hoạt mã zip',
            'billing_address_enabled' => 'Bật địa chỉ thanh toán',
            'display_tax_fields_at_checkout_page' => 'Hiển thị các trường thông tin thuế tại trang thanh toán',
            'use_city_field_as_field_text' => 'Sử dụng trường thành phố làm trường văn bản miễn phí',
            'available_countries' => 'Các quốc gia có sẵn',
            'all' => 'Tất cả',
            'all_helper_text' => 'Nếu bạn bỏ chọn tất cả các quốc gia, nó sẽ áp dụng cho tất cả các quốc gia.',
            'enable_guest_checkout' => 'Bật tính năng thanh toán của khách',
            'recently_viewed' => [
                'enable' => 'Cho phép khách hàng xem sản phẩm gần đây',
                'max' => 'Số lượng sản phẩm được xem gần đây nhất của khách hàng',
                'max_helper' => 'Nếu bạn đặt 0, nó sẽ lưu tất cả các sản phẩm.',
            ],
            'minimum_order_quantity' => 'Số lượng đặt hàng tối thiểu',
            'minimum_order_quantity_helper' => 'Số lượng tối thiểu để đặt hàng. Để nó bằng 0 nếu bạn không muốn đặt nó.',
            'maximum_order_quantity' => 'Số lượng đặt hàng tối đa',
            'maximum_order_quantity_helper' => 'Số lượng tối đa để đặt hàng. Để nó bằng 0 nếu bạn không muốn đặt nó.',
        ],
    ],
    'return' => [
        'name' => 'Trở lại',
        'description' => 'Định cấu hình quy tắc cho cài đặt trả lại',
        'panel_description' => 'Xem và cập nhật cài đặt trả hàng',
        'form' => [
            'is_enabled_order_return' => 'Đã bật tính năng trả lại đơn hàng',
            'allow_partial_return' => 'Cho phép trả lại một phần',
            'allow_partial_return_description' => 'Khách hàng có thể trả lại một số sản phẩm, không cần trả lại toàn bộ sản phẩm trong một đơn hàng.',
            'returnable_days' => 'Ngày hoàn trả',
            'return_settings_helper' => 'Số ngày khách hàng có thể yêu cầu trả lại hàng sau khi hoàn tất đơn hàng.',
        ],
    ],
    'invoice' => [
        'name' => 'Hóa đơn',
        'description' => 'Xem và cập nhật cài đặt hóa đơn của bạn',
        'company_settings' => 'Cài đặt công ty',
        'company_settings_description' => 'Cài đặt Thông tin công ty để lập hoá đơn',
        'form' => [
            'company_name' => 'Tên công ty',
            'company_address' => 'Địa chỉ công ty',
            'company_zipcode' => 'Mã zip công ty',
            'company_email' => 'Email công ty',
            'company_phone' => 'Điện thoại công ty',
            'company_logo' => 'Logo công ty',
            'company_tax_id' => 'Mã số thuế công ty',
            'invoice_code_prefix' => 'Tiền tố mã hóa đơn',
            'using_custom_font_for_invoice' => 'Sử dụng phông chữ tùy chỉnh cho hóa đơn',
            'invoice_font_family' => 'Họ phông chữ hóa đơn (Chỉ hoạt động với ngôn ngữ Latinh)',
            'enable_invoice_stamp' => 'Kích hoạt tem hóa đơn',
            'add_language_support' => 'Thêm hỗ trợ ngôn ngữ',
            'only_latin_languages' => 'Chỉ có ngôn ngữ Latinh',
            'disable_order_invoice_until_order_confirmed' => 'Vô hiệu hóa đơn đặt hàng cho đến khi đơn hàng được xác nhận',
            'date_format' => 'Định dạng ngày tháng',
        ],
    ],
    'tax' => [
        'name' => 'Thuế',
        'description' => 'Xem và cập nhật cài đặt thuế của bạn',
        'tax_setting' => 'Cài đặt thuế',
        'tax_setting_description' => 'Định cấu hình cài đặt thuế',
        'tax_management' => 'Quản lý thuế',
        'tax_management_description' => 'Xem và quản lý thuế của bạn',
        'form' => [
            'enable_tax' => 'Kích hoạt thuế',
            'display_company_invoice_information_fields_at_checkout_page' => 'Hiển thị các trường thông tin hóa đơn của công ty tại trang thanh toán',
            'display_company_invoice_information_fields_at_checkout_page_helper' => 'Nếu tính năng này được bật, các trường thông tin hóa đơn của công ty sẽ được hiển thị tại trang thanh toán. Cần phải điền vào các trường thông tin hóa đơn của công ty.',
            'default_tax_rate' => 'Thuế suất mặc định',
            'default_tax_rate_description' => 'Quan trọng: nó sẽ được áp dụng nếu không có thuế nào được chọn trong sản phẩm.',
            'select_tax' => '-- Lựa chọn --',
            'display_product_price_including_taxes' => 'Hiển thị giá sản phẩm đã bao gồm thuế',
        ],
    ],
    'customer' => [
        'name' => 'Khách hàng',
        'description' => 'Xem và cập nhật cài đặt khách hàng của bạn',
        'customer_setting' => 'Cài đặt khách hàng',
        'customer_setting_description' => 'Định cấu hình cài đặt khách hàng',
        'form' => [
            'verify_customer_email' => 'Xác minh email của khách hàng',
            'verify_customer_email_helper' => 'Khi được kích hoạt, một liên kết xác minh sẽ được gửi đến email của khách hàng, khách hàng cần nhấp vào liên kết này để xác minh email của mình trước khi có thể đăng nhập.',
            'login_using_phone' => 'Đăng nhập bằng số điện thoại thay vì email',
            'login_option' => 'Tùy chọn đăng nhập',
            'login_with_email' => 'Đăng nhập bằng email',
            'login_with_phone' => 'Đăng nhập bằng điện thoại',
            'login_with_email_or_phone' => 'Đăng nhập bằng email hoặc điện thoại',
            'enabled_customer_account_deletion' => 'Cho phép xóa tài khoản khách hàng',
            'enabled_customer_account_deletion_helper' => 'Khi tính năng này được bật, khách hàng có thể xóa tài khoản của mình trong bảng điều khiển khách hàng → Cài đặt tài khoản.',
            'enabled_customer_dob_field' => 'Bật trường ngày sinh của khách hàng',
            'enabled_customer_dob_field_helper' => 'Khi tính năng này được bật, khách hàng có thể nhập ngày sinh của mình trong bảng điều khiển khách hàng → Cài đặt tài khoản.',
        ],
    ],
    'shipping' => [
        'name' => 'Đang chuyển hàng',
        'description' => 'Xem và cập nhật cài đặt vận chuyển',
        'shipping_rule' => 'Quy tắc vận chuyển',
        'shipping_rule_description' => 'Cấu hình các quy tắc để tính phí vận chuyển',
        'shipping_setting' => 'Cài đặt vận chuyển',
        'shipping_setting_description' => 'Định cấu hình cài đặt vận chuyển',
        'form' => [
            'hide_other_shipping_options_if_it_has_free_shipping' => 'Ẩn các tùy chọn vận chuyển khác nếu nó có giao hàng miễn phí trong danh sách',
        ],
    ],
    'webhook' => [
        'name' => 'Webhook',
        'description' => 'Định cấu hình cài đặt webhook',
        'webhook_setting' => 'Webhook',
        'webhook_setting_description' => 'Gửi webhook khi đặt hàng',
        'form' => [
            'order_placed_webhook_url' => 'URL webhook được đặt hàng (phương thức: POST)',
            'order_placed_webhook_url_placeholder' => 'https://...',
            'order_placed_webhook_url_helper' => 'Để nhận thông báo khi đặt hàng, bạn có thể thiết lập URL webhook bên ngoài. Nếu có URL webhook bên ngoài, bạn có thể nhập URL này hoặc để trống.',
        ],
    ],
    'store_locator' => [
        'name' => 'Định vị cửa hàng',
        'description' => 'Xem và cập nhật danh sách chuỗi của bạn',
        'store_locator_description' => 'Tất cả danh sách các chuỗi, cửa hàng chính, chi nhánh của bạn, v.v. Các địa điểm này có thể được sử dụng để theo dõi doanh số bán hàng và giúp chúng tôi định cấu hình mức thuế để tính khi bán sản phẩm.',
        'form' => [
            'change_primary_store' => 'thay đổi vị trí cửa hàng mặc định',
            'add_location' => 'Thêm vị trí',
            'edit_location' => 'Chỉnh sửa vị trí',
            'delete_location' => 'Xóa vị trí',
            'delete_location_confirmation' => 'Bạn có chắc chắn muốn xóa địa điểm này? Hành động này không thể hoàn tác được.',
            'change_primary_location' => 'Thay đổi vị trí chính',
            'save_location' => 'Lưu vị trí',
            'add_new' => 'Thêm mới',
        ],
    ],
    'tracking' => [
        'name' => 'Theo dõi',
        'description' => 'Xem và cập nhật cài đặt theo dõi',
        'manage_tracking' => 'Quản lý theo dõi',
        'manage_tracking_description' => 'Quản lý theo dõi: UTM, Facebook, Google Tag Manager...',
        'form' => [
            'enable_facebook_pixel' => 'Kích hoạt Facebook Pixel (Meta Pixel)',
            'facebook_pixel_helper' => 'Truy cập https://developers.facebook.com/docs/meta-pixel để tạo Facebook Pixel.',
            'facebook_pixel_id' => 'ID pixel Facebook',
            'enable_google_tag_manager_tracking_events' => 'Bật sự kiện theo dõi trình quản lý thẻ của Google',
            'google_tag_manager_tracking_info' => 'You need to add Google Tag Manager to tracking your website, please go to Admin → Settings → :website_tracking.',
        ],
    ],
    'marketplace' => [
        'name' => 'Thương trường',
        'description' => 'Xem và cập nhật cài đặt thị trường',
    ],
    'standard_and_format' => [
        'name' => 'Tiêu chuẩn & Định dạng',
        'panel_description' => 'Xem và cập nhật cài đặt định dạng và tiêu chuẩn',
        'description' => 'Các tiêu chuẩn và định dạng được sử dụng để tính toán những thứ như giá sản phẩm, trọng lượng vận chuyển và thời gian đặt hàng.',
        'form' => [
            'change_order_format' => 'Chỉnh sửa định dạng mã đơn hàng (tùy chọn)',
            'change_order_format_description' => 'Mã đơn hàng mặc định bắt đầu từ: number. Bạn có thể thay đổi chuỗi bắt đầu hoặc kết thúc để tạo mã đơn hàng mà bạn muốn, ví dụ "DH-: number" hoặc ": number-A"',
            'start_with' => 'Bắt đầu với',
            'end_with' => 'Kết thúc với',
            'order_will_be_shown' => 'Mã đơn hàng của bạn sẽ được hiển thị',
            'weight_unit' => 'Đơn vị trọng lượng',
            'height_unit' => 'Đơn vị chiều dài/chiều cao',
            'weight_unit_gram' => 'Gam (g)',
            'weight_unit_kilogram' => 'Kilôgam (kg)',
            'weight_unit_lb' => 'Bảng Anh (lb)',
            'weight_unit_oz' => 'Ounce (oz)',
            'height_unit_cm' => 'centimet (cm)',
            'height_unit_m' => 'Mét (m)',
            'height_unit_inch' => 'inch',
        ],
    ],
    'sale_popup' => [
        'name' => 'Cửa sổ bật lên bán hàng',
        'description' => 'Tùy chỉnh cài đặt cửa sổ bật lên bán hàng của bạn một cách dễ dàng',
    ],
    'flash_sale' => [
        'name' => 'Giảm giá thần tốc',
        'description' => 'Xem và cập nhật cài đặt flash sale',
        'enable' => 'Bật bán hàng chớp nhoáng',
        'show_sale_count_left' => 'Hiển thị số lượng bán còn lại',
        'show_sale_count_left_description' => 'Tùy chọn này sẽ hiển thị số lượng sản phẩm còn lại trong đợt flash sale.',
    ],
    'payment_method_cod_minimum_amount' => 'Minimum order amount - :currency (Optional)',
    'display_bank_info_at_the_checkout_success_page' => 'Hiển thị thông tin ngân hàng tại trang thanh toán thành công?',
    'invoice_templates' => 'Mẫu hóa đơn',
];
