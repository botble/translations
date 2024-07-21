<?php

return [
    'tools' => [
        'export_import_data' => 'Verileri Dışa/İçe Aktarma',
    ],
    'import' => [
        'name' => 'İçe aktarmak',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'Dosya geçersiz, bozuk ya da okunamayacak kadar büyük.',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'Dosyayı buraya sürükleyip bırakın veya yüklemek için tıklayın',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => 'İçe aktarmak',
            'chunk_size' => 'Parça boyutu',
            'chunk_size_helper' => 'Bir seferde içe aktarılacak satır sayısı yığın boyutuna göre tanımlanır. Büyük bir dosyanız varsa ve veriler çok hızlı içe aktarılıyorsa bu değeri artırın. Verileri içe aktarırken bellek sınırlamalarıyla veya ağ geçidi zaman aşımı sorunlarıyla karşılaşırsanız bu değeri azaltın.',
        ],
        'failures' => [
            'title' => 'Başarısızlıklar',
            'attribute' => 'Bağlanmak',
            'errors' => 'Hatalar',
        ],
        'example' => [
            'title' => 'Örnek',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => 'Tüzük',
            'column' => 'Kolon',
        ],
        'uploading_message' => 'Dosya yüklenmeye başlıyor...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => 'Doğrulama başarısız oldu. Lütfen aşağıdaki hataları kontrol edin.',
        'no_data_message' => 'Verileriniz zaten güncel veya içe aktarılacak veri yok.',
    ],
    'export' => [
        'name' => 'İhracat',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => 'Sütunlar',
            'format' => 'Biçim',
            'export_button' => 'İhracat',
        ],
        'success_message' => 'Başarıyla dışa aktarıldı.',
        'error_message' => 'Dışa aktarma başarısız oldu.',
        'empty_state' => [
            'title' => 'Dışa aktarılacak veri yok',
            'description' => 'Dışa aktarılacak veri yok gibi görünüyor.',
            'back' => 'Back to :page',
        ],
    ],
];
