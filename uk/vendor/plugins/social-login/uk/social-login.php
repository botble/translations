<?php

return [
    'settings' => [
        'title' => 'Налаштування соціального входу',
        'description' => 'Налаштуйте параметри соціального входу',
        'facebook' => [
            'enable' => 'Увімкнути вхід через Facebook',
            'app_id' => 'ID додатку',
            'app_secret' => 'Секрет додатку',
            'helper' => 'Будь ласка, перейдіть на https://developers.facebook.com для створення нового додатку та оновлення ID додатку, Секрету додатку. URL для зворотного виклику: :callback',
            'data_deletion_request_callback_url' => 'Встановіть цей URL :url як URL для запиту видалення даних у налаштуваннях вашого додатку Facebook, щоб користувачі могли запитувати видалення своїх даних.',
        ],
        'google' => [
            'enable' => 'Увімкнути вхід через Google',
            'app_id' => 'ID додатку',
            'app_secret' => 'Секрет додатку',
            'helper' => 'Будь ласка, перейдіть на https://console.developers.google.com/apis/dashboard для створення нового додатку та оновлення ID додатку, Секрету додатку. URL для зворотного виклику: :callback',
        ],
        'github' => [
            'enable' => 'Увімкнути вхід через GitHub',
            'app_id' => 'ID додатку',
            'app_secret' => 'Секрет додатку',
            'helper' => 'Будь ласка, перейдіть на https://github.com/settings/developers для створення нового додатку та оновлення ID додатку, Секрету додатку. URL для зворотного виклику: :callback',
        ],
        'linkedin' => [
            'enable' => 'Увімкнути вхід через LinkedIn',
            'app_id' => 'ID додатку',
            'app_secret' => 'Секрет додатку',
            'helper' => 'Будь ласка, перейдіть на https://www.linkedin.com/developers/apps/new для створення нового додатку та оновлення ID додатку, Секрету додатку. URL для зворотного виклику: :callback',
        ],
        'linkedin-openid' => [
            'enable' => 'Увімкнути вхід через LinkedIn за допомогою OpenID Connect',
            'app_id' => 'ID додатку',
            'app_secret' => 'Секрет додатку',
            'helper' => 'Будь ласка, перейдіть на https://www.linkedin.com/developers/apps/new для створення нового додатку та оновлення ID додатку, Секрету додатку. URL для зворотного виклику: :callback',
        ],
        'enable' => 'Увімкнути соціальний вхід?',
        'style' => 'Стиль',
        'minimal' => 'Мінімальний',
        'default' => 'За замовчуванням',
    ],
    'socials' => [
        'facebook' => 'Facebook',
        'google' => 'Google',
        'github' => 'GitHub',
        'linkedin' => 'Linkedin',
        'linkedin-openid' => 'Linkedin OpenID Connect',
    ],
    'menu' => 'Соціальний вхід',
    'description' => 'Перегляньте та оновіть налаштування соціального входу',
    'sign_in_with' => 'Увійти через :provider',
];
