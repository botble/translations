<?php

return [
    'statuses' => [
        'draft' => 'Borrador',
        'pending' => 'Pendiente',
        'published' => 'Publicado',
    ],
    'system_updater_steps' => [
        'download' => 'Descargar archivos de actualización',
        'update_files' => 'Actualizar archivos del sistema',
        'update_database' => 'Actualizar bases de datos',
        'publish_core_assets' => 'Publicar activos principales',
        'publish_packages_assets' => 'Publicar activos de paquetes',
        'clean_up' => 'Limpiar los archivos de actualización del sistema',
        'done' => 'El sistema se ha actualizado correctamente',
        'messages' => [
            'download' => 'Descargando archivos de actualización...',
            'update_files' => 'Actualizando archivos del sistema...',
            'update_database' => 'Actualizando bases de datos...',
            'publish_core_assets' => 'Publicando activos principales...',
            'publish_packages_assets' => 'Publicando activos de paquetes...',
            'clean_up' => 'Limpiando los archivos de actualización del sistema...',
            'done' => '¡Listo! Tu navegador se actualizará en 30 segundos.',
        ],
        'failed_messages' => [
            'download' => 'No se pudieron descargar los archivos de actualización.',
            'update_files' => 'No se pudieron actualizar los archivos del sistema',
            'update_database' => 'No se pudieron actualizar las bases de datos',
            'publish_core_assets' => 'No se pudieron publicar los activos principales',
            'publish_packages_assets' => 'No se pudieron publicar los activos de paquetes.',
            'clean_up' => 'No se pudieron limpiar los archivos de actualización del sistema',
        ],
        'success_messages' => [
            'download' => 'Archivos de actualización descargados correctamente.',
            'update_files' => 'Archivos del sistema actualizados correctamente.',
            'update_database' => 'Bases de datos actualizadas correctamente.',
            'publish_core_assets' => 'Activos principales publicados correctamente.',
            'publish_packages_assets' => 'Activos de paquetes publicados correctamente.',
            'clean_up' => 'Archivos de actualización del sistema limpiados correctamente.',
        ],
    ],
];
