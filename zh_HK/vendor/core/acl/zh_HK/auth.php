<?php

return [
    'login' => [
        'username' => '電郵/用戶名',
        'email' => '電郵',
        'password' => '密碼',
        'title' => '用戶登錄',
        'remember' => '記得我嗎？',
        'login' => '登入',
        'placeholder' => [
            'username' => '輸入你的用戶名或電子郵件地址',
            'email' => '輸入你的電子郵件地址',
            'password' => '輸入你的密碼',
        ],
        'success' => '登入成功！',
        'fail' => '錯誤的用戶名或密碼。',
        'not_active' => '你的帳戶尚未激活！',
        'banned' => '此帳戶已被禁止。',
        'logout_success' => '成功登出！',
        'dont_have_account' => '你在這個系統上沒有帳戶，請聯絡管理員以獲取更多信息！',
    ],
    'forgot_password' => [
        'title' => '忘記密碼',
        'message' => '<p>你忘記了你的密碼嗎？</p><p>請輸入你的電子郵件帳戶。系統將會發送一封包含重設密碼的激活鏈接的電子郵件。</p>',
        'submit' => '提交',
    ],
    'reset' => [
        'new_password' => '新密碼',
        'password_confirmation' => '確認新密碼',
        'email' => '電郵',
        'title' => '重設你的密碼',
        'update' => '更新',
        'wrong_token' => '這個連結無效或已過期。請再試一次使用重設表單。',
        'user_not_found' => '這個用戶名不存在。',
        'success' => '重設密碼成功！',
        'fail' => 'Token 無效，重設密碼的連結已過期！',
        'reset' => [
            'title' => '電郵重設密碼',
        ],
        'send' => [
            'success' => '一封電郵已發送到你的電郵帳戶。請檢查並完成此操作。',
            'fail' => '無法在此時發送電子郵件。請稍後再試。',
        ],
        'new-password' => '新密碼',
        'placeholder' => [
            'new_password' => '輸入您的新密碼',
            'new_password_confirmation' => '確認你的新密碼',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => '電郵重設密碼',
        ],
    ],
    'password_confirmation' => '密碼確認',
    'failed' => '失敗',
    'throttle' => '油門',
    'not_member' => '還不是會員嗎？',
    'register_now' => '立即註冊',
    'lost_your_password' => '唔記得你嘅密碼？',
    'login_title' => '管理員',
    'login_via_social' => '用社交網絡登錄',
    'back_to_login' => '返回登入頁面',
    'sign_in_below' => '請在下面登入',
    'languages' => '語言',
    'reset_password' => '重設密碼',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL 電郵配置',
            'templates' => [
                'password_reminder' => [
                    'title' => '重設密碼',
                    'description' => '當用戶要求重設密碼時發送電子郵件',
                    'subject' => '重設密碼',
                    'reset_link' => '重設密碼連結',
                ],
            ],
        ],
    ],
];
