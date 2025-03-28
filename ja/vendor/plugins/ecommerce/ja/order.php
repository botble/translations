<?php

return [
    'statuses' => [
        'pending' => '保留中',
        'processing' => '処理',
        'completed' => '完了',
        'canceled' => 'キャンセル',
        'partial_returned' => '一部返品',
        'returned' => '返されました',
    ],
    'return_statuses' => [
        'pending' => '保留中',
        'processing' => '処理',
        'completed' => '完了',
        'canceled' => 'キャンセル',
    ],
    'menu' => '注文',
    'create' => '注文を作成する',
    'cancel_error' => '注文は配送中または完了していません',
    'cancel_success' => '注文をキャンセルしました',
    'return_error' => '注文は配送中または完了していません',
    'return_success' => 'リクエストされた商品は正常に返品されました。',
    'incomplete_order' => '未完了の注文',
    'order_id' => '注文ID',
    'product_id' => 'プロダクトID',
    'customer_label' => 'お客様',
    'tax_amount' => '税額',
    'shipping_amount' => '送料金額',
    'payment_method' => '支払方法',
    'payment_status_label' => '支払い状況',
    'manage_orders' => '注文の管理',
    'order_intro_description' => 'ストアに注文が入ると、ここで注文を処理して追跡します。',
    'create_new_order' => '新しい注文を作成する',
    'manage_incomplete_orders' => '未完了の注文を管理する',
    'incomplete_orders_intro_description' => '未完了の注文とは、顧客がカートに製品を追加し、購入情報の入力を進めたが、チェックアウト プロセスが完了していないときに作成される注文です。',
    'invoice_for_order' => '注文の請求書',
    'created' => '作成されました',
    'invoice' => '請求書',
    'return' => '注文返品リクエスト',
    'restock_products' => 'Restock :count product(s)?',
    'is_return' => '戻るチェックボックス',
    'total_refund_amount' => '払い戻し総額',
    'total_amount_can_be_refunded' => '全額返金可能',
    'refund_reason' => '返金理由',
    'products' => '製品）',
    'default' => 'デフォルト',
    'system' => 'システム',
    'new_order_from' => 'New order :order_id from :customer',
    'confirmation_email_was_sent_to_customer' => '確認メールが顧客に送信されました',
    'create_order_from_payment_page' => '注文はチェックアウトページから作成されました',
    'create_order_from_admin_page' => '注文は管理ページから作成されました',
    'order_was_verified_by' => '注文は %user_name% によって確認されました',
    'new_order' => 'New order :order_id',
    'payment_was_confirmed_by' => 'Payment was confirmed (amount :money) by %user_name%',
    'edit_order' => 'Edit order :code',
    'confirm_order_success' => '注文が正常に確認されました。',
    'error_when_sending_email' => 'メール送信時にエラーが発生する',
    'sent_confirmation_email_success' => '確認メールが正常に送信されました。',
    'order_was_sent_to_shipping_team' => '注文は配送チームに送信されました',
    'by_username' => '%user_name% さんによる',
    'shipping_was_created_from' => '配送は注文 %order_id% から作成されました',
    'shipping_was_canceled_success' => '発送は無事にキャンセルされました！',
    'shipping_was_canceled_by' => '%user_name% により配送がキャンセルされました',
    'update_shipping_address_success' => '配送先住所が正常に更新されました。',
    'order_was_canceled_by' => '注文は %user_name% によってキャンセルされました',
    'order_was_returned_by' => '注文は %user_name% から返されました',
    'confirm_payment_success' => '支払いが正常に確認されました。',
    'refund_amount_invalid' => 'Refund amount must be lower or equal :price',
    'number_of_products_invalid' => '製品数の払い戻しは無効です。',
    'cannot_found_payment_for_this_order' => 'この注文の支払いが見つかりません!',
    'refund_success_with_price' => 'Refund success :price',
    'refund_success' => '無事返金完了！',
    'order_is_not_existed' => '秩序なんて存在しない！',
    'reorder' => '再注文',
    'sent_email_incomplete_order_success' => '未完了の注文についてリマインドするメールが正常に送信されました。',
    'applied_coupon_success' => 'クーポン「:code」が適用されました!',
    'new_order_notice' => '<span class="bold">:count</span> 件の新しい注文があります',
    'view_all' => 'すべて見る',
    'cancel_order' => '注文をキャンセルする',
    'order_canceled' => '注文がキャンセルされました',
    'order_was_canceled_at' => '注文がキャンセルされました',
    'return_order' => '返品注文',
    'order_returned' => '返品された注文',
    'order_was_returned_at' => '注文は次の時点で返品されました',
    'completed' => '完了',
    'uncompleted' => '未完成',
    'sku' => 'SKU',
    'warehouse' => '倉庫',
    'sub_amount' => '小額',
    'coupon_code' => 'クーポンコード：「:code」',
    'shipping_fee' => '送料',
    'tax' => '税',
    'refunded_amount' => '返金額',
    'amount_received' => '実際に受け取った金額',
    'download_invoice' => '請求書のダウンロード',
    'payment_proof' => '支払い証明',
    'print_invoice' => '請求書の印刷',
    'add_note' => 'メモを追加...',
    'order_was_confirmed' => '注文が確認されました',
    'confirm_order' => '注文を確認する',
    'confirm' => '確認する',
    'order_was_canceled' => '注文がキャンセルされました',
    'pending_payment' => '支払い保留中',
    'payment_was_accepted' => 'Payment :money was accepted',
    'payment_was_refunded' => '支払いは返金されました',
    'confirm_payment' => '支払いを確認する',
    'refund' => '返金',
    'all_products_are_not_delivered' => 'すべての商品が届かない',
    'delivery' => '配達',
    'history' => '歴史',
    'order_number' => '注文番号',
    'from' => 'から',
    'status' => '状態',
    'successfully' => '成功しました',
    'transaction_type' => 'トランザクションのタイプ',
    'staff' => 'スタッフ',
    'refund_date' => '払い戻し日',
    'n_a' => '該当なし',
    'payment_date' => '支払日',
    'payment_gateway' => '支払いゲートウェイ',
    'transaction_amount' => '取引金額',
    'resend' => '再送信',
    'default_store' => 'デフォルトストア',
    'update_address' => '住所を更新する',
    'have_an_account_already' => 'すでにアカウントをお持ちです',
    'dont_have_an_account_yet' => 'まだアカウントをお持ちではありません',
    'mark_payment_as_confirmed' => '<span>:method</span> を確認済みとしてマークします',
    'resend_order_confirmation' => '注文確認を再送信する',
    'resend_order_confirmation_description' => '確認メールは <strong>:email</strong> に送信されますか?',
    'send' => '送信',
    'update' => 'アップデート',
    'cancel_shipping_confirmation' => '発送確認をキャンセルしますか?',
    'cancel_shipping_confirmation_description' => '発送確認をキャンセルしますか?',
    'cancel_order_confirmation' => '注文確認をキャンセルしますか?',
    'cancel_order_confirmation_description' => 'この注文をキャンセルしてもよろしいですか?このアクションはロールバックできません',
    'return_order_confirmation' => '注文確認を返品しますか?',
    'return_order_confirmation_description' => 'この注文を返品してもよろしいですか?このアクションはロールバックできません',
    'confirm_payment_confirmation_description' => '<strong>:メソッド</strong>によって処理されます。システム外で支払いを受け取りましたか?この支払いはシステムに保存されず、返金できません',
    'save_note' => 'メモを保存する',
    'order_note' => '注文メモ',
    'order_note_placeholder' => '注文に関するメモ (例: 時間や配送指示)。',
    'order_amount' => '注文金額',
    'additional_information' => '追加情報',
    'notice_about_incomplete_order' => 'ご注文が完了していない場合のお知らせ',
    'notice_about_incomplete_order_description' => '未完了の注文に関するメールが <strong>:email</strong> に送信されることを通知しますか?',
    'incomplete_order_description_1' => '未完了の注文とは、潜在的な顧客がショッピング カートに商品を入れ、支払いページまで進んでも、取引が完了しない場合を指します。',
    'incomplete_order_description_2' => '顧客に連絡を取り、引き続き購入を希望している場合は、次のリンクをクリックして注文を完了できるようサポートしてください。',
    'send_an_email_to_recover_this_order' => 'この注文を回復するために顧客に電子メールを送信します',
    'see_maps' => '地図を見る',
    'one_or_more_products_dont_have_enough_quantity' => '1 つまたは複数の商品の数量が不足しています。',
    'cannot_send_order_recover_to_mail' => '電子メールが見つからなかったため、顧客に回復電子メールを送信できません。',
    'payment_info' => 'お支払い情報',
    'payment_method_refund_automatic' => 'Your customer will be refunded using :method automatically.',
    'order' => '注文',
    'order_information' => '注文情報',
    'create_a_new_product' => '新しい製品を作成する',
    'out_of_stock' => '在庫切れ',
    'products_available' => '利用可能な製品',
    'no_products_found' => '商品が見つかりません!',
    'note' => '注記',
    'note_for_order' => 'ご注文時の注意点...',
    'amount' => '額',
    'add_discount' => '割引を追加',
    'discount' => '割引',
    'add_shipping_fee' => '送料を追加する',
    'shipping' => '配送',
    'total_amount' => '合計金額',
    'confirm_payment_and_create_order' => '支払いを確認して注文を作成する',
    'paid' => '有料',
    'pay_later' => '後で支払う',
    'customer_information' => '顧客情報',
    'create_new_customer' => '新しい顧客を作成する',
    'no_customer_found' => '顧客が見つかりませんでした!',
    'customer' => 'お客様',
    'orders' => '注文',
    'shipping_address' => 'お届け先の住所',
    'shipping_info' => '配送情報',
    'billing_address' => '請求先住所',
    'see_on_maps' => '地図で見る',
    'name' => '名前',
    'price' => '価格',
    'product_name' => '製品名',
    'total' => '合計',
    'action' => 'アクション',
    'add_product' => '製品を追加',
    'enter_free_text' => 'フリーテキストを入力してください',
    'promotion_discount_amount' => 'プロモーション金額',
    'add' => '追加',
    'store' => '店',
    'please_choose_product_option' => '製品オプションを選択してください',
    'sku_optional' => 'SKU (オプション)',
    'with_storehouse_management' => '倉庫管理とは？',
    'quantity' => '量',
    'allow_customer_checkout_when_this_product_out_of_stock' => 'この商品が在庫切れの場合に顧客のチェックアウトを許可しますか?',
    'address' => '住所',
    'phone' => '電話',
    'country' => '国',
    'state' => '州',
    'city' => '市',
    'zip_code' => '郵便番号',
    'discount_based_on' => 'に基づく割引',
    'or_coupon_code' => 'またはクーポンコード',
    'description' => '説明',
    'how_to_select_configured_shipping' => '設定された配送を選択するにはどうすればよいですか?',
    'please_add_customer_information_with_the_complete_shipping_address_to_see_the_configured_shipping_rates' => '設定された配送料を確認するには、完全な配送先住所を含む顧客情報を追加してください。',
    'please_products_and_customer_address_to_see_the_shipping_rates' => '設定された配送料を確認するには、製品と顧客情報を完全な配送先住所とともに追加してください。',
    'shipping_method_not_found' => '配送方法が見つかりません',
    'free_shipping' => '送料無料',
    'custom' => 'カスタム',
    'email' => '電子メール',
    'create_order' => '注文の作成',
    'close' => '近い',
    'confirm_payment_title' => 'Confirm payment is :status for this order',
    'confirm_payment_description' => 'Payment status of the order is :status. Once the order has been created, you cannot change the payment method or status',
    'select_payment_method' => '支払い方法を選択してください',
    'cash_on_delivery_cod' => '代金引換（代金引換）',
    'bank_transfer' => '銀行振込',
    'paid_amount' => '支払った金額',
    'update_email' => 'メールを更新する',
    'save' => '保存',
    'cancel' => 'キャンセル',
    'create_a_new_order' => '新しい注文を作成する',
    'search_or_create_new_product' => '新しい製品を検索または作成する',
    'search_or_create_new_customer' => '新しい顧客を検索または作成する',
    'discount_description' => '割引の説明',
    'cant_select_out_of_stock_product' => '在庫切れ商品はお選びいただけません！',
    'referral' => '紹介',
    'return_order_unique' => 'Same :attribute already exists in a previous return request.',
    'total_return_amount' => '還元総額',
    'change_return_order_status' => '返品注文ステータスの変更',
    'return_order_approve' => '承認する',
    'return_order_reject' => '拒否する',
    'return_reason' => '返品理由',
    'order_return_moderation' => [
        'approve_button' => '承認する',
        'reject_button' => '拒否する',
        'approve_confirmation_title' => '返品注文を承認する',
        'approve_confirmation_description' => 'この返品注文を承認すると、ステータスが処理中に変更され、顧客に通知されます。この返品注文を承認してもよろしいですか?',
        'reject_confirmation_title' => '返品注文を拒否する',
        'reject_confirmation_description' => 'この返品注文を拒否すると、ステータスがキャンセルに変更され、顧客に通知されます。この返品注文を拒否してもよろしいですか?',
        'mark_as_completed_button' => '完了としてマークする',
        'mark_as_completed_confirmation_title' => '返品注文を完了としてマークする',
        'mark_as_completed_confirmation_description' => 'この返品注文を完了としてマークすると、ステータスが完了に変更され、顧客に通知されます。この返品注文を完了としてマークしてもよろしいですか?',
    ],
    'order_return_action' => [
        'created' => '作成されました',
        'approved' => '承認された',
        'rejected' => '拒否されました',
        'mark_as_completed' => '完了としてマークする',
    ],
    'referral_data' => [
        'ip' => 'IP',
        'landing_domain' => 'ランディングドメイン',
        'landing_page' => 'ランディングページ',
        'landing_params' => '着陸パラメータ',
        'gclid' => 'Gclid',
        'fclid' => 'エフクリッド',
        'utm_source' => 'UTMソース',
        'utm_campaign' => 'UTMキャンペーン',
        'utm_medium' => 'UTM中',
        'utm_term' => 'UTM用語',
        'utm_content' => 'UTMコンテンツ',
        'referral' => '紹介',
        'referrer_url' => '紹介URL',
        'referrer_domain' => '紹介ドメイン',
    ],
    'order_address_types' => [
        'shipping_address' => 'お届け先の住所',
        'billing_address' => '請求先住所',
    ],
    'order_return_reasons' => [
        'damaged' => '破損した製品',
        'defective' => '欠陥品',
        'incorrect_item' => '間違った項目',
        'arrived_late' => '遅れて到着しました',
        'not_as_described' => '説明どおりではありません',
        'no_longer_want' => 'もう欲しくない',
        'other' => '他の',
    ],
    'order_return_reason' => '返品理由',
    'notices' => [
        'update_return_order_status_error' => '返品注文ステータスを更新できません!返品注文ステータスが無効である可能性があります。',
        'update_return_order_status_success' => '返品注文ステータスが正常に更新されました。',
    ],
    'order_return' => '注文の返品',
    'edit_order_return' => 'Edit order return :code',
    'order_return_items_count' => '製品アイテム',
    'new_order_notifications' => [
        'new_order' => '新規注文',
        'view' => 'ビュー',
        'description' => ':customer ordered :quantity :product',
    ],
    'confirm_payment_notifications' => [
        'confirm_payment' => '支払いを確認する',
        'description' => 'Order :order Payment was confirmed (amount :amount) by :by',
    ],
    'update_shipping_status_notifications' => [
        'update_shipping_status' => '配送状況を更新する',
        'description' => 'Order :order had changed shipping status :description',
    ],
    'cancel_order_notifications' => [
        'cancel_order' => '注文をキャンセルする',
        'description' => 'Order :order was cancelled by custom :customer',
    ],
    'return_order_notifications' => [
        'return_order' => '返品注文',
        'description' => ':customer has requested return product(s)',
    ],
    'order_completed_notifications' => [
        'order_completed' => '注文が完了しました',
        'description' => 'Order :order has been completed',
    ],
    'tax_info' => [
        'name' => '税金に関する情報',
        'update' => '税務情報を更新する',
        'update_success' => '税務情報が正常に更新されました。',
        'company_name' => '会社名',
        'company_address' => '会社住所',
        'company_tax_code' => '法人税コード',
        'company_email' => '会社のメールアドレス',
    ],
    'mark_as_completed' => [
        'name' => '完了としてマークする',
        'modal_title' => '注文を完了としてマークする',
        'modal_description' => 'この注文を完了としてマークしてもよろしいですか?これにより、注文ステータスが完了に変更され、元に戻すことはできません。',
        'success' => '注文を正常に完了したものとしてマークしてください。',
        'history' => 'Order is marked as completed by :admin at :time',
    ],
    'generate_invoice' => '請求書の生成',
    'generated_invoice_successfully' => '請求書が正常に生成されました。',
    'order_cannot_be_canceled' => '注文は処理中または完了しています。キャンセルできません。',
    'cancellation_reason' => 'Reason: :reason',
    'order_cancellation_reason' => '注文キャンセル理由',
    'cancellation_reasons' => [
        'change-mind' => '気が変わったか、製品が必要なくなった',
        'found-better-price' => '他の場所でより良い価格を見つけました',
        'out-of-stock' => '在庫切れの商品',
        'shipping-delays' => '配送の遅延',
        'incorrect-address' => '配送先住所が間違っているか不完全である',
        'customer-requested' => '顧客がキャンセルを要求した',
        'not-as-described' => '説明と異なる製品',
        'payment-issues' => '支払いの問題または取引の拒否',
        'unforeseen-circumstances' => '不測の事態や緊急事態',
        'technical-issues' => 'チェックアウトプロセス中の技術的な問題',
        'other' => '他の',
    ],
    'requires_products_to_create_order' => '注文を作成するには少なくとも 1 つの製品を選択してください',
    'transaction_id' => 'トランザクションID',
    'incomplete_order_transaction_id_placeholder' => '支払い方法が代金引換または銀行振込の場合は、このフィールドを空白のままにすることができます',
    'digital_product_downloads' => [
        'title' => 'デジタル製品のダウンロード',
        'download_count' => ':count download(s)',
        'first_download' => 'First download at :time',
        'not_downloaded_yet' => 'まだダウンロードされていません',
    ],
    'select_one' => '1 つ選択してください',
    'confirm_delivery_error' => 'この注文の配送を確認できません',
    'confirm_delivery_success' => 'ご注文は無事に配送が確認されました！',
    'export' => [
        'total_orders' => '総注文数',
    ],
    'edit_email' => 'メールの編集',
];
