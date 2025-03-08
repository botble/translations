<?php

return [
    'statuses' => [
        'draft' => 'Entwurf',
        'pending' => 'Ausstehend',
        'published' => 'Veröffentlicht',
    ],
    'system_updater_steps' => [
        'download' => 'Laden Sie Update -Dateien herunter',
        'update_files' => 'Systemdateien aktualisieren',
        'update_database' => 'Datenbanken aktualisieren',
        'publish_core_assets' => 'Kernvermögen veröffentlichen',
        'publish_packages_assets' => 'Veröffentlichung von Vermögenswerten veröffentlichen',
        'clean_up' => 'Säuberungsdateien aufräumen',
        'done' => 'System erfolgreich aktualisiert',
        'messages' => [
            'download' => 'Update -Dateien herunterladen ...',
            'update_files' => 'Systemdateien aktualisieren ...',
            'update_database' => 'Datenbanken aktualisieren ...',
            'publish_core_assets' => 'Kernvermögen veröffentlichen ...',
            'publish_packages_assets' => 'Veröffentlichungspakete Vermögenswerte ...',
            'clean_up' => 'Reinigen von System -Aktualisierungsdateien ...',
            'done' => 'Erledigt! Ihr Browser wird in 30 Sekunden aktualisiert.',
        ],
        'failed_messages' => [
            'download' => 'Konnten Aktualisierungsdateien nicht herunterladen',
            'update_files' => 'Es konnte keine Systemdateien aktualisieren',
            'update_database' => 'Datenbanken konnten keine Datenbanken aktualisieren',
            'publish_core_assets' => 'Konnte keine Kernvermögen veröffentlichen',
            'publish_packages_assets' => 'Konnte Pakete nicht veröffentlichen Vermögenswerte',
            'clean_up' => 'Es konnte keine Systemdateien aufräumen, Systeme zu aktualisieren',
        ],
        'success_messages' => [
            'download' => 'Aktualisierungsdateien erfolgreich heruntergeladen.',
            'update_files' => 'Systemdateien erfolgreich aktualisiert.',
            'update_database' => 'Datenbanken erfolgreich aktualisiert.',
            'publish_core_assets' => 'Veröffentlichte Kernvermögen erfolgreich.',
            'publish_packages_assets' => 'Veröffentlichte Vermögenswerte erfolgreich.',
            'clean_up' => 'Reinigte System -Aktualisierungsdateien erfolgreich.',
        ],
    ],
];
