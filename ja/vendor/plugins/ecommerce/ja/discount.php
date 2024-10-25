<?php

return [
    'name' => '割引',
    'create' => '割引を作成する',
    'edit' => '割引を編集する',
    'invalid_coupon' => 'このクーポンは無効か期限切れです。',
    'cannot_use_same_time_with_other_discount_program' => '他の割引制度との併用不可！',
    'not_used' => 'このクーポンはまだ使用されていません。',
    'detail' => '詳細',
    'used' => '使用済み',
    'intro' => [
        'title' => '割引/クーポンコードの管理',
        'description' => '製品のクーポン コードやプロモーションを作成します。',
        'button_text' => '割引を作成する',
    ],
    'expired' => '期限切れ',
    'discount_promotion' => '割引プロモーション',
    'can' => 'できる',
    'cannot' => 'できない',
    'use_with_promotion' => 'プロモーションで使用される',
    'create_discount_validate_title_required_if' => 'プロモーションの名前を入力してください',
    'create_discount_validate_code_required_if' => 'プロモーション コードを入力してください',
    'create_discount_validate_value_required' => '金額は0より大きくなければなりません',
    'create_discount_validate_target_required' => '昇格するオブジェクトが選択されていません',
    'enums' => [
        'type-options' => [
            'amount' => '金額 - 固定',
            'percentage' => '割引 ＃_＃',
            'shipping' => '送料無料',
            'same-price' => '同価格',
        ],
        'types' => [
            'coupon' => 'クーポン',
            'promotion' => 'プロモーション',
        ],
        'targets' => [
            'all-orders' => 'すべての注文',
            'customer' => 'お客様',
            'amount-minimum-order' => '最低注文金額',
            'product-variant' => '製品バリエーション',
            'group-products' => '製品コレクション',
            'specific-product' => '特定の製品',
            'products-by-category' => 'カテゴリ別の製品',
        ],
    ],
    'discount' => '割引',
    'create_coupon_code' => 'クーポンコードを作成する',
    'create_discount_promotion' => '割引プロモーションを作成する',
    'generate_coupon_code' => 'クーポンコードを生成する',
    'customers_will_enter_this_coupon_code_when_they_checkout' => '顧客はチェックアウト時にこのクーポン コードを入力します',
    'select_type_of_discount' => '割引の種類を選択してください',
    'coupon_code' => 'クーポンコード',
    'promotion' => 'プロモーション',
    'can_be_used_with_promotion' => 'プロモーションと併用できますか？',
    'can_be_used_with_flash_sale' => 'フラッシュセールでも利用できますか？',
    'can_be_used_with_flash_sale_help' => '顧客はすでにフラッシュセール中の商品にクーポンを適用できるため、割引を組み合わせることも可能です。',
    'unlimited_coupon' => '無制限クーポン?',
    'enter_number' => '番号を入力してください',
    'coupon_type' => 'クーポンの種類',
    'percentage_discount' => '割引率 (%)',
    'free_shipping' => '送料無料',
    'same_price' => '同価格',
    'apply_for' => '申請する',
    'all_orders' => 'すべての注文',
    'order_amount_from' => '注文金額から',
    'product_collection' => '製品コレクション',
    'product_category' => '製品カテゴリー',
    'product' => '製品',
    'customer' => 'お客様',
    'variant' => '変異体',
    'search_product' => '製品を探す',
    'no_products_found' => '商品が見つかりません!',
    'search_customer' => '顧客を検索',
    'no_customer_found' => '顧客が見つかりませんでした!',
    'one_time_per_order' => '1注文につき1回',
    'one_time_per_product_in_cart' => 'カート内の商品ごとに 1 回',
    'number_of_products' => 'お申込みに必要な商品数',
    'selected_products' => '厳選された製品',
    'selected_customers' => '選ばれた顧客',
    'time' => '時間',
    'start_date' => '開始日',
    'end_date' => '終了日',
    'never_expired' => '有効期限が切れたことはありませんか?',
    'save' => '保存',
    'enter_promotion_name' => 'プロモーション名を入力してください',
    'enter_coupon_name' => 'クーポン名を入力してください',
    'cancel' => 'キャンセル',
    'is' => 'は',
    'when_shipping_fee_less_than' => '送料が以下の場合',
    'minimum_order_amount_error' => 'You are under :minimum_amount to apply the coupon, you must add :add_more more items to your cart',
    'once_per_customer' => 'お一人様1回限り',
    'you_need_login_to_use_coupon_code' => 'このクーポンコードを使用するにはログインする必要があります',
    'you_used_coupon_code' => 'このクーポンコードはすでに使用されています',
    'customer_used_coupon_code' => 'この割引コードをご利用いただいたお客様',
    'apply_via_url' => 'URLから応募しますか？',
    'apply_via_url_description' => 'この設定は、顧客がパラメーター「?coupon=code」を含む URL にアクセスしたときにクーポン コードを適用します。',
    'display_at_checkout' => 'チェックアウトページにクーポンコードを表示しますか?',
    'display_at_checkout_description' => 'クーポンコードのリストはチェックアウトページに表示され、顧客は適用することを選択できます。',
    'description' => '説明',
    'description_placeholder' => '割引プログラムに関する簡単な説明',
    'cannot_use_same_time_with_flash_sale' => 'This coupon cannot be used with flash sale items like :product_name. Please remove the item from your cart or choose a different coupon.',
];