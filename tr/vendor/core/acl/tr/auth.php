<?php

return [
    'login' => [
        'username' => 'E-posta/Kullanıcı adı',
        'email' => 'E-posta',
        'password' => 'Şifre',
        'title' => 'Kullanıcı Girişi',
        'remember' => 'Beni Hatırla?',
        'login' => 'Giriş yap',
        'placeholder' => [
            'username' => 'Kullanıcı adınızı veya e-posta adresinizi girin',
            'email' => 'E-posta adresinizi girin',
            'password' => 'Şifrenizi girin',
        ],
        'success' => 'Giriş başarıyla gerçekleştirildi!',
        'fail' => 'Hatalı kullanıcı adı veya şifre.',
        'not_active' => 'Hesabınız henüz aktifleştirilmedi!',
        'banned' => 'Bu hesap yasaklanmıştır.',
        'logout_success' => 'Çıkış başarıyla gerçekleştirildi!',
        'dont_have_account' => 'Bu sistemde hesabınız bulunmamaktadır. Daha fazla bilgi için lütfen yöneticiyle iletişime geçin!',
    ],
    'forgot_password' => [
        'title' => 'Parolanızı mı unuttunuz',
        'message' => '<p>Şifrenizi mi unuttunuz?</p><p>Lütfen e-posta hesabınızı girin. Sistem şifrenizi sıfırlamak için aktif bağlantı içeren bir e-posta gönderecektir.</p>',
        'submit' => 'Gönder',
    ],
    'reset' => [
        'new_password' => 'Yeni Şifre',
        'password_confirmation' => 'Yeni şifreyi onayla',
        'email' => 'E-posta',
        'title' => 'Şifrenizi sıfırlayın',
        'update' => 'Güncelleme',
        'wrong_token' => 'Bu bağlantı geçersiz veya süresi dolmuş. Lütfen sıfırlama formunu tekrar kullanmayı deneyin.',
        'user_not_found' => 'Bu kullanıcı adı mevcut değil.',
        'success' => 'Şifrenizi başarıyla sıfırladınız!',
        'fail' => 'Token geçersiz, şifre sıfırlama bağlantısı süresi doldu!',
        'reset' => [
            'title' => 'E-posta şifre sıfırlama',
        ],
        'send' => [
            'success' => 'E-posta hesabınıza bir e-posta gönderildi. Lütfen bu işlemi kontrol edin ve tamamlayın.',
            'fail' => 'Bu sefer e-posta gönderilemiyor. Lütfen daha sonra tekrar deneyin.',
        ],
        'new-password' => 'Yeni Şifre',
        'placeholder' => [
            'new_password' => 'Yeni şifrenizi girin',
            'new_password_confirmation' => 'Yeni şifrenizi onaylayın',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-posta şifre sıfırlama',
        ],
    ],
    'password_confirmation' => 'Şifreyi onayla',
    'failed' => 'Arızalı',
    'throttle' => 'Gaz kelebeği',
    'not_member' => 'Henüz üye değil misiniz?',
    'register_now' => 'Şimdi kaydolun',
    'lost_your_password' => 'Şifrenizi mi unuttunuz?',
    'login_title' => 'Yönetici',
    'login_via_social' => 'Sosyal ağlarla giriş yapın',
    'back_to_login' => 'Giriş sayfasına geri dön',
    'sign_in_below' => 'Aşağıdan Giriş Yapın',
    'languages' => 'Diller',
    'reset_password' => 'Şifreyi Sıfırla',
    'deactivated_message' => 'Your account has been deactivated. Please contact the administrator.',
    'settings' => [
        'email' => [
            'title' => 'Ön çapraz bağ',
            'description' => 'ACL e-posta yapılandırması',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Şifreyi sıfırla',
                    'description' => 'Parola sıfırlama isteğinde bulunulduğunda kullanıcıya e-posta gönder',
                    'subject' => 'Şifreyi Sıfırla',
                    'reset_link' => 'Şifreyi sıfırla bağlantısı',
                    'email_title' => 'Reset Password Instruction',
                    'email_message' => 'You are receiving this email because we received a password reset request for your account.',
                    'button_text' => 'Reset password',
                    'trouble_text' => 'If you\'re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: <a href=":reset_link">:reset_link</a> and paste it into your browser. If you didn\'t request a password reset, please ignore this message or contact us if you have any questions.',
                ],
            ],
        ],
    ],
];
