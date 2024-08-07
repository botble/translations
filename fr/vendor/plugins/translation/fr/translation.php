<?php

return [
    'translations' => 'Translations',
    'export_warning' => 'Warning, translations are not visible until they are exported back to lang folder. Please use "Publish translations" button to apply changes.',
    'import_success_message' => 'Les nouvelles traductions ont été importées avec succès !',
    'translation_manager' => 'Translations Manager',
    'done_publishing' => 'Done publishing the translations for group',
    'append_translation' => 'Append new translations',
    'replace_translation' => 'Replace existing translations',
    'import_group' => 'Import group',
    'group' => 'Groupe',
    'confirm_publish_translations' => 'Are you sure you want to publish the translations for :locale? This will overwrite existing language files.',
    'publish_translations' => 'Publish translations',
    'back' => 'Back',
    'edit_title' => 'Enter translation',
    'all' => 'Tous',
    'locales' => 'Paramètres régionaux',
    'no_translations' => 'No translations found for :locale, click on the import button to import translations.',
    'locales_description' => 'Gérer et télécharger les paramètres régionaux',
    'theme-translations' => 'Theme Translations',
    'admin-translations' => 'Other Translations',
    'translate_from' => 'Translate from',
    'to' => 'to',
    'no_other_languages' => 'No other language to translate!',
    'edit' => 'Edit',
    'locale' => 'Lieu',
    'locale_placeholder' => 'Ex : fr',
    'name' => 'Name',
    'default_locale' => 'Default locale?',
    'actions' => 'Actions',
    'choose_language' => 'Choose language',
    'add_new_language' => 'Add new language',
    'select_language' => 'Select language',
    'flag' => 'Flag',
    'folder_is_not_writeable' => 'Cannot write files! Folder :lang_path is not writable. Please chmod to make it writable!',
    'delete' => 'Delete',
    'confirm_delete_message' => 'Do you really want to delete this locale? It will delete all files/folders for this local in :lang_path!',
    'download' => 'Télécharger',
    'select_locale' => 'Select locale',
    'theme_translations_instruction' => 'Click on text to translate. Do NOT translate variables, Eg. :username, :query, :link...',
    'add_new_locale' => 'Add new locale',
    'is_default' => 'Is default?',
    'localization' => 'Localisation',
    'here' => 'ici',
    're_import_alert' => 'If there are any missing translations, you can click :here to re-import the latest translations.',
    'panel' => [
        'locales' => [
            'title' => 'Paramètres régionaux',
            'description' => 'Afficher, télécharger et importer des paramètres régionaux',
        ],
        'theme-translations' => [
            'title' => 'Traductions de thèmes',
            'description' => 'Gérer les traductions du thème',
        ],
        'admin-translations' => [
            'title' => 'Autres traductions',
            'description' => 'Gérer les autres traductions (admin, plugins, packages...)',
        ],
    ],
    'please_select_locale' => 'Veuillez sélectionner une langue pour commencer la traduction. Si votre langue n\'est pas répertoriée, vous pouvez accéder à Paramètres -> Paramètres régionaux pour l\'ajouter.',
    'import_translations' => 'Importer des traductions',
    'export_description' => 'Export :name data to a CSV or Excel file.',
    'import_description' => 'Import :name data from a CSV or Excel file.',
    'import_translations_description' => 'Il trouvera tous les textes de traduction pour le thème principal et les ajoutera à la traduction',
    'import' => [
        'rules' => [
            'key' => 'Ne modifiez pas cette colonne lors de la traduction de mots.',
            'trans' => 'Can be empty or a string with a maximum length of :max characters if provided.',
        ],
    ],
];
