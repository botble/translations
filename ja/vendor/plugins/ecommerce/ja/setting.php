<?php

return [
    'save_settings' => '設定の保存',
    'general' => [
        'name' => '一般的な',
        'description' => '一般設定の表示と更新',
    ],
    'currency' => [
        'name' => '通貨',
        'description' => '通貨設定の表示と更新',
        'currency_setting_description' => 'ウェブサイトで使用する通貨の表示と更新',
        'form' => [
            'enable_auto_detect_visitor_currency' => '訪問者の通貨の自動検出を有効にする',
            'add_space_between_price_and_currency' => '価格と通貨の間にスペースを追加します',
            'thousands_separator' => '千の位の区切り記号',
            'decimal_separator' => '小数点区切り文字',
            'separator_period' => '期間 （。）',
            'separator_comma' => 'カンマ(,)',
            'separator_space' => '空間 （ ）',
            'api_key' => 'API為替レートキー',
            'api_key_helper' => 'Get exchange rate API key on :link',
            'update_currency_rates' => '通貨レートを更新する',
            'use_exchange_rate_from_api' => 'APIからの為替レートを使用',
            'clear_cache_rates' => 'クリアキャッシュレート',
            'auto_detect_visitor_currency_description' => 'ブラウザの言語に基づいて訪問者の通貨を検出します。デフォルトの通貨選択をオーバーライドします。',
            'exchange_rate' => [
                'api_provider' => 'APIプロバイダー',
                'select' => '-- 選択 --',
                'none' => 'なし',
                'provider' => [
                    'api_layer' => 'APIレイヤー',
                    'open_exchange_rate' => 'オープン為替レート',
                ],
                'open_exchange_app_id' => 'オープン為替レートアプリID',
            ],
            'default_currency_warning' => 'デフォルトの通貨の場合、為替レートは 1 である必要があります。',
        ],
    ],
    'product' => [
        'name' => '製品',
        'description' => '製品設定の表示と更新',
        'product_settings' => '製品設定',
        'product_settings_description' => '製品のルールを構成する',
        'form' => [
            'show_number_of_products' => '製品単体の製品数を表示',
            'show_out_of_stock_products' => '在庫切れの商品を表示する',
            'how_to_display_product_variation_images' => '製品バリエーション画像の表示方法',
            'only_variation_images' => 'バリエーション画像のみ',
            'variation_images_and_main_product_images' => 'バリエーション画像と主要商品画像',
            'enable_product_options' => '製品オプションを有効にする',
            'is_enabled_cross_sale_products' => 'クロスセール商品を有効にする',
            'is_enabled_related_products' => '関連製品を有効にする',
            'auto_generate_product_sku' => '製品作成時にSKUを自動生成',
            'product_sku_format' => 'SKU形式',
            'product_sku_format_helper' => '%s (1 文字列文字) または %d (1 桁) を形式で使用して、ランダムな文字列を生成できます。例: SKU-%s%s%s-HN-%d%d%d',
            'enable_product_specification' => '製品仕様を有効にする',
            'enable_product_specification_help' => '有効にすると、製品詳細ページに製品仕様表が表示されます。',
            'make_product_barcode_required' => '商品バーコードを必須にする',
            'make_product_barcode_required_helper' => '有効にすると、製品の作成時に製品バーコードが必要になります。',
        ],
    ],
    'product_search' => [
        'name' => '製品検索',
        'description' => '製品検索設定の表示と更新',
        'product_search_settings' => '製品検索',
        'product_search_settings_description' => '製品検索のルールを構成する',
        'form' => [
            'search_for_an_exact_phrase' => '完全に一致する語句を検索する',
            'search_products_by' => '製品を次の方法で検索します。',
            'enable_filter_products_by_brands' => 'ブランドごとに製品のフィルターを有効にする',
            'enable_filter_products_by_tags' => 'タグによる商品のフィルターを有効にする',
            'enable_filter_products_by_attributes' => '属性による製品のフィルターを有効にする',
        ],
    ],
    'digital_product' => [
        'name' => 'デジタル製品',
        'description' => 'デジタル製品設定の表示と更新',
        'digital_products_settings' => 'デジタル製品',
        'digital_products_settings_description' => 'デジタル製品のルールを構成する',
        'form' => [
            'enable_support_digital_product' => 'デジタル製品のサポートが有効になっていますか',
            'allow_guest_checkout_for_digital_products' => 'ゲストによるデジタル製品のチェックアウトを許可する',
            'disable_physical_product' => '物理的な製品を無効にする',
        ],
    ],
    'product_review' => [
        'name' => '製品レビュー',
        'description' => '製品レビュー設定の表示と更新',
        'form' => [
            'enable_review' => 'レビューを有効にする',
            'review' => [
                'max_file_size' => '最大ファイル サイズ (MB) を確認する',
                'max_file_number' => '最大ファイル数を確認する',
            ],
            'only_allow_customers_purchased_to_review' => '商品を購入されたお客様のみが商品をレビューできます',
            'review_need_to_be_approved' => 'レビューは商品ページに表示される前に承認が必要です',
            'show_customer_full_name' => '顧客のフルネームを表示',
            'show_customer_full_name_help' => 'チェックを外した場合、レビューを行った顧客の名前は非表示になり、アスタリスク (***) に置き換えられます。',
        ],
    ],
    'shopping' => [
        'name' => '買い物',
        'description' => 'ショッピング設定の表示と更新',
        'general_setting' => '一般設定',
        'return_settings' => '設定を返す',
        'return_settings_description' => '返品設定のルールを構成する',
        'form' => [
            'enable_cart' => 'ショッピングカートを有効にする',
            'enable_wishlist' => 'ウィッシュリストを有効にする',
            'enable_wishlist_sharing' => 'ウィッシュリストの共有を有効にする',
            'shared_wishlist_lifetime' => '共有ウィッシュリストの有効期間 (日)',
            'shared_wishlist_lifetime_helper' => '共有ウィッシュリストの存続期間 (日数)。この時間が経過すると、共有ウィッシュリストは削除されます。',
            'enable_compare' => '比較を有効にする',
            'enable_order_tracking' => '注文追跡を有効にする',
            'enable_quick_buy_button' => 'クイック購入ボタンを有効にする',
            'enable_order_auto_confirmed' => '注文の自動確認',
            'quick_buy_target' => 'クイック購入対象ページ',
            'checkout_page' => 'チェックアウトページ',
            'cart_page' => 'カートページ',
            'cart_destroy_on_logout' => 'ログアウト時にカートを破棄する',
        ],
    ],
    'checkout' => [
        'name' => 'チェックアウト',
        'panel_description' => 'チェックアウト設定の表示と更新',
        'description' => 'チェックアウト設定のルールを構成する',
        'form' => [
            'display_bank_info_at_the_checkout_success_page' => 'チェックアウト成功ページに銀行情報を表示する',
            'mandatory_form_fields_at_checkout' => 'チェックアウトページの必須フィールド:',
            'hide_form_fields_at_checkout' => 'チェックアウトページで顧客フィールドを非表示にします:',
            'load_countries_states_cities_from_location_plugin' => 'プラグインの場所から国、州、都市をロードします',
            'load_countries_states_cities_from_location_plugin_placeholder' => 'このオプションを変更した後、すべてのアドレスを再度更新する必要があります。一度設定しておくといいでしょう。',
            'load_countries_states_cities_from_location_plugin_placeholder_2' => '次に、[ツール] -> [データのインポート/エクスポート] に移動して、位置データをインポートする必要があります。',
            'minimum_order_amount' => '注文するための最低注文金額 (:currency)。',
            'zip_code_enabled' => '郵便番号を有効にする',
            'billing_address_enabled' => '請求先住所を有効にする',
            'display_tax_fields_at_checkout_page' => 'チェックアウトページに税情報フィールドを表示する',
            'use_city_field_as_field_text' => '都市フィールドを自由テキストフィールドとして使用する',
            'available_countries' => '利用可能な国',
            'all' => '全て',
            'all_helper_text' => 'すべての国のチェックを外すとすべての国に適用されます。',
            'enable_guest_checkout' => 'ゲストチェックアウトを有効にする',
            'recently_viewed' => [
                'enable' => '顧客が最近閲覧した製品を有効にする',
                'max' => '顧客が最近閲覧した製品の最大数',
                'max_helper' => '0 を設定すると、すべての商品が保存されます。',
            ],
            'minimum_order_quantity' => '最低注文数量',
            'minimum_order_quantity_helper' => '注文するための最小数量。設定したくない場合は0にしておきます。',
            'maximum_order_quantity' => '最大注文数量',
            'maximum_order_quantity_helper' => '注文できる最大数量。設定したくない場合は0にしておきます。',
            'default_country_at_checkout_page' => 'チェックアウトページのデフォルトの国',
            'default_country_at_checkout_page_placeholder' => '国を選択してください',
            'default_country_at_checkout_page_help' => '国を選択すると、その国はチェックアウト ページでデフォルトで選択されます。',
            'checkout_product_quantity_editable' => '顧客がチェックアウトページで商品数量を変更できるようにする',
        ],
    ],
    'return' => [
        'name' => '戻る',
        'description' => '返品設定のルールを構成する',
        'panel_description' => '返品設定の表示と更新',
        'form' => [
            'is_enabled_order_return' => '注文返品が有効になっています',
            'allow_partial_return' => '部分的な返品を許可する',
            'allow_partial_return_description' => '顧客は少数の製品を返品できますが、注文内のすべての製品を返品する必要はありません。',
            'returnable_days' => '返却可能日数',
            'return_settings_helper' => '注文完了後に顧客が返品をリクエストできる日数。',
        ],
    ],
    'invoice' => [
        'name' => '請求書',
        'description' => '請求書の設定を表示および更新する',
        'company_settings' => '会社の設定',
        'company_settings_description' => '請求書発行用の会社情報の設定',
        'form' => [
            'company_name' => '会社名',
            'company_address' => '会社住所',
            'company_zipcode' => '会社の郵便番号',
            'company_email' => '会社のメールアドレス',
            'company_phone' => '会社の電話',
            'company_logo' => '会社ロゴ',
            'company_tax_id' => '法人納税者番号',
            'invoice_code_prefix' => '請求書コードのプレフィックス',
            'using_custom_font_for_invoice' => '請求書にカスタムフォントを使用する',
            'invoice_font_family' => '請求書のフォント ファミリー (ラテン語でのみ機能します)',
            'enable_invoice_stamp' => '請求書スタンプを有効にする',
            'add_language_support' => '言語サポートを追加する',
            'only_latin_languages' => 'ラテン語のみ',
            'disable_order_invoice_until_order_confirmed' => '注文が確認されるまで注文請求書を無効にする',
            'date_format' => '日付形式',
        ],
    ],
    'tax' => [
        'name' => '税金',
        'description' => '税金設定の表示と更新',
        'tax_setting' => '税金の設定',
        'tax_setting_description' => '税金設定を構成する',
        'tax_management' => '税金の管理',
        'tax_management_description' => '税金の表示と管理',
        'form' => [
            'enable_tax' => '税金を有効にする',
            'display_company_invoice_information_fields_at_checkout_page' => 'チェックアウトページに会社の請求書情報フィールドを表示します',
            'display_company_invoice_information_fields_at_checkout_page_helper' => '有効にすると、会社の請求書情報フィールドがチェックアウト ページに表示されます。会社の請求書情報フィールドに記入する必要があります。',
            'default_tax_rate' => 'デフォルト税率',
            'default_tax_rate_description' => '重要: 製品で税金が選択されていない場合に適用されます。',
            'select_tax' => '-- 選択 --',
            'display_product_price_including_taxes' => '商品価格は税込みで表示',
        ],
    ],
    'customer' => [
        'name' => 'お客様',
        'description' => '顧客設定の表示と更新',
        'customer_setting' => '顧客設定',
        'customer_setting_description' => '顧客設定を構成する',
        'form' => [
            'verify_customer_email' => '顧客のメールアドレスを確認する',
            'verify_customer_email_helper' => '有効にすると、検証リンクが顧客の電子メールに送信されます。顧客はログインする前に、このリンクをクリックして電子メールを検証する必要があります。',
            'login_using_phone' => '電子メールの代わりに電話番号でサインインする',
            'login_option' => 'ログインオプション',
            'login_with_email' => 'メールでログイン',
            'login_with_phone' => '電話でログイン',
            'login_with_email_or_phone' => 'メールまたは電話でログイン',
            'enabled_customer_account_deletion' => '顧客アカウントの削除を有効にする',
            'enabled_customer_account_deletion_helper' => '有効にすると、顧客は顧客ダッシュボード → アカウント設定でアカウントを削除できます。',
            'enabled_customer_dob_field' => '顧客の生年月日フィールドを有効にする',
            'enabled_customer_dob_field_helper' => '有効にすると、顧客は顧客ダッシュボード→アカウント設定で生年月日を入力できます。',
            'make_customer_phone_number_required' => '顧客の電話番号を必須にする',
            'make_customer_phone_number_required_helper' => '有効にすると、顧客は登録時に電話番号を入力する必要があります。電話番号でログインしているお客様には必ず必要となります。',
        ],
    ],
    'shipping' => [
        'name' => '配送',
        'description' => '配送設定の表示と更新',
        'shipping_rule' => '配送ルール',
        'shipping_rule_description' => '送料を計算するルールを設定する',
        'shipping_setting' => '配送設定',
        'shipping_setting_description' => '配送設定を構成する',
        'form' => [
            'hide_other_shipping_options_if_it_has_free_shipping' => 'リストに送料無料がある場合、他の配送オプションを非表示にする',
            'disable_shipping_options' => '配送オプションを無効にする',
            'disable_shipping_options_helper' => '配送オプションはチェックアウトページで削除され、顧客は配送オプションを選択できなくなります。',
        ],
    ],
    'webhook' => [
        'name' => 'Webhook',
        'description' => 'Webhook 設定を構成する',
        'webhook_setting' => 'Webhook',
        'webhook_setting_description' => '注文時にWebhookを送信する',
        'form' => [
            'order_placed_webhook_url' => '注文済みの Webhook URL (メソッド: POST)',
            'order_placed_webhook_url_placeholder' => 'https://...',
            'order_placed_webhook_url_helper' => '注文時に通知を受け取るには、外部 Webhook URL を設定します。外部 Webhook URL がある場合は、この URL を入力するか、空のままにすることができます。',
        ],
    ],
    'store_locator' => [
        'name' => '店舗検索',
        'description' => 'チェーンのリストを表示および更新する',
        'store_locator_description' => 'チェーン、本店、支店などのすべてのリスト。これらの場所は、売上を追跡し、製品販売時に請求する税率を構成するために使用できます。',
        'form' => [
            'change_primary_store' => 'デフォルトの店舗検索を変更する',
            'add_location' => '場所を追加',
            'edit_location' => '場所を編集する',
            'delete_location' => '場所の削除',
            'delete_location_confirmation' => 'この場所を削除してもよろしいですか?この操作は元に戻すことができません。',
            'change_primary_location' => '主な場所を変更する',
            'save_location' => '場所を保存する',
            'add_new' => '新規追加',
        ],
    ],
    'tracking' => [
        'name' => 'トラッキング',
        'description' => '追跡設定の表示と更新',
        'manage_tracking' => '追跡を管理する',
        'manage_tracking_description' => 'トラッキングの管理: UTM、Facebook、Google タグ マネージャー...',
        'form' => [
            'enable_facebook_pixel' => 'Facebook ピクセル (メタ ピクセル) を有効にする',
            'facebook_pixel_helper' => 'https://developers.facebook.com/docs/meta-pixel に移動して Facebook Pixel を作成します。',
            'facebook_pixel_id' => 'Facebook ピクセル ID',
            'enable_google_tag_manager_tracking_events' => 'Google タグ マネージャーのイベント追跡を有効にする',
            'google_tag_manager_tracking_info' => 'You need to add Google Tag Manager to tracking your website, please go to Admin → Settings → :website_tracking.',
        ],
    ],
    'marketplace' => [
        'name' => '市場',
        'description' => 'マーケットプレイスの設定を表示および更新する',
    ],
    'standard_and_format' => [
        'name' => '標準とフォーマット',
        'panel_description' => '標準設定とフォーマット設定の表示と更新',
        'description' => '標準と形式は、製品価格、配送重量、注文時間などの計算に使用されます。',
        'form' => [
            'change_order_format' => '注文コード形式の編集 (オプション)',
            'change_order_format_description' => 'デフォルトの注文コードは番号で始まります。開始文字列または終了文字列を変更して、「DH-: 数値」または「: 数値-A」など、必要な順序コードを作成できます。',
            'start_with' => 'から始める',
            'end_with' => 'で終わる',
            'order_will_be_shown' => '注文コードが表示されます',
            'weight_unit' => '重量の単位',
            'height_unit' => '単位長さ/高さ',
            'weight_unit_gram' => 'グラム(g)',
            'weight_unit_kilogram' => 'キログラム (kg)',
            'weight_unit_lb' => 'ポンド(lb)',
            'weight_unit_oz' => 'オンス (オンス)',
            'height_unit_cm' => 'センチメートル (cm)',
            'height_unit_m' => 'メートル(m)',
            'height_unit_inch' => 'インチ',
        ],
    ],
    'sale_popup' => [
        'name' => 'セールポップアップ',
        'description' => 'セールポップアップ設定を簡単にカスタマイズ',
    ],
    'flash_sale' => [
        'name' => 'フラッシュセール',
        'description' => 'フラッシュセール設定の表示と更新',
        'enable' => 'フラッシュセールを有効にする',
        'show_sale_count_left' => '残りの販​​売数を表示',
        'show_sale_count_left_description' => 'このオプションでは、フラッシュ セールに残っている製品の数が表示されます。',
    ],
    'payment_method_cod_minimum_amount' => 'Minimum order amount - :currency (Optional)',
    'payment_method_minimum_amount' => 'Minimum order amount - :currency (Optional)',
    'display_bank_info_at_the_checkout_success_page' => 'チェックアウト成功ページに銀行情報を表示しますか?',
    'invoice_templates' => '請求書のテンプレート',
];