<?php

return [
    'settings' => [
        'title' => '最佳化',
        'description' => '縮小 HTML 輸出、內嵌 CSS、刪除註解...',
        'enable' => '啟用優化頁面速度？',
    ],
    'collapse_white_space' => '折疊空白區域',
    'collapse_white_space_description' => '此過濾器透過刪除不必要的空格來減少 HTML 檔案中傳輸的位元組數。',
    'elide_attributes' => '刪除屬性',
    'elide_attributes_description' => '當指定值等於該屬性的預設值時，此篩選器會透過從標記中刪除屬性來減少 HTML 檔案的傳輸大小。這可以節省一定數量的字節，並且可以透過規範化受影響的標籤來使文件更具可壓縮性。',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => '該過濾器透過將 CSS 移動到標題，將標籤的內聯「樣式」屬性轉換為類別。',
    'insert_dns_prefetch' => '插入 DNS 預取',
    'insert_dns_prefetch_description' => '此過濾器在 HEAD 中註入標籤，以使瀏覽器能夠進行 DNS 預取。',
    'remove_comments' => '刪除評論',
    'remove_comments_description' => '該過濾器消除了 HTML、JS 和 CSS 註解。此過濾器透過刪除註解來減少 HTML 檔案的傳輸大小。根據 HTML 檔案的不同，此篩選器可以顯著減少網路上傳輸的位元組數。',
    'remove_quotes' => '刪除引號',
    'remove_quotes_description' => '此過濾器消除了 HTML 屬性中不必要的引號。雖然各種 HTML 規範都有要求，但當屬性值由特定字元子集（字母數字和一些標點符號）組成時，瀏覽器允許省略它們。',
    'defer_javascript' => '延遲 JavaScript',
    'defer_javascript_description' => '延遲 HTML 中 javascript 的執行。如果需要在某些腳本中取消延遲，請使用 data-pagespeed-no-defer 作為腳本屬性來取消延遲。',
];
