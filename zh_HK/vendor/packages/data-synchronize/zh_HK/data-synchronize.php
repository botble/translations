<?php

return [
    'tools' => [
        'export_import_data' => '匯出/匯入數據',
    ],
    'import' => [
        'name' => '導入',
        'heading' => '匯入 :label',
        'failed_to_read_file' => '檔案無效、損壞或太大而無法讀取。',
        'form' => [
            'quick_export_message' => '如果你想導出 :label 數據，你可以通過點擊 :export_csv_link 或 :export_excel_link 快速完成。',
            'quick_export_button' => '導出到 :format',
            'dropzone_message' => '將文件拖放到這裡或點擊上傳',
            'allowed_extensions' => '選擇一個具有以下擴展名的文件：:extensions。',
            'import_button' => '導入',
            'chunk_size' => '塊大小',
            'chunk_size_helper' => '一次導入的行數由塊大小定義。如果你有一個大文件並且數據導入得非常快，請增加這個值。如果在導入數據時遇到內存限制或網關超時問題，請減少這個值。',
        ],
        'failures' => [
            'title' => '失敗',
            'attribute' => '屬性',
            'errors' => '錯誤',
        ],
        'example' => [
            'title' => '例子',
            'download' => '下載範例 :type 文件',
        ],
        'rules' => [
            'title' => '規則',
            'column' => '欄位',
        ],
        'uploading_message' => '開始上傳文件...',
        'uploaded_message' => '檔案 :file 已成功上傳。開始驗證數據...',
        'validating_message' => '從 :from 驗證到 :to...',
        'importing_message' => '從 :from 導入到 :to...',
        'done_message' => '成功導入 :count :label。',
        'validating_failed_message' => '驗證失敗。請檢查以下錯誤。',
        'no_data_message' => '你的數據已經是最新的，或者沒有數據可供導入。',
    ],
    'export' => [
        'name' => '出口',
        'heading' => '匯出 :label',
        'form' => [
            'all_columns_disabled' => '以下列將被導出：:columns。',
            'columns' => '欄位',
            'format' => '格式',
            'export_button' => '出口',
        ],
        'success_message' => '成功導出。',
        'error_message' => '導出失敗。',
        'empty_state' => [
            'title' => '冇數據可以匯出',
            'description' => '睇嚟冇數據可以匯出。',
            'back' => '返回 :page',
        ],
    ],
    'check_all' => '檢查所有',
];
