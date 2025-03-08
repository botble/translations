<?php

return [
    'cache_management' => 'Cache management',
    'cache_management_description' => 'Löschen Sie den Cache, um Ihre Website auf dem neuesten Stand zu machen.',
    'cache_commands' => 'Cache -Befehle löschen',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Löschen Sie alle CMS -Cache',
            'description' => 'CSMS -Caching löschen: Datenbank -Caching, statische Blöcke ... Führen Sie diesen Befehl aus, wenn Sie die Änderungen nach dem Aktualisieren von Daten nicht sehen.',
            'success_msg' => 'Cache gereinigt',
        ],
        'refresh_compiled_views' => [
            'title' => 'Aktualisieren Sie kompilierte Ansichten',
            'description' => 'Klare kompilierte Ansichten, um die Ansichten auf dem neuesten Stand zu machen.',
            'success_msg' => 'Cache -Ansicht aktualisiert',
        ],
        'clear_config_cache' => [
            'title' => 'Konfigurationscache löschen',
            'description' => 'Möglicherweise müssen Sie das Konfigurationsdaching aktualisieren, wenn Sie etwas in der Produktionsumgebung ändern.',
            'success_msg' => 'Konfigurationscache gereinigt',
        ],
        'clear_route_cache' => [
            'title' => 'Routencache löschen',
            'description' => 'Cache -Routing löschen.',
            'success_msg' => 'Der Routencache wurde gereinigt',
        ],
        'clear_log' => [
            'title' => 'Klares Protokoll',
            'description' => 'Systemprotokolldateien löschen',
            'success_msg' => 'Das Systemprotokoll wurde gereinigt',
        ],
    ],
];
