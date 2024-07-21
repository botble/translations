<?php

return [
    'tools' => [
        'export_import_data' => 'تصدير/استيراد البيانات',
    ],
    'import' => [
        'name' => 'يستورد',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'الملف غير صالح أو تالف أو كبير جدًا بحيث لا يمكن قراءته.',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'قم بسحب وإسقاط الملف هنا أو انقر للتحميل',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => 'يستورد',
            'chunk_size' => 'حجم قطعة',
            'chunk_size_helper' => 'يتم تحديد عدد الصفوف التي سيتم استيرادها في المرة الواحدة حسب حجم القطعة. قم بزيادة هذه القيمة إذا كان لديك ملف كبير ويتم استيراد البيانات بسرعة كبيرة. قم بتقليل هذه القيمة إذا واجهت حدودًا للذاكرة أو مشكلات في مهلة البوابة عند استيراد البيانات.',
        ],
        'failures' => [
            'title' => 'الفشل',
            'attribute' => 'يصف',
            'errors' => 'أخطاء',
        ],
        'example' => [
            'title' => 'مثال',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => 'قواعد',
            'column' => 'عمود',
        ],
        'uploading_message' => 'بدء تحميل الملف...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => 'فشل التحقق من الصحة. يرجى التحقق من الأخطاء أدناه.',
        'no_data_message' => 'بياناتك محدثة بالفعل أو لا توجد بيانات لاستيرادها.',
    ],
    'export' => [
        'name' => 'يصدّر',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => 'أعمدة',
            'format' => 'شكل',
            'export_button' => 'يصدّر',
        ],
        'success_message' => 'تم التصدير بنجاح.',
        'error_message' => 'فشل التصدير.',
        'empty_state' => [
            'title' => 'لا توجد بيانات للتصدير',
            'description' => 'يبدو أنه لا توجد بيانات للتصدير.',
            'back' => 'Back to :page',
        ],
    ],
];
