<?php

return [

    /**
     *
     * Traductions partagées.
     *
     */
    'title' => 'Installation',
    'next' => 'Étape suivante',
    'back' => 'Précédent',
    'finish' => 'Installer',
    'installation' => 'Installation',
    'forms' => [
        'errorTitle' => 'Les erreurs suivantes se sont produites :',
    ],

    /**
     *
     * Traductions de la page d'accueil.
     *
     */
    'welcome' => [
        'pageTitle' => 'Installation - Étape 1 : Bienvenue',
        'title' => 'Bienvenue',
        'message' => 'Avant de commencer, nous avons besoin de certaines informations sur la base de données. Vous devrez connaître les éléments suivants avant de continuer.',
        'language' => 'Langue',
        'next' => 'Allons-y',
    ],

    /**
     *
     * Traductions de la page des prérequis.
     *
     */
    'requirements' => [
        'pageTitle' => 'Installation - Étape 2 : Exigences du serveur',
        'title' => 'Exigences du serveur',
        'next' => 'Vérifier les autorisations',
    ],

    /**
     *
     * Traductions de la page des autorisations.
     *
     */
    'permissions' => [
        'next' => 'Configurer l\'environnement',
    ],

    /**
     *
     * Traductions de la page de l'environnement.
     *
     */
    'environment' => [
        'wizard' => [
            'pageTitle' => 'Installation - Étape 3 : Paramètres de l\'environnement',
            'title' => 'Paramètres de l\'environnement',
            'form' => [
                'name_required' => 'Un nom d\'environnement est requis.',
                'app_name_label' => 'Titre du site',
                'app_name_placeholder' => 'Titre du site',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Connexion à la base de données',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Hôte de la base de données',
                'db_host_placeholder' => 'Hôte de la base de données',
                'db_port_label' => 'Port de la base de données',
                'db_port_placeholder' => 'Port de la base de données',
                'db_name_label' => 'Nom de la base de données',
                'db_name_placeholder' => 'Nom de la base de données',
                'db_username_label' => 'Nom d\'utilisateur de la base de données',
                'db_username_placeholder' => 'Nom d\'utilisateur de la base de données',
                'db_password_label' => 'Mot de passe de la base de données',
                'db_password_placeholder' => 'Mot de passe de la base de données',
                'buttons' => [
                    'install' => 'Installer',
                ],
                'db_host_helper' => 'Si vous utilisez Laravel Sail, changez simplement DB_HOST en DB_HOST=mysql. Sur certains hébergements, DB_HOST peut être localhost au lieu de 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Les paramètres de votre fichier .env ont été enregistrés.',
        'errors' => 'Impossible d\'enregistrer le fichier .env. Veuillez le créer manuellement.',
    ],

    /**
     * Page de création de compte.
     */
    'createAccount' => [
        'pageTitle' => 'Installation - Étape 4 : Créer un compte',
        'title' => 'Créer un compte',
        'form' => [
            'first_name' => 'Prénom',
            'last_name' => 'Nom de famille',
            'username' => 'Nom d\'utilisateur',
            'email' => 'E-mail',
            'password' => 'Mot de passe',
            'password_confirmation' => 'Confirmation du mot de passe',
            'create' => 'Créer',
        ],
    ],

    /**
     * Page de licence.
     */

    'license' => [
        'pageTitle' => 'Installation - Étape 5 : Activer la licence',
        'title' => 'Activer la licence',
        'skip' => 'Passer pour le moment',
    ],

    'install' => 'Installer',

    'final' => [
        'pageTitle' => 'Installation terminée',
        'title' => 'Terminé',
        'message' => 'L\'application a été installée avec succès.',
        'exit' => 'Aller au tableau de bord d\'administration',
    ],

    'install_success' => 'Installé avec succès!',
];
