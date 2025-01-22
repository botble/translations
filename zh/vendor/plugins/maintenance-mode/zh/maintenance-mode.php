<?php

return [
    'maintenance_mode' => '维护模式',
    'message' => '消息',
    'message_placeholder' => '给您的用户的一条消息',
    'retry_time' => '重试时间',
    'retry_time_placeholder' => '设置 Retry-After 头部',
    'secs' => '秒',
    'allowed_ip_address' => '允许的IP地址',
    'allowed_your_current_ip' => '允许您的当前IP',
    'allowed_your_current_ip_helper' => '如果您取消选中此项并且没有在上方添加您的IP地址，您将失去对该网站的访问权限。',
    'enable_maintenance_mode' => '启用维护模式',
    'disable_maintenance_mode' => '禁用维护模式',
    'application_live' => '应用程序现在上线',
    'application_down' => '应用程序现在处于维护模式',
    'notice_enable' => '您的网站当前处于维护模式',
    'notice_disable' => '您的网站现在已上线',
    'secret' => '秘密（绕过维护模式）',
    'secret_helper' => '即使在维护模式下，您也可以使用秘密选项指定维护模式绕过令牌；<br />'."\n"
        .'在将应用程序置于维护模式后，您可以导航到与此令牌匹配的应用程序 URL，Laravel 将向您的浏览器发出维护模式绕过 cookie：',
    'redirect' => '重定向维护模式请求',
    'redirect_placeholder' => '简体中文翻译，没用引号：',
    'redirect_helper' => '在维护模式下，Laravel将为用户尝试访问的所有应用程序URL显示维护模式视图。如果您愿意，可以指示Laravel将所有请求重定向到特定URL。这可以通过重定向选项来实现。',
    'bypass_maintenance_mode' => '绕过维护模式',
    'click_to_bypass_maintenance_mode' => '请点击<a class="maintenance-mode-bypass" href="" target="_blank">这里</a>以绕过维护模式。',
    'close' => '关闭',
    'bypass_warning' => '绕过维护模式的秘密链接，<strong>您需要将此链接保存在安全的地方</strong>',
];
