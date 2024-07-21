<?php

return [
    'settings' => [
        'title' => 'Optimize et',
        'description' => 'HTML çıktısını küçültün, satır içi CSS\'yi, yorumları kaldırın...',
        'enable' => 'Sayfa hızını optimize etme etkinleştirilsin mi?',
    ],
    'collapse_white_space' => 'Beyaz alanı daralt',
    'collapse_white_space_description' => 'Bu filtre, gereksiz boşlukları kaldırarak bir HTML dosyasında iletilen baytları azaltır.',
    'elide_attributes' => 'Elide nitelikleri',
    'elide_attributes_description' => 'Bu filtre, belirtilen değer o özniteliğin varsayılan değerine eşit olduğunda, öznitelikleri etiketlerden kaldırarak HTML dosyalarının aktarım boyutunu azaltır. Bu, az sayıda bayt tasarrufu sağlayabilir ve etkilenen etiketleri standartlaştırarak belgeyi daha sıkıştırılabilir hale getirebilir.',
    'inline_css' => 'Satır içi CSS',
    'inline_css_description' => 'Bu filtre, CSS\'yi başlığa taşıyarak etiketlerin satır içi "stil" özelliğini sınıflara dönüştürür.',
    'insert_dns_prefetch' => 'DNS ön getirmesini ekle',
    'insert_dns_prefetch_description' => 'Bu filtre, tarayıcının DNS önceden getirmesini sağlamak için HEAD\'e etiketler enjekte eder.',
    'remove_comments' => 'Yorumları kaldır',
    'remove_comments_description' => 'Bu filtre HTML, JS ve CSS yorumlarını ortadan kaldırır. Filtre, yorumları kaldırarak HTML dosyalarının aktarım boyutunu azaltır. HTML dosyasına bağlı olarak bu filtre, ağda iletilen bayt sayısını önemli ölçüde azaltabilir.',
    'remove_quotes' => 'Tırnak işaretlerini kaldır',
    'remove_quotes_description' => 'Bu filtre, HTML niteliklerindeki gereksiz tırnak işaretlerini ortadan kaldırır. Çeşitli HTML spesifikasyonları gerektirdiği halde, bir niteliğin değeri belirli bir karakter alt kümesinden (alfasayısal karakterler ve bazı noktalama işaretleri) oluştuğunda, tarayıcılar bunların hariç tutulmasına izin verir.',
    'defer_javascript' => 'Javascript\'i ertele',
    'defer_javascript_description' => 'HTML\'de javascript\'in yürütülmesini erteler. Gerekirse bazı komut dosyalarında ertelemeyi iptal edin, ertelemeyi iptal etmek için komut dosyası özelliği olarak data-pagespeed-no-defer kullanın.',
];
