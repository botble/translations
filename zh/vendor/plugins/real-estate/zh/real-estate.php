<?php

return [
    'name' => '房地產',
    'settings' => '設定',
    'login_form' => '登錄表單',
    'register_form' => '註冊表單',
    'forgot_password_form' => '忘記密碼表單',
    'reset_password_form' => '重置密碼表單',
    'consult_form' => '諮詢表單',
    'review_form' => '評論表單',
    'theme_options' => [
        'page_slug_name' => '頁面別名',
        'slug_description' => '自定義房地產頁面使用的別名。修改時請謹慎，因為這可能會影響 SEO 和用戶體驗。如果發生錯誤，您可以通過輸入默認值或將其留空來重置為默認值。',
        'page_slugs' => [
            'properties_state' => '按縣/市分類的屬性',
            'properties_city' => '按城市分類的屬性',
            'projects_state' => '按縣/市分類的項目',
            'projects_city' => '按城市分類的項目',
        ],
        'page_slug_already_exists' => '頁面別名已被使用。請選擇另一個。',
        'page_slug_description' => '當您訪問該頁面時，它看起來像 :slug 。預設值為：預設。',
        'slug_name' => '房地產網址',
    ],
];
