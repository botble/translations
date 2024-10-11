<?php

return [
    'title' => 'インストール',
    'next' => '次のステップ',
    'back' => '前の',
    'finish' => 'インストール',
    'installation' => 'インストール',
    'forms' => [
        'errorTitle' => '次のエラーが発生しました:',
    ],
    'welcome' => [
        'title' => 'いらっしゃいませ',
        'message' => '始める前に、データベースに関する情報が必要です。続行する前に、次の項目を理解しておく必要があります。',
        'language' => '言語',
        'next' => 'さあ行こう',
    ],
    'requirements' => [
        'title' => 'サーバー要件',
        'next' => '権限を確認する',
    ],
    'permissions' => [
        'next' => '環境の構成',
    ],
    'environment' => [
        'wizard' => [
            'title' => '環境設定',
            'form' => [
                'name_required' => '環境名は必須です。',
                'app_name_label' => 'サイトタイトル',
                'app_name_placeholder' => 'サイトタイトル',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'データベース接続',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'データベースホスト',
                'db_host_placeholder' => 'データベースホスト',
                'db_port_label' => 'データベースポート',
                'db_port_placeholder' => 'データベースポート',
                'db_name_label' => 'データベース名',
                'db_name_placeholder' => 'データベース名',
                'db_username_label' => 'データベースのユーザー名',
                'db_username_placeholder' => 'データベースのユーザー名',
                'db_password_label' => 'データベースのパスワード',
                'db_password_placeholder' => 'データベースのパスワード',
                'buttons' => [
                    'install' => 'インストール',
                ],
                'db_host_helper' => 'Laravel Sail を使用する場合は、DB_HOST を DB_HOST=mysql に変更するだけです。一部のホスティングでは、DB_HOST を 127.0.0.1 ではなく localhost にすることができます。',
                'db_connections' => [
                    'mysql' => 'mysql',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => '.env ファイル設定が保存されました。',
        'errors' => '.env ファイルを保存できません。手動で作成してください。',
    ],
    'theme' => [
        'title' => 'テーマを選択してください',
        'message' => 'テーマを選択して、Web サイトの外観をカスタマイズします。この選択により、選択したテーマに合わせたサンプル データもインポートされます。',
    ],
    'createAccount' => [
        'title' => 'アカウントを作成する',
        'form' => [
            'first_name' => 'ファーストネーム',
            'last_name' => '苗字',
            'username' => 'ユーザー名',
            'email' => '電子メール',
            'password' => 'パスワード',
            'password_confirmation' => 'パスワードの確認',
            'create' => '作成する',
        ],
    ],
    'license' => [
        'title' => 'ライセンスのアクティベーション',
        'skip' => '今のところスキップしてください',
    ],
    'install' => 'インストール',
    'final' => [
        'pageTitle' => 'インストールが完了しました',
        'title' => '終わり',
        'message' => 'アプリケーションは正常にインストールされました。',
        'exit' => '管理者ダッシュボードに移動',
    ],
    'install_success' => '無事にインストールされました！',
    'install_step_title' => 'Installation - Step :step: :title',
];
