<?php

return [
    'settings' => [
        'title' => 'キャプチャ',
        'description' => 'reCAPTCHA は、ウェブサイトをスパムや不正行為から保護する Google の無料サービスです。'."\n"
            .'        <br/><br/> Math Captcha を使用すると、簡単な数学の問題を使用してサイト ユーザーをテストし、人間であることを証明できます。',
        'panel_description' => 'reCAPTCHA と Math CAPTCHA を表示および更新します。',
        'recaptcha_site_key' => 'reCAPTCHA サイトキー',
        'recaptcha_secret' => 'reCAPTCHA シークレット',
        'enable_recaptcha' => 'reCAPTCHAを有効にする',
        'recaptcha_score' => 'スコア',
        'recaptcha_credential_helper' => 'Obtain your Google reCAPTCHA credentials :link.',
        'recaptcha_credential_helper_here' => 'ここ',
        'recaptcha_warning' => '資格情報のセットアップで reCAPTCHA を使用する必要があります。設定を誤るとログイン システムが中断される可能性があるので注意してください。',
        'hide_badge' => 'reCAPTCHA バッジを非表示にする',
        'show_disclaimer' => 'reCAPTCHA の免責事項を表示する',
        'type' => 'タイプ',
        'v2_description' => 'V2 (チャレンジを使用してリクエストを検証)',
        'v3_description' => 'V3 (リクエストをスコアで検証)',
        'enable_math_captcha' => '数学キャプチャを有効にする',
        'enable_for_form' => 'Enable for :form',
    ],
    'numbers' => [
        'ゼロ',
        '1つ',
        '二',
        '三つ',
        '4',
        '五',
        '六',
        'セブン',
        '八',
        '九',
        '10',
        'イレブン',
        '12',
    ],
    'operands' => [
        '+' => 'プラス',
        '-' => 'マイナス',
        '*' => '回',
        '/' => 'で割る',
    ],
    'recaptcha_disclaimer_message_with_link' => 'This site is protected by reCAPTCHA and the Google :privacyLink and :termsLink apply.',
    'privacy_policy' => 'プライバシーポリシー',
    'terms_of_service' => '利用規約',
    'admin_login_form' => '管理者ログインフォーム',
    'admin_forgot_password_form' => '管理者がパスワードを忘れた場合のフォーム',
    'admin_reset_password_form' => '管理者パスワードリセットフォーム',
];
