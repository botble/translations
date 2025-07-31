<?php

return [
    'webhook_secret' => 'Webhook Gizli',
    'webhook_setup_guide' => [
        'title' => 'Stripe Webhook Kurulum Kılavuzu',
        'description' => 'Stripe webhook\'u kurmak için şu adımları izleyin',
        'step_1_label' => 'Stripe Pano\'ya giriş yapın',
        'step_1_description' => ':link\'e erişin ve Geliştiriciler sekmesinin Webhooks bölümündeki Uç Nokta Ekle düğmesine tıklayın.',
        'step_2_label' => 'Olayı Seçin ve Uç Noktayı Yapılandırın',
        'step_2_description' => 'payment_intent.succeeded olayını seçin ve Uç Nokta URL alanına aşağıdaki URL\'yi girin: :url',
        'step_3_label' => 'Son Nokta Ekle',
        'step_3_description' => 'Webhook\'u kaydetmek için Uç Nokta Ekle düğmesine tıklayın.',
        'step_4_label' => 'İmzalama Gizli Kopyası',
        'step_4_description' => 'Webhook Ayrıntıları bölümünden İmzalama Gizli Değeri değerini kopyalayın ve Ayarlar sayfasındaki Ödeme sekmesinin Stripe bölümündeki Stripe Webhook Gizli Değeri alanına yapıştırın.',
    ],
];
