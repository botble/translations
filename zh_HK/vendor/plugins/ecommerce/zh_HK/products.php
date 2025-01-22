<?php

return [
    'name' => '產品',
    'description' => '查看和更新你的產品設置',
    'create' => '新產品',
    'create_product_type' => [
        'physical' => '新實體產品',
        'digital' => '新數碼產品',
    ],
    'edit' => '編輯產品 - :name',
    'form' => [
        'name' => '名稱',
        'name_placeholder' => '產品名稱（最多120個字符）',
        'description' => '描述',
        'description_placeholder' => '產品簡介（最多400個字符）',
        'categories' => '類別',
        'content' => '內容',
        'price' => '價格',
        'quantity' => '數量',
        'brand' => '品牌',
        'width' => '闊度',
        'height' => '高度',
        'weight' => '重量',
        'date' => [
            'start' => '由日期',
            'end' => '至今',
        ],
        'image' => '圖片',
        'collections' => '產品系列',
        'labels' => '標籤',
        'price_sale' => '價格銷售',
        'product_type' => [
            'title' => '產品類型',
        ],
        'product' => '產品',
        'total' => '總計',
        'sub_total' => '小計',
        'shipping_fee' => '運費',
        'discount' => '折扣',
        'options' => '選項',
        'shipping' => [
            'height' => '高度',
            'length' => '長度',
            'title' => '運送',
            'weight' => '重量',
            'wide' => '闊',
        ],
        'barcode' => '條碼 (ISBN, UPC, GTIN, 等等)',
        'barcode_placeholder' => '輸入條碼',
        'cost_per_item' => '每件成本',
        'cost_per_item_placeholder' => '輸入每件商品的成本',
        'cost_per_item_helper' => '客戶不會看到這個價格。',
        'stock' => [
            'allow_order_when_out' => '容許顧客在此產品缺貨時結帳',
            'in_stock' => '有貨',
            'out_stock' => '缺貨',
            'title' => '庫存狀態',
        ],
        'storehouse' => [
            'no_storehouse' => '無倉庫管理',
            'storehouse' => '倉庫管理',
            'title' => '倉庫',
            'quantity' => '數量',
        ],
        'tax' => '稅',
        'taxes' => '稅務',
        'is_default' => '係默認',
        'action' => '行動',
        'restock_quantity' => '補貨數量',
        'remain' => '保持',
        'choose_discount_period' => '選擇折扣期間',
        'cancel' => '取消',
        'no_results' => '冇結果!',
        'value' => '值',
        'attribute_name' => '屬性名稱',
        'add_more_attribute' => '添加更多屬性',
        'continue' => '繼續',
        'add_new_attributes' => '新增屬性',
        'add_new_attributes_description' => '添加新屬性有助於產品擁有多種選擇，例如尺寸或顏色。',
        'create_product_variations' => ':link 來創建產品變體!',
        'tags' => '標籤',
        'write_some_tags' => '寫一些標籤',
        'variation_existed' => '這個變化是存在的。',
        'no_attributes_selected' => '冇選擇任何屬性！',
        'added_variation_success' => '成功添加變體！',
        'updated_variation_success' => '成功更新變體！',
        'created_all_variation_success' => '成功創建所有變體！',
        'updated_product_attributes_success' => '成功更新產品屬性！',
        'stock_status' => '庫存狀態',
        'auto_generate_sku' => '自動生成SKU？',
        'featured_image' => '特色圖片（可選）',
        'product_id' => '產品編號',
        'price_sale_percent_helper' => '折扣 :percent 由原價。',
        'minimum_order_quantity' => '最少訂購量',
        'minimum_order_quantity_helper' => '最低下單數量，如果數值為0，則沒有限制。',
        'maximum_order_quantity' => '最大訂購數量',
        'maximum_order_quantity_helper' => '下單的最大數量，如果值為0，則沒有限制。',
        'video' => '影片',
        'video_file' => '文件',
        'video_url' => '或外部視頻網址',
        'video_url_help' => '輸入 YouTube 或 Vimeo 影片網址',
        'enter_video_url' => '輸入視頻網址',
        'video_thumbnail' => '影片縮圖',
        'video_thumbnail_help' => '選擇一個視頻的縮略圖。如果未選擇，將會自動從視頻網址獲取（如果可用）。',
        'barcode_existed' => '這個條碼已被另一個產品使用。請輸入另一個條碼。',
        'barcode_helper' => '每個產品必須獨特。',
    ],
    'price' => '價格',
    'quantity' => '數量',
    'type' => '類型',
    'image' => '縮圖',
    'sku' => 'SKU',
    'sku_line' => 'SKU: :sku',
    'variation_sku' => '變化SKU',
    'brand' => '品牌',
    'cannot_delete' => '產品無法被刪除',
    'product_deleted' => '產品已刪除',
    'product_collections' => '產品系列',
    'products' => '產品',
    'menu' => '產品',
    'control' => [
        'button_add_image' => '添加圖片',
    ],
    'price_sale' => '售價',
    'price_group_title' => '經理產品價格',
    'store_house_group_title' => '經理倉庫',
    'shipping_group_title' => '經理運輸',
    'overview' => '概覽',
    'attributes' => '屬性',
    'product_has_variations' => '產品有變化',
    'manage_products' => '管理產品',
    'add_new_product' => '新增產品',
    'start_by_adding_new_product' => '開始添加新產品。',
    'edit_this_product' => '編輯此產品',
    'delete' => '刪除',
    'related_products' => '相關產品',
    'cross_selling_products' => '交叉銷售產品',
    'up_selling_products' => '推銷產品',
    'grouped_products' => '分組產品',
    'search_products' => '搜尋產品',
    'selected_products' => '選定產品',
    'edit_variation_item' => '編輯',
    'variations_box_description' => '點擊「編輯屬性」以添加/移除變體的屬性，或點擊「添加新變體」以添加變體。',
    'save_changes' => '保存更改',
    'continue' => '繼續',
    'edit_attribute' => '編輯屬性',
    'select_attribute' => '選擇屬性',
    'add_new_variation' => '新增變體',
    'edit_variation' => '編輯變體',
    'generate_variations' => '產生變化',
    'generate_variations_confirmation' => '你確定要為這個產品生成變體嗎？',
    'delete_variation' => '刪除變體？',
    'delete_variation_confirmation' => '你確定要刪除這個變體嗎？這個動作無法撤銷。',
    'delete_variations_confirmation' => '你確定要刪除這些變體嗎？這個動作無法撤銷。',
    'product_create_validate_name_required' => '請輸入產品名稱',
    'product_create_validate_sale_price_max' => '折扣必須少於原價',
    'product_create_validate_cost_per_item_max' => '每件商品的成本必須低於原價',
    'product_create_validate_sale_price_required_if' => '必須在你想安排促銷時輸入折扣',
    'product_create_validate_end_date_after' => '結束日期必須在開始日期之後',
    'product_create_validate_start_date_required_if' => '折扣開始日期在選擇排程時不能留空',
    'product_create_validate_sale_price' => '選擇排程時，折扣不能留空',
    'stock_statuses' => [
        'in_stock' => '有存貨',
        'out_of_stock' => '缺貨',
        'on_backorder' => '缺貨中',
    ],
    'stock_status' => '庫存狀態',
    'processing' => '處理中...',
    'delete_selected_variations' => '刪除選定的變體',
    'delete_variations' => '刪除變體',
    'category' => '類別',
    'product_price_flash_sale_warning' => '這個產品正在閃購 <strong>:name</strong>，所以它的價格是 <strong>:price</strong>。',
    'product_price_discount_warning' => '這個產品正在打折 <strong>:name</strong>，所以它的價格是 <strong>:price</strong>。',
    'product_image' => '產品圖片',
    'product_name' => '產品名稱',
    'product_link' => '產品連結',
    'types' => [
        'physical' => '身體',
        'digital' => '數碼',
    ],
    'digital_attachments' => [
        'title' => '數碼附件',
        'add' => '添加附件',
        'file_name' => '檔案名稱',
        'file_size' => '檔案大小',
        'unsaved' => '未儲存',
        'add_external_link' => '添加外部連結',
        'enter_file_name' => '輸入文件名稱',
        'enter_external_link_download' => '輸入外部鏈接下載',
        'enter_file_size' => '輸入文件大小',
        'external_link_download' => '外部鏈接下載',
        'generate_license_code_after_purchasing_product' => '購買此產品後生成授權碼？',
        'notify_attachment_updated' => '當附件更新時，向客戶發送電子郵件',
    ],
    'this_action_will_reload_page' => '這個動作將重新載入頁面以更新數據！',
    'select' => '選擇',
    'set_this_variant_as_default' => '將此變體設為默認',
    'download' => '下載',
    'cross_sell_price_type' => [
        'title' => '價格類型',
        'fixed' => '固定',
        'percent' => '百分比',
    ],
    'cross_sell_help' => [
        'price' => '* 價格欄位',
        'price_description' => '輸入你想從原價減去的金額。例如：如果原價是$100，輸入20以將價格減至$80。',
        'type' => '* 類型字段',
        'type_description' => '選擇折扣類型：固定（減少特定金額）或百分比（按百分比減少）。',
    ],
    'apply_for_all_variations' => '申請所有變體',
    'export' => [
        'description' => '將您的產品數據導出為 CSV 或 Excel 文件。',
        'total_items' => '總項目',
        'total_products' => '總產品',
        'total_variations' => '總變異',
    ],
    'import' => [
        'description' => '從CSV或Excel文件導入您的產品數據。',
        'rules' => [
            'in' => ':attribute 必須是定義值之一: :values。',
            'required_string_max' => ':attribute 是必需的，並且必須是一個最大長度為 :max 字符的字符串。',
            'nullable_string' => ':attribute 可以留空，或者如果提供的話必須是字符串。',
            'nullable_string_max' => ':attribute 可以留空，或者如果提供的話，必須是一個最大長度為 :max 字符的字符串。',
            'nullable_bool' => '無論 :attribute 是否可以留空，或者如果提供的話必須是一個布爾值。',
            'nullable_numeric_min' => ':attribute 可以留空，或者如果提供的話必須是一個非負數。',
            'nullable_numeric_min_max' => ':attribute 可以留空，或者如果提供的話，必須是介乎 :min 和 :max 之間的數字。',
            'nullable_array' => ':attribute 可以留空，或者如果指定的話必須作為一個數組提供。',
            'nullable_date_required_if' => ':attribute 可以留空，或者如果提供的話必須是一個有效的日期，如果指定了 :required 則是必需的。',
            'nullable_date_after' => ':attribute 可以留空，或者如果提供了 :after，必須是一個有效的日期。',
        ],
        'updated_message' => '成功更新了 :count 件產品！',
    ],
    'import_products_intro' => '或者從CSV/Excel導入產品',
    'select_attributes' => '選擇屬性以創建變體：',
    'all' => '所有',
];
