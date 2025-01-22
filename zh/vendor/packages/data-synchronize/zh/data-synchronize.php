<?php

return [
    'tools' => [
        'export_import_data' => '导入/导出数据',
    ],
    'import' => [
        'name' => '导入',
        'heading' => '导入 :label',
        'failed_to_read_file' => '文件无效、损坏或太大而无法读取。',
        'form' => [
            'quick_export_message' => '如果您想导出 :label 数据，可以通过点击 :export_csv_link 或 :export_excel_link 快速完成。',
            'quick_export_button' => '导出为 :format',
            'dropzone_message' => '将文件拖放到此处或单击上传',
            'allowed_extensions' => '选择一个具有以下扩展名的文件：:extensions。',
            'import_button' => '导入',
            'chunk_size' => '块大小',
            'chunk_size_helper' => '一次导入的行数由块大小定义。如果您有一个大文件并且数据导入非常快，请增加此值。如果在导入数据时遇到内存限制或网关超时问题，请减少此值。',
        ],
        'failures' => [
            'title' => '失败',
            'attribute' => '属性',
            'errors' => '错误',
        ],
        'example' => [
            'title' => '示例',
            'download' => '下载示例 :type 文件',
        ],
        'rules' => [
            'title' => '规则',
            'column' => '列',
        ],
        'uploading_message' => '开始上传文件...',
        'uploaded_message' => '文件 :file 已成功上传。开始验证数据...',
        'validating_message' => '从 :from 验证到 :to...',
        'importing_message' => '从 :from 导入到 :to...',
        'done_message' => '成功导入 :count :label。',
        'validating_failed_message' => '验证失败。请检查下面的错误。',
        'no_data_message' => '您的数据已经是最新的，或者没有数据可导入。',
    ],
    'export' => [
        'name' => '导出',
        'heading' => '导出 :label',
        'form' => [
            'all_columns_disabled' => '将导出的列为：:columns。',
            'columns' => '列',
            'format' => '格式',
            'export_button' => '导出',
        ],
        'success_message' => '导出成功。',
        'error_message' => '导出失败。',
        'empty_state' => [
            'title' => '没有数据可导出',
            'description' => '看起来没有数据可以导出。',
            'back' => '返回 :page',
        ],
    ],
    'check_all' => '检查全部',
];
