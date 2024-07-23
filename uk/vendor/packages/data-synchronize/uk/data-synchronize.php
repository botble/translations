<?php

return [
    'tools' => [
        'export_import_data' => 'Експорт/імпорт даних',
    ],
    'import' => [
        'name' => 'Імпорт',
        'heading' => 'Import :label',
        'failed_to_read_file' => 'Файл недійсний, пошкоджений або завеликий для читання.',
        'form' => [
            'quick_export_message' => 'If you want to export :label data, you can do it quickly by clicking on :export_csv_link or :export_excel_link.',
            'quick_export_button' => 'Export to :format',
            'dropzone_message' => 'Перетягніть файл сюди або натисніть, щоб завантажити',
            'allowed_extensions' => 'Choose a file with following extensions: :extensions.',
            'import_button' => 'Імпорт',
            'chunk_size' => 'Розмір шматка',
            'chunk_size_helper' => 'Кількість рядків, які потрібно імпортувати одночасно, визначається розміром блоку. Збільште це значення, якщо у вас великий файл і дані імпортуються дуже швидко. Зменшіть це значення, якщо під час імпортування даних виникнуть обмеження пам’яті або проблеми з тайм-аутом шлюзу.',
        ],
        'failures' => [
            'title' => 'Невдачі',
            'attribute' => 'Атрибут',
            'errors' => 'Помилки',
        ],
        'example' => [
            'title' => 'приклад',
            'download' => 'Download example :type file',
        ],
        'rules' => [
            'title' => 'правила',
            'column' => 'Колонка',
        ],
        'uploading_message' => 'Початок завантаження файлу...',
        'uploaded_message' => 'File :file has been uploaded successfully. Start validating data...',
        'validating_message' => 'Validating from :from to :to...',
        'importing_message' => 'Importing from :from to :to...',
        'done_message' => 'Imported :count :label successfully.',
        'validating_failed_message' => 'Помилка перевірки. Будь ласка, перевірте помилки нижче.',
        'no_data_message' => 'Ваші дані вже оновлені або немає даних для імпорту.',
    ],
    'export' => [
        'name' => 'Експорт',
        'heading' => 'Export :label',
        'form' => [
            'all_columns_disabled' => 'Following columns will be exported: :columns.',
            'columns' => 'Стовпці',
            'format' => 'Формат',
            'export_button' => 'Експорт',
        ],
        'success_message' => 'Успішно експортовано.',
        'error_message' => 'Помилка експорту.',
        'empty_state' => [
            'title' => 'Немає даних для експорту',
            'description' => 'Схоже, немає даних для експорту.',
            'back' => 'Back to :page',
        ],
    ],
];
