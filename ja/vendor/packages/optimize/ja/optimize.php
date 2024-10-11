<?php

return [
    'settings' => [
        'title' => '最適化する',
        'description' => 'HTML 出力の縮小、インライン CSS、コメントの削除...',
        'enable' => 'ページ速度の最適化を有効にしますか?',
    ],
    'collapse_white_space' => '空白を折りたたむ',
    'collapse_white_space_description' => 'このフィルタは、不要な空白を削除することにより、HTML ファイルで送信されるバイト数を削減します。',
    'elide_attributes' => '属性を削除する',
    'elide_attributes_description' => 'このフィルタは、指定された値がその属性のデフォルト値と等しい場合に、タグから属性を削除することで HTML ファイルの転送サイズを削減します。これにより、適度なバイト数を節約でき、影響を受けるタグを正規化することでドキュメントの圧縮性が高まる可能性があります。',
    'inline_css' => 'インラインCSS',
    'inline_css_description' => 'このフィルターは、CSS をヘッダーに移動することにより、タグのインライン「スタイル」属性をクラスに変換します。',
    'insert_dns_prefetch' => 'DNS プリフェッチを挿入する',
    'insert_dns_prefetch_description' => 'このフィルタは、HEAD にタグを挿入して、ブラウザが DNS プリフェッチを実行できるようにします。',
    'remove_comments' => 'コメントを削除する',
    'remove_comments_description' => 'このフィルターは、HTML、JS、および CSS のコメントを除去します。フィルタはコメントを削除することで HTML ファイルの転送サイズを削減します。 HTML ファイルによっては、このフィルタによりネットワーク上で送信されるバイト数が大幅に削減される場合があります。',
    'remove_quotes' => '引用符を削除する',
    'remove_quotes_description' => 'このフィルタは、HTML 属性から不要な引用符を削除します。さまざまな HTML 仕様で義務付けられていますが、属性の値が文字の特定のサブセット (英数字と一部の句読点文字) で構成されている場合、ブラウザでは省略が許可されています。',
    'defer_javascript' => 'JavaScript を延期する',
    'defer_javascript_description' => 'HTML 内の JavaScript の実行を延期します。スクリプトで遅延をキャンセルする必要がある場合は、スクリプト属性として data-pagespeed-no-defer を使用して遅延をキャンセルします。',
];
