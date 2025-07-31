<?php

return [
    'name' => 'Notification Plus',
    'description' => 'Send notifications to Telegram, Slack, WhatsApp, Vonage, Twilio.',
    'settings' => [
        'enable' => 'Enable?',
    ],
    'telegram' => [
        'settings' => [
            'title' => 'Telegram settings',
            'description' => 'Telegram bots, send notifications to Telegram channel. You can create bot by following this :link.',
            'bot_token' => 'Bot Token',
            'chat_id' => 'Chat ID',
            'bot_token_instruction' => 'Chat with :link to get bot token.',
            'chat_id_instruction' => 'Add bot to your group to get chat IDs. After that, you can click to "Get Chat Ids" to choose which group to send notifications. If you cannot get chat IDs, try to send a message to your group.',
            'get_chat_ids' => 'Get Chat IDs',
            'cannot_get_chat_ids' => 'Cannot get Chat IDs. Please add bot to your group and send at least one message to the group.',
        ],
    ],
    'slack' => [
        'settings' => [
            'title' => 'Slack settings',
            'description' => 'By following this :link, you can create a new app in Slack and add a webhook to your channel.',
            'webhook_url' => 'Webhook URL',
            'webhook_url_instruction' => 'Create a new app in Slack and add a webhook to your channel.',
        ],
    ],
    'whatsapp' => [
        'settings' => [
            'title' => 'WhatsApp settings',
            'description' => 'To send WhatsApp messages, you need to create a WhatsApp Business account at :link and get an access token.',
            'access_token' => 'Access Token',
            'phone_number_id' => 'Phone Number ID',
            'to_phone_number' => 'To Phone Number',
            'to_phone_number_instruction' => 'Phone number of the recipient, including the country code and without any formatting.',
        ],
    ],
    'vonage' => [
        'settings' => [
            'title' => 'Vonage settings',
            'description' => 'To send SMS messages, you need to create a Vonage account at :link and get API key and secret.',
            'api_key' => 'API Key',
            'api_key_instruction' => 'You can get your API key and secret from the Vonage API dashboard.',
            'api_secret' => 'API Secret',
            'from' => 'From',
            'from_instruction' => 'The name or number the message should be sent from.',
            'to' => 'To',
            'to_instruction' => 'The number that the message should be sent to. Numbers are specified in E.164 format.',
        ],
    ],
    'twilio' => [
        'settings' => [
            'title' => 'Twilio settings',
            'description' => 'To send SMS messages, you need to create a Twilio account at :link and get account sid and auth token.',
            'account_sid' => 'Account SID',
            'account_sid_instruction' => 'You can get your Account SID and Auth Token from the Twilio Console.',
            'auth_token' => 'Auth Token',
            'from' => 'Send from',
            'to' => 'Send to',
            'from_instruction' => 'Your Twilio phone number.',
            'to_instruction' => 'The number that the message should be sent to.',
        ],
    ],
    'send_test_message' => [
        'button_text' => 'Send test message',
        'success_message' => 'Test message sent successfully!',
        'modal_title' => 'Send test message',
        'modal_message_label' => 'Message',
        'modal_button_text' => 'Send',
    ],
];
