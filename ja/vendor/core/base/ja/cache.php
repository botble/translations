<?php

return [
    'cache_management' => 'キャッシュ管理',
    'cache_management_description' => 'キャッシュをクリアしてサイトを最新の状態にします。',
    'cache_commands' => 'キャッシュのクリアコマンド',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'CMS キャッシュをすべてクリアする',
            'description' => 'CMS キャッシュのクリア: データベース キャッシュ、静的ブロック... データを更新した後に変更が表示されない場合は、このコマンドを実行します。',
            'success_msg' => 'キャッシュが消去されました',
        ],
        'refresh_compiled_views' => [
            'title' => 'コンパイルされたビューを更新する',
            'description' => 'コンパイルされたビューをクリアしてビューを最新の状態にします。',
            'success_msg' => 'キャッシュビューが更新されました',
        ],
        'clear_config_cache' => [
            'title' => '設定キャッシュをクリアする',
            'description' => '実稼働環境で何かを変更するときは、構成キャッシュの更新が必要になる場合があります。',
            'success_msg' => '構成キャッシュが消去されました',
        ],
        'clear_route_cache' => [
            'title' => 'ルートキャッシュをクリアする',
            'description' => 'キャッシュルーティングをクリアします。',
            'success_msg' => 'ルートキャッシュが消去されました',
        ],
        'clear_log' => [
            'title' => 'ログをクリアする',
            'description' => 'システムログファイルをクリアする',
            'success_msg' => 'システムログが消去されました',
        ],
    ],
];
