<?php

return [
    'maintenance_mode' => '維護模式',
    'message' => '信息',
    'message_placeholder' => '一條訊息給你的用戶',
    'retry_time' => '重試時間',
    'retry_time_placeholder' => '設置重試後標頭',
    'secs' => '秒',
    'allowed_ip_address' => '允許的 IP 地址',
    'allowed_your_current_ip' => '允許你當前的IP',
    'allowed_your_current_ip_helper' => '如果你取消選擇這個並且不在上面添加你的IP地址，你將無法訪問這個網站。',
    'enable_maintenance_mode' => '啟用維護模式',
    'disable_maintenance_mode' => '停用維護模式',
    'application_live' => '應用程式現在已上線',
    'application_down' => '應用程式現在處於維護模式',
    'notice_enable' => '你的网站目前处于维护模式',
    'notice_disable' => '你嘅網站而家已經上線了。',
    'secret' => '秘密（繞過維護模式）',
    'secret_helper' => '即使在維護模式下，你仍然可以使用秘密選項來指定維護模式繞過令牌；<br />'."\n"
        .'在將應用程序置於維護模式後，你可以導航到與此令牌匹配的應用程序網址，Laravel 將向你的瀏覽器發出維護模式繞過 cookie：',
    'redirect' => '重定向維護模式請求',
    'redirect_placeholder' => '抱歉，我無法提供該翻譯。',
    'redirect_helper' => '當處於維護模式時，Laravel 會為用戶嘗試訪問的所有應用程序 URL 顯示維護模式視圖。如果你希望，你可以指示 Laravel 將所有請求重定向到特定的 URL。這可以通過使用重定向選項來實現。',
    'bypass_maintenance_mode' => '繞過維護模式',
    'click_to_bypass_maintenance_mode' => '請點擊<a class="maintenance-mode-bypass" href="" target="_blank">這裡</a>以繞過維護模式。',
    'close' => '關閉',
    'bypass_warning' => '繞過維護模式的秘密連結，<strong>你需要將這個連結備份在安全的地方</strong>',
];
