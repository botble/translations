<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'Installation',
    'next' => 'Next Step',
    'back' => 'Previous',
    'finish' => 'Install',
    'installation' => 'Installation',
    'forms' => [
        'errorTitle' => 'The following errors occurred:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'title' => 'Welcome',
        'message' => 'Before getting started, we need some information on the database. You will need to know the following items before proceeding.',
        'language' => 'Language',
        'next' => 'Let\'s go',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'title' => 'Server Requirements',
        'next' => 'Check Permissions',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'next' => 'Configure Environment',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'wizard' => [
            'title' => 'Environment Settings',
            'form' => [
                'name_required' => 'An environment name is required.',
                'app_name_label' => 'Site title',
                'app_name_placeholder' => 'Site title',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Database Connection',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Database host',
                'db_host_placeholder' => 'Database host',
                'db_port_label' => 'Database port',
                'db_port_placeholder' => 'Database port',
                'db_name_label' => 'Database name',
                'db_name_placeholder' => 'Database name',
                'db_username_label' => 'Database username',
                'db_username_placeholder' => 'Database username',
                'db_password_label' => 'Database password',
                'db_password_placeholder' => 'Database password',
                'buttons' => [
                    'install' => 'Install',
                ],
                'db_host_helper' => 'If you use Laravel Sail, just change DB_HOST to DB_HOST=mysql. On some hosting DB_HOST can be localhost instead of 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Your .env file settings have been saved.',
        'errors' => 'Unable to save the .env file, Please create it manually.',
    ],

    'theme' => [
        'title' => 'Choose theme',
        'message' => 'Choose a theme to personalize the appearance of your website. This selection will also import sample data tailored to the chosen theme.',
    ],

    /**
     * Create account page.
     */
    'createAccount' => [
        'title' => 'Create account',
        'form' => [
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'password_confirmation' => 'Password confirmation',
            'create' => 'Create',
        ],
    ],

    /**
     * License page.
     */

    'license' => [
        'title' => 'Activate License',
        'skip' => 'Skip for now',
    ],

    'install' => 'Install',

    'final' => [
        'pageTitle' => 'Installation Finished',
        'title' => 'Done',
        'message' => 'Application has been successfully installed.',
        'exit' => 'Go to admin dashboard',
    ],

    'install_success' => 'Installed successfully!',

    'install_step_title' => 'Installation - Step :step: :title',
];
