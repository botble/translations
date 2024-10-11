<?php

return [
    'statuses' => [
        'draft' => '下書き',
        'pending' => '保留中',
        'published' => '発行済み',
    ],
    'system_updater_steps' => [
        'download' => 'アップデートファイルをダウンロードする',
        'update_files' => 'システムファイルを更新する',
        'update_database' => 'データベースを更新する',
        'publish_core_assets' => 'コアアセットを公開する',
        'publish_packages_assets' => 'パッケージアセットを公開する',
        'clean_up' => 'システムアップデートファイルをクリーンアップする',
        'done' => 'システムが正常に更新されました',
        'messages' => [
            'download' => '更新ファイルをダウンロードしています...',
            'update_files' => 'システムファイルを更新しています...',
            'update_database' => 'データベースを更新しています...',
            'publish_core_assets' => 'コアアセットを公開しています...',
            'publish_packages_assets' => 'パッケージアセットを公開中...',
            'clean_up' => 'システムアップデートファイルをクリーンアップしています...',
            'done' => '終わり！ブラウザは 30 秒以内に更新されます。',
        ],
        'failed_messages' => [
            'download' => 'アップデートファイルをダウンロードできませんでした',
            'update_files' => 'システムファイルを更新できませんでした',
            'update_database' => 'データベースを更新できませんでした',
            'publish_core_assets' => 'コアアセットを公開できませんでした',
            'publish_packages_assets' => 'パッケージアセットを公開できませんでした',
            'clean_up' => 'システムアップデートファイルをクリーンアップできませんでした',
        ],
        'success_messages' => [
            'download' => 'アップデートファイルが正常にダウンロードされました。',
            'update_files' => 'システムファイルが正常に更新されました。',
            'update_database' => 'データベースが正常に更新されました。',
            'publish_core_assets' => 'コアアセットが正常に公開されました。',
            'publish_packages_assets' => 'パッケージアセットが正常に公開されました。',
            'clean_up' => 'システムアップデートファイルが正常にクリーンアップされました。',
        ],
    ],
];
