<?php

return [
    'name' => '聯絡方式',
    'contact_form' => '聯絡表',
    'menu' => '聯繫',
    'edit' => '查看聯絡資訊',
    'tables' => [
        'phone' => '電話',
        'email' => 'Email',
        'full_name' => '名稱',
        'time' => '時間',
        'address' => '地址',
        'subject' => '主題',
        'content' => '內容',
    ],
    'contact_information' => '聯絡資訊',
    'replies' => '回覆',
    'email' => [
        'header' => 'Email',
        'title' => '來自您網站的新聯絡人',
    ],
    'form' => [
        'name' => [
            'required' => '名稱為必填項',
        ],
        'email' => [
            'required' => 'Email為必填項',
            'email' => '該Email地址無效',
        ],
        'content' => [
            'required' => '內容為必填項',
        ],
    ],
    'contact_sent_from' => '此聯絡資訊發送自',
    'sender' => '寄件人',
    'sender_email' => 'Email',
    'sender_address' => '地址',
    'sender_phone' => '電話',
    'message_content' => '留言內容',
    'sent_from' => '電子郵件發送自',
    'form_name' => '名稱',
    'form_email' => 'Email',
    'form_address' => '地址',
    'form_subject' => '主題',
    'form_phone' => '電話',
    'form_message' => '訊息',
    'form_content' => '內容',
    'required_field' => '有 (<span style="color: red">*</span>) 的欄位是必填欄位。',
    'send_btn' => '發送訊息',
    'new_msg_notice' => '您有 <span class="bold">:count</span> 一則新訊息',
    'view_all' => '查看全部',
    'statuses' => [
        'read' => '讀',
        'unread' => '未讀',
    ],
    'phone' => '電話',
    'address' => '地址',
    'message' => '訊息',
    'settings' => [
        'email' => [
            'title' => '聯繫',
            'description' => '聯絡郵箱配置',
            'templates' => [
                'notice_title' => '向管理員發送通知',
                'notice_description' => '當系統收到新聯絡人時向管理員發送通知的Email模板',
            ],
        ],
        'title' => '聯繫',
        'description' => '聯絡人插件設置',
        'blacklist_keywords' => '關鍵字黑名單',
        'blacklist_keywords_placeholder' => '關鍵字...',
        'blacklist_keywords_helper' => '如果內容欄位中包含這些關鍵字（以逗號分隔），則將聯絡人要求列入黑名單。',
        'enable_math_captcha_in_contact_form' => '在聯絡表單中啟用數學驗證碼？',
        'receiver_emails' => '收件者Email',
        'receiver_emails_placeholder' => '您可以輸入多於 1 個Email地址（以逗號分隔）',
        'receiver_emails_helper' => '這些Email將從聯絡表單中收到。將其留空，將發送到管理員Email。',
    ],
    'no_reply' => '還沒回覆！',
    'reply' => '回覆',
    'send' => '傳送',
    'shortcode_name' => '聯絡表',
    'shortcode_description' => '新增聯絡表格',
    'shortcode_content_description' => '加簡碼 [contact-form][/contact-form] 到編輯器？',
    'message_sent_success' => '訊息發送成功！',
    'dropdown_show_label' => '顯示聯絡人',
    'display_fields' => '顯示欄位',
    'mandatory_fields' => '必填字段',
    'mandatory_fields_helper_text' => '如果為空，則按預設配置進行驗證。名稱和訊息始終是必需的。',
    'custom_field' => [
        'name' => '自訂字段',
        'create' => '建立自訂字段',
        'type' => '類型',
        'required' => '必需的',
        'placeholder' => '佔位符',
        'order' => '命令',
        'options' => '選項',
        'option' => [
            'label' => '標籤',
            'value' => '價值',
            'add' => '新增選項',
        ],
        'enums' => [
            'types' => [
                'text' => '文字',
                'number' => '數字',
                'dropdown' => '下拉式選單',
                'checkbox' => '複選框',
                'radio' => '收音機',
                'textarea' => '文字區',
            ],
        ],
    ],
];
