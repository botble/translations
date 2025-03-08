<?php

return [
    'tools' => [
        'export_import_data' => 'Daten exportieren/importieren',
    ],
    'import' => [
        'name' => 'Import',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'Die Datei ist ungültig oder beschädigt oder zu groß zum Lesen.',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'Ziehen Sie die Datei hier oder klicken Sie hier, um hochzuladen',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => 'Import',
            'chunk_size' => 'Chunkgröße',
            'chunk_size_helper' => 'Die Anzahl der Zeilen, die jeweils importiert werden sollen, wird durch die Staugröße definiert. Erhöhen Sie diesen Wert, wenn Sie eine große Datei haben und die Daten sehr schnell importiert werden. Verringern Sie diesen Wert, wenn Sie beim Importieren von Speicherlimits oder Timeout -Problemen mit Gateway -Timeout stoßen.',
        ],
        'failures' => [
            'title' => 'Fehler',
            'attribute' => 'Attribut',
            'errors' => 'Fehler',
        ],
        'example' => [
            'title' => 'Beispiel',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => 'Regeln',
            'column' => 'Spalte',
        ],
        'uploading_message' => 'Datei hochladen ...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => 'Validieren fehlgeschlagen. Bitte überprüfen Sie die folgenden Fehler.',
        'no_data_message' => 'Ihre Daten sind bereits auf dem neuesten Stand oder keine Daten zum Importieren.',
    ],
    'export' => [
        'name' => 'Export',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => 'Spalten',
            'format' => 'Format',
            'export_button' => 'Export',
        ],
        'success_message' => 'Erfolgreich exportiert.',
        'error_message' => 'Export fehlgeschlagen.',
        'empty_state' => [
            'title' => 'Keine Daten zum Exportieren',
            'description' => 'Sieht so aus, als ob es keine Daten zum Exportieren gibt.',
            'back' => 'Back to :page',
        ],
    ],
    'check_all' => 'Überprüfen Sie alle',
];
