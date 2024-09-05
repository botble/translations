<?php

return [
    'tools' => [
        'export_import_data' => '匯入/匯出 數據',
    ],
    'import' => [
        'no_data_message' => '您的資料已經是最新的或沒有要匯入的資料。',
        'validating_failed_message' => '驗證失敗。請檢查下面的錯誤。',
        'validating_message' => '驗證從 :from 到 :to...',
        'name' => '匯入',
        'heading' => '匯入 :label',
        'failed_to_read_file' => '檔案無效、已損壞或太大而無法讀取。',
        'form' => [
            'quick_export_message' => '如果您想要匯出 :label 數據，可以透過點擊 :export_csv_link 或 :export_excel_link 快速完成。',
            'quick_export_button' => '匯出 :format',
            'dropzone_message' => '將檔案拖放到此處或點擊上傳',
            'allowed_extensions' => '選擇具有以下副檔名的檔案：:extensions。',
            'import_button' => '匯出',
            'chunk_size' => '區塊大小',
            'chunk_size_helper' => '一次導入的行數由區塊大小定義。如果您有一個大檔案並且資料匯入速度非常快，請增加此值。如果匯入資料時遇到記憶體限製或閘道逾時問題，請減少此值。',
        ],
        'failures' => [
            'title' => '失敗',
            'attribute' => '屬性',
            'errors' => '錯誤',
        ],
        'example' => [
            'title' => '案例',
            'download' => '下載範例：輸入文件',
        ],
        'rules' => [
            'title' => '規則',
            'column' => '表格',
        ],
        'uploading_message' => '開始上傳文件...',
        'uploaded_message' => '文件：文件已成功上傳。開始驗證資料...',
        'importing_message' => '導入從 :from 到 :to...',
        'done_message' => '導入 :count :label 成功。',
    ],
    'export' => [
        'name' => '匯出',
        'heading' => '出口：標籤',
        'form' => [
            'all_columns_disabled' => '將會匯出以下列：表格。',
            'columns' => '表格',
            'format' => '格式',
            'export_button' => '匯出',
        ],
        'success_message' => '匯出成功。',
        'error_message' => '匯出失敗。',
        'empty_state' => [
            'title' => '沒有數據可匯出',
            'description' => '看起來沒有數據可匯出。',
            'back' => '返回：頁面',
        ],
    ],
];
