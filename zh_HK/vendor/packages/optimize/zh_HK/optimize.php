<?php

return [
    'settings' => [
        'title' => '優化',
        'description' => '壓縮HTML輸出，內嵌CSS，移除註解...',
        'enable' => '啟用優化頁面速度？',
    ],
    'collapse_white_space' => '收縮空白空間',
    'collapse_white_space_description' => '這個過濾器通過去除不必要的空白來減少在HTML文件中傳輸的字節。',
    'elide_attributes' => '隱藏屬性',
    'elide_attributes_description' => '這個過濾器通過在指定值等於該屬性的默認值時，從標籤中刪除屬性來減少HTML文件的傳輸大小。這可以節省一定的字節數，並可能通過標準化受影響的標籤來使文檔更易於壓縮。',
    'inline_css' => '內聯CSS',
    'inline_css_description' => '這個過濾器將標籤的內聯 "style" 屬性轉換為類別，通過將 CSS 移到標頭。',
    'insert_dns_prefetch' => '插入 DNS 預取',
    'insert_dns_prefetch_description' => '這個過濾器在HEAD中注入標籤，以便瀏覽器進行DNS預取。',
    'remove_comments' => '移除註解',
    'remove_comments_description' => '這個過濾器消除HTML、JS和CSS的註釋。這個過濾器通過刪除註釋來減少HTML文件的傳輸大小。根據HTML文件的不同，這個過濾器可以顯著減少在網絡上傳輸的字節數。',
    'remove_quotes' => '移除引號',
    'remove_quotes_description' => '這個過濾器會消除HTML屬性中不必要的引號。雖然各種HTML規範要求使用引號，但當屬性的值由某些字符（字母數字和一些標點符號）組成時，瀏覽器允許省略它們。',
    'defer_javascript' => '延遲javascript',
    'defer_javascript_description' => '延遲HTML中JavaScript的執行。如果需要在某些腳本中取消延遲，請使用data-pagespeed-no-defer作為腳本屬性來取消延遲。',
];
