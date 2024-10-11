<?php

return [
    'login' => [
        'username' => 'メールアドレス/ユーザー名',
        'email' => '電子メール',
        'password' => 'パスワード',
        'title' => 'ユーザーログイン',
        'remember' => '私を覚えてますか？',
        'login' => 'サインイン',
        'placeholder' => [
            'username' => 'ユーザー名またはメールアドレスを入力してください',
            'email' => 'メールアドレスを入力してください',
            'password' => 'パスワードを入力してください',
        ],
        'success' => 'ログインに成功しました！',
        'fail' => 'ユーザー名またはパスワードが間違っています。',
        'not_active' => 'あなたのアカウントはまだアクティベートされていません!',
        'banned' => 'このアカウントは禁止されています。',
        'logout_success' => 'ログアウトに成功しました。',
        'dont_have_account' => 'このシステムにアカウントがありません。詳細については管理者に問い合わせてください。',
    ],
    'forgot_password' => [
        'title' => 'パスワードをお忘れですか',
        'message' => '<p>パスワードをお忘れですか?</p><p>電子メール アカウントを入力してください。システムは、パスワードをリセットするためのアクティブなリンクを含む電子メールを送信します。</p>',
        'submit' => '提出する',
    ],
    'reset' => [
        'new_password' => '新しいパスワード',
        'password_confirmation' => '新しいパスワードを確認します',
        'email' => '電子メール',
        'title' => 'パスワードをリセットする',
        'update' => 'アップデート',
        'wrong_token' => 'このリンクは無効か期限切れです。もう一度リセットフォームを使用してみてください。',
        'user_not_found' => 'このユーザー名は存在しません。',
        'success' => 'パスワードのリセットが成功しました!',
        'fail' => 'トークンが無効です。パスワードのリセット リンクの有効期限が切れています。',
        'reset' => [
            'title' => 'メールでパスワードをリセット',
        ],
        'send' => [
            'success' => '電子メールがあなたの電子メール アカウントに送信されました。確認してこのアクションを完了してください。',
            'fail' => 'この時間内にメールを送信できません。後でもう一度試してください。',
        ],
        'new-password' => '新しいパスワード',
        'placeholder' => [
            'new_password' => '新しいパスワードを入力してください',
            'new_password_confirmation' => '新しいパスワードを確認します',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'メールでパスワードをリセット',
        ],
    ],
    'password_confirmation' => 'パスワードの確認',
    'failed' => '失敗した',
    'throttle' => 'スロットル',
    'not_member' => 'まだメンバーではありませんか?',
    'register_now' => '今すぐ登録してください',
    'lost_your_password' => 'パスワードを紛失しましたか?',
    'login_title' => '管理者',
    'login_via_social' => 'ソーシャルネットワークでログインする',
    'back_to_login' => 'ログインページに戻る',
    'sign_in_below' => '以下からサインインしてください',
    'languages' => '言語',
    'reset_password' => 'パスワードのリセット',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL電子メール設定',
            'templates' => [
                'password_reminder' => [
                    'title' => 'パスワードをリセットする',
                    'description' => 'パスワードのリセットをリクエストするときにユーザーに電子メールを送信する',
                    'subject' => 'パスワードのリセット',
                    'reset_link' => 'パスワードをリセットするリンク',
                ],
            ],
        ],
    ],
];
