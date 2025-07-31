<?php

return [
    'settings' => [
        'title' => 'Optimize',
        'description' => 'HTML çıktısını küçült, satır içi CSS\'i küçült, yorumları kaldır...',
        'enable' => 'Sayfa hızını optimize etmeyi etkinleştir?',
    ],
    'collapse_white_space' => 'Beyaz alanı daralt',
    'collapse_white_space_description' => 'Bu filtre, gereksiz boşlukları kaldırarak bir HTML dosyasında iletilen bayt sayısını azaltır.',
    'elide_attributes' => 'Elide nitelikleri',
    'elide_attributes_description' => 'Bu filtre, belirtilen değer o öznitelik için varsayılan değere eşit olduğunda etiketlerden öznitelikleri kaldırarak HTML dosyalarının aktarım boyutunu azaltır. Bu, mütevazı sayıda bayttan tasarruf sağlayabilir ve etkilenen etiketleri kanonikleştirerek belgeyi daha sıkıştırılabilir hale getirebilir.',
    'inline_css' => 'Satır içi CSS',
    'inline_css_description' => 'Bu filtre, CSS\'yi başlığa taşıyarak etiketlerin satır içi stil niteliğini sınıflara dönüştürür.',
    'insert_dns_prefetch' => 'DNS ön yüklemesini ekle',
    'insert_dns_prefetch_description' => 'Bu filtre, tarayıcının DNS ön yüklemesini yapabilmesini sağlamak için HEAD\'e etiketler ekler.',
    'remove_comments' => 'Yorumları kaldır',
    'remove_comments_description' => 'Bu filtre HTML, JS ve CSS yorumlarını ortadan kaldırır. Filtre, yorumları kaldırarak HTML dosyalarının aktarım boyutunu azaltır. HTML dosyasına bağlı olarak, bu filtre ağda iletilen bayt sayısını önemli ölçüde azaltabilir.',
    'remove_quotes' => 'Tırnak işaretlerini kaldır',
    'remove_quotes_description' => 'Bu filtre, HTML niteliklerinden gereksiz tırnak işaretlerini ortadan kaldırır. Çeşitli HTML spesifikasyonları tarafından gerekli kılınsa da, tarayıcılar bir niteliğin değeri belirli bir karakter alt kümesinden (alfanümerikler ve bazı noktalama işaretleri) oluştuğunda bunların atlanmasına izin verir.',
    'defer_javascript' => 'Javascript\'i ertele',
    'defer_javascript_description' => 'HTML\'de javascript\'in yürütülmesini erteler. Gerekirse bazı betiklerdeki ertelemeyi iptal edin, ertelemeyi iptal etmek için betik niteliği olarak data-pagespeed-no-defer kullanın.',
];
