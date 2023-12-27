<?php

return [

    /**
     *
     * Traducciones compartidas.
     *
     */
    'title' => 'Instalación',
    'next' => 'Siguiente Paso',
    'back' => 'Anterior',
    'finish' => 'Instalar',
    'installation' => 'Instalación',
    'forms' => [
        'errorTitle' => 'Se produjeron los siguientes errores:',
    ],

    /**
     *
     * Traducciones de la página de inicio.
     *
     */
    'welcome' => [
        'pageTitle' => 'Instalación - Paso 1: Bienvenido',
        'title' => 'Bienvenido',
        'message' => 'Antes de comenzar, necesitamos información sobre la base de datos. Deberá conocer los siguientes elementos antes de continuar.',
        'language' => 'Idioma',
        'next' => 'Vamos',
    ],

    /**
     *
     * Traducciones de la página de requisitos.
     *
     */
    'requirements' => [
        'pageTitle' => 'Instalación - Paso 2: Requisitos del servidor',
        'title' => 'Requisitos del servidor',
        'next' => 'Verificar Permisos',
    ],

    /**
     *
     * Traducciones de la página de permisos.
     *
     */
    'permissions' => [
        'next' => 'Configurar Entorno',
    ],

    /**
     *
     * Traducciones de la página de entorno.
     *
     */
    'environment' => [
        'wizard' => [
            'pageTitle' => 'Instalación - Paso 3: Configuración del Entorno',
            'title' => 'Configuración del Entorno',
            'form' => [
                'name_required' => 'Se requiere un nombre de entorno.',
                'app_name_label' => 'Título del sitio',
                'app_name_placeholder' => 'Título del sitio',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Conexión a la base de datos',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Host de la base de datos',
                'db_host_placeholder' => 'Host de la base de datos',
                'db_port_label' => 'Puerto de la base de datos',
                'db_port_placeholder' => 'Puerto de la base de datos',
                'db_name_label' => 'Nombre de la base de datos',
                'db_name_placeholder' => 'Nombre de la base de datos',
                'db_username_label' => 'Nombre de usuario de la base de datos',
                'db_username_placeholder' => 'Nombre de usuario de la base de datos',
                'db_password_label' => 'Contraseña de la base de datos',
                'db_password_placeholder' => 'Contraseña de la base de datos',
                'buttons' => [
                    'install' => 'Instalar',
                ],
                'db_host_helper' => 'Si usa Laravel Sail, simplemente cambie DB_HOST a DB_HOST=mysql. En algunos alojamientos, DB_HOST puede ser localhost en lugar de 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'La configuración de su archivo .env se ha guardado.',
        'errors' => 'No se pudo guardar el archivo .env. Por favor, créelo manualmente.',
    ],

    /**
     * Página de creación de cuenta.
     */
    'createAccount' => [
        'pageTitle' => 'Instalación - Paso 4: Crear cuenta',
        'title' => 'Crear cuenta',
        'form' => [
            'first_name' => 'Nombre',
            'last_name' => 'Apellido',
            'username' => 'Nombre de usuario',
            'email' => 'Correo electrónico',
            'password' => 'Contraseña',
            'password_confirmation' => 'Confirmación de contraseña',
            'create' => 'Crear',
        ],
    ],

    /**
     * Página de licencia.
     */

    'license' => [
        'pageTitle' => 'Instalación - Paso 5: Activar licencia',
        'title' => 'Activar licencia',
        'skip' => 'Saltar por ahora',
    ],

    'install' => 'Instalar',

    'final' => [
        'pageTitle' => 'Instalación finalizada',
        'title' => 'Hecho',
        'message' => 'La aplicación se ha instalado correctamente.',
        'exit' => 'Ir al panel de administración',
    ],

    'install_success' => '¡Instalado con éxito!',
];
