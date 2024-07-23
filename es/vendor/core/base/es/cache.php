<?php

return [
    'cache_management' => 'Gestión de caché',
    'cache_management_description' => 'Limpiar la caché para mantener tu sitio actualizado.',
    'cache_commands' => 'Comandos para limpieza de cache',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Borrar cache del sistema',
            'description' => 'Ejecute este comando cuando no vea los cambios después de actualizar los datos.',
            'success_msg' => 'Cache Eliminado!',
        ],
        'refresh_compiled_views' => [
            'title' => 'Actualizar vistas compiladas',
            'description' => 'Limpiar las vistas compiladas para mantener las vistas actualizadas.',
            'success_msg' => 'Las vistas se han eliminado!',
        ],
        'clear_config_cache' => [
            'title' => 'Limpiar cache de configuración',
            'description' => 'Es posible que deba actualizar el almacenamiento en caché cuando cambie algo en la configuración.',
            'success_msg' => 'Se limpió el cache de configuración',
        ],
        'clear_route_cache' => [
            'title' => 'Limpiar enrutamiento',
            'description' => 'Borrar enrutamiento de caché.',
            'success_msg' => 'Enrutamiento de cache',
        ],
        'clear_log' => [
            'title' => 'Borrar registro',
            'description' => 'Limpiar archivos de registro del sistema',
            'success_msg' => 'Log de sistema eliminado!',
        ],
    ],
];
