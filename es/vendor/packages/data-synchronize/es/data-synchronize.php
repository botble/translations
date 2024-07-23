<?php

return [
    'tools' => [
        'export_import_data' => 'Exportar/Importar datos',
    ],
    'import' => [
        'name' => 'Importar',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'El archivo no es válido, está dañado o es demasiado grande para leerlo.',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'Arrastra y suelta el archivo aquí o haz clic para cargarlo.',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => 'Importar',
            'chunk_size' => 'Tamaño de porción',
            'chunk_size_helper' => 'El número de filas que se importarán a la vez está definido por el tamaño del fragmento. Aumente este valor si tiene un archivo grande y los datos se importan muy rápido. Disminuya este valor si encuentra límites de memoria o problemas de tiempo de espera de la puerta de enlace al importar datos.',
        ],
        'failures' => [
            'title' => 'Fallos',
            'attribute' => 'Atributo',
            'errors' => 'Errores',
        ],
        'example' => [
            'title' => 'Ejemplo',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => 'Normas',
            'column' => 'Columna',
        ],
        'uploading_message' => 'Empezando a cargar el archivo...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => 'La validación falló. Por favor verifique los errores a continuación.',
        'no_data_message' => 'Tus datos ya están actualizados o no hay datos para importar.',
    ],
    'export' => [
        'name' => 'Exportar',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => 'columnas',
            'format' => 'Formato',
            'export_button' => 'Exportar',
        ],
        'success_message' => 'Exportado exitosamente.',
        'error_message' => 'La exportación falló.',
        'empty_state' => [
            'title' => 'No hay datos para exportar',
            'description' => 'Parece que no hay datos para exportar.',
            'back' => 'Back to :page',
        ],
    ],
];
