<?php

return [
    'tools' => [
        'export_import_data' => '导出/导入数据',
    ],
    'import' => [
        'name' => '进口',
        'heading' => 'Import :label',
        'failed_to_read_file' => '文件无效、已损坏或太大而无法读取。',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => '将文件拖放到此处或单击上传',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => '进口',
            'chunk_size' => '块大小',
            'chunk_size_helper' => '一次导入的行数由块大小定义。如果您有一个大文件并且数据导入速度非常快，请增加此值。如果导入数据时遇到内存限制或网关超时问题，请减小此值。',
        ],
        'failures' => [
            'title' => '失败',
            'attribute' => '属性',
            'errors' => '错误',
        ],
        'example' => [
            'title' => '例子',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => '规则',
            'column' => '柱子',
        ],
        'uploading_message' => '开始上传文件...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => '验证失败。请检查以下错误。',
        'no_data_message' => '您的数据已经是最新的或没有要导入的数据。',
    ],
    'export' => [
        'name' => '出口',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => '专栏',
            'format' => '格式',
            'export_button' => '出口',
        ],
        'success_message' => '导出成功。',
        'error_message' => '导出失败。',
        'empty_state' => [
            'title' => '没有数据可导出',
            'description' => '看起来没有数据可导出。',
            'back' => 'Back to :page',
        ],
    ],
    'check_all' => '检查全部',
];
