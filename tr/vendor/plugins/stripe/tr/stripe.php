<?php

return [
    'webhook_secret' => 'Web Kancası Sırrı',
    'webhook_setup_guide' => [
        'title' => 'Stripe Webhook Kurulum Kılavuzu',
        'description' => 'Stripe web kancası kurmak için bu adımları izleyin',
        'step_1_label' => 'Stripe Dashboard\'a giriş yapın',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'Olayı Seçin ve Uç Noktayı Yapılandırın',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'Uç Nokta Ekle',
        'step_3_description' => 'Web kancasını kaydetmek için "Uç Nokta Ekle" düğmesini tıklayın.',
        'step_4_label' => 'İmzalama Sırrını Kopyala',
        'step_4_description' => '"Webhook Ayrıntıları" bölümünden "İmzalama Sırrı" değerini kopyalayın ve "Ayarlar" sayfasındaki "Ödeme" sekmesinin "Stripe" bölümündeki "Stripe Webhook Sırrı" alanına yapıştırın.',
    ],
];
