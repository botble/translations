<?php

return [
    'tools' => [
        'export_import_data' => 'データのエクスポート/インポート',
    ],
    'import' => [
        'name' => '輸入',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'ファイルが無効か破損しているか、大きすぎて読み取ることができません。',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'ここにファイルをドラッグ アンド ドロップするか、クリックしてアップロードします',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => '輸入',
            'chunk_size' => 'チャンクサイズ',
            'chunk_size_helper' => '一度にインポートされる行数はチャンク サイズによって定義されます。ファイルが大きく、データが非常に高速にインポートされる場合は、この値を増やします。データのインポート時にメモリ制限やゲートウェイ タイムアウトの問題が発生した場合は、この値を減らします。',
        ],
        'failures' => [
            'title' => '失敗',
            'attribute' => '属性',
            'errors' => 'エラー',
        ],
        'example' => [
            'title' => '例',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => 'ルール',
            'column' => 'カラム',
        ],
        'uploading_message' => 'ファイルのアップロードを開始しています...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => '検証に失敗しました。以下のエラーを確認してください。',
        'no_data_message' => 'データはすでに最新であるか、インポートするデータがありません。',
    ],
    'export' => [
        'name' => '輸出',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => 'コラム',
            'format' => '形式',
            'export_button' => '輸出',
        ],
        'success_message' => '正常にエクスポートされました。',
        'error_message' => 'エクスポートに失敗しました。',
        'empty_state' => [
            'title' => 'エクスポートするデータがありません',
            'description' => 'エクスポートするデータがないようです。',
            'back' => 'Back to :page',
        ],
    ],
];
