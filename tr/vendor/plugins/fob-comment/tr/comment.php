<?php

return [
    'common' => [
        'name' => 'İsim',
        'email' => 'E-posta',
        'website' => 'İnternet sitesi',
        'comment' => 'Yorum',
    ],
    'title' => 'Yorumlar',
    'author' => 'Yazar',
    'responsed_to' => 'Tepki',
    'permalink' => 'Kalıcı bağlantı',
    'url' => 'URL\'si',
    'submitted_on' => 'Gönderilme tarihi',
    'edit_comment' => 'Yorumu Düzenle',
    'reply' => 'Cevap vermek',
    'in_reply_to' => 'In reply to :name',
    'reply_modal' => [
        'title' => 'Reply to :comment',
        'cancel' => 'İptal etmek',
    ],
    'allow_comments' => 'yorumlara izin ver',
    'front' => [
        'admin_badge' => 'Yönetici',
        'list' => [
            'title' => ':count comment|:count comments',
            'reply' => 'Cevap vermek',
            'reply_to' => 'Reply to :name',
            'cancel_reply' => 'Cevabı iptal et',
            'waiting_for_approval_message' => 'Yorumunuz onay bekliyor. Bu bir ön izlemedir, yorumunuz onaylandıktan sonra görüntülenecektir.',
        ],
        'form' => [
            'title' => 'yorum Yap',
            'description' => 'E-posta hesabınız yayımlanmayacak. Gerekli alanlar işaretlendi *',
            'cookie_consent' => 'Bir dahaki sefere yorum yaptığımda kullanılmak üzere adımı, e-posta adresimi ve web site adresimi bu tarayıcıya kaydet.',
            'submit' => 'Yorum Gönder',
        ],
        'comment_success_message' => 'Yorumunuz başarıyla gönderildi.',
    ],
    'enums' => [
        'statuses' => [
            'pending' => 'Askıda olması',
            'approved' => 'Onaylı',
            'spam' => 'İstenmeyen e-posta',
            'trash' => 'Çöp',
        ],
    ],
    'settings' => [
        'title' => 'FOB Yorumu',
        'description' => 'FOB Yorumu için ayarları yapılandırın',
        'form' => [
            'enable_recaptcha' => 'reCAPTCHA\'yı etkinleştir',
            'enable_recaptcha_help' => 'You need to enable reCAPTCHA in :url to use this feature.',
            'captcha_setting_label' => 'Captcha Ayarları',
            'comment_moderation' => 'Yorumlar manuel olarak onaylanmalıdır',
            'comment_moderation_help' => 'Tüm yorumların ön uçta görüntülenmeden önce bir yönetici tarafından manuel olarak onaylanması gerekir.',
            'show_comment_cookie_consent' => 'Ziyaretçilerin bilgilerini tarayıcıya kaydetmelerine olanak tanıyan yorum çerezlerini göster onay kutusu',
            'auto_fill_comment_form' => 'Oturum açmış kullanıcılar için yorum verilerini otomatik doldur',
            'auto_fill_comment_form_help' => 'Yorum formu, giriş yapmış olmaları halinde otomatik olarak tam ad, e-posta adresi vb. kullanıcı verileriyle doldurulacaktır.',
            'comment_order' => 'Yorumları şuna göre sırala:',
            'comment_order_help' => 'Listedeki yorumların görüntülenmesi için tercih edilen sırayı seçin.',
            'comment_order_choices' => [
                'asc' => 'En eski',
                'desc' => 'En yeni',
            ],
            'display_admin_badge' => 'Yönetici yorumları için yönetici rozetini görüntüle',
        ],
    ],
];
