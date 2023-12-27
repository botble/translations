<?php

return [

    /**
     *
     * Gemeinsame Übersetzungen.
     *
     */
    'title' => 'Installation',
    'next' => 'Nächster Schritt',
    'back' => 'Zurück',
    'finish' => 'Installieren',
    'installation' => 'Installation',
    'forms' => [
        'errorTitle' => 'Folgende Fehler sind aufgetreten:',
    ],

    /**
     *
     * Übersetzungen für die Startseite.
     *
     */
    'welcome' => [
        'pageTitle' => 'Installation - Schritt 1: Willkommen',
        'title' => 'Willkommen',
        'message' => 'Bevor Sie beginnen, benötigen wir einige Informationen zur Datenbank. Sie müssen die folgenden Punkte kennen, bevor Sie fortfahren.',
        'language' => 'Sprache',
        'next' => 'Los geht\'s',
    ],

    /**
     *
     * Übersetzungen für die Anforderungsseite.
     *
     */
    'requirements' => [
        'pageTitle' => 'Installation - Schritt 2: Serveranforderungen',
        'title' => 'Serveranforderungen',
        'next' => 'Berechtigungen überprüfen',
    ],

    /**
     *
     * Übersetzungen für die Berechtigungsseite.
     *
     */
    'permissions' => [
        'next' => 'Umgebung konfigurieren',
    ],

    /**
     *
     * Übersetzungen für die Umgebungsseite.
     *
     */
    'environment' => [
        'wizard' => [
            'pageTitle' => 'Installation - Schritt 3: Umgebungseinstellungen',
            'title' => 'Umgebungseinstellungen',
            'form' => [
                'name_required' => 'Ein Umgebungsname ist erforderlich.',
                'app_name_label' => 'Seitentitel',
                'app_name_placeholder' => 'Seitentitel',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Datenbankverbindung',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Datenbankhost',
                'db_host_placeholder' => 'Datenbankhost',
                'db_port_label' => 'Datenbankport',
                'db_port_placeholder' => 'Datenbankport',
                'db_name_label' => 'Datenbankname',
                'db_name_placeholder' => 'Datenbankname',
                'db_username_label' => 'Datenbankbenutzername',
                'db_username_placeholder' => 'Datenbankbenutzername',
                'db_password_label' => 'Datenbankpasswort',
                'db_password_placeholder' => 'Datenbankpasswort',
                'buttons' => [
                    'install' => 'Installieren',
                ],
                'db_host_helper' => 'Wenn Sie Laravel Sail verwenden, ändern Sie einfach DB_HOST zu DB_HOST=mysql. Bei einigen Hosting-Diensten kann DB_HOST auch localhost anstelle von 127.0.0.1 sein.',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'Ihre .env-Dateieinstellungen wurden gespeichert.',
        'errors' => 'Die .env-Datei konnte nicht gespeichert werden. Bitte erstellen Sie sie manuell.',
    ],

    /**
     * Seite zum Erstellen eines Kontos.
     */
    'createAccount' => [
        'pageTitle' => 'Installation - Schritt 4: Konto erstellen',
        'title' => 'Konto erstellen',
        'form' => [
            'first_name' => 'Vorname',
            'last_name' => 'Nachname',
            'username' => 'Benutzername',
            'email' => 'E-Mail',
            'password' => 'Passwort',
            'password_confirmation' => 'Passwort bestätigen',
            'create' => 'Erstellen',
        ],
    ],

    /**
     * Lizenzseite.
     */

    'license' => [
        'pageTitle' => 'Installation - Schritt 5: Lizenz aktivieren',
        'title' => 'Lizenz aktivieren',
        'skip' => 'Jetzt überspringen',
    ],

    'install' => 'Installieren',

    'final' => [
        'pageTitle' => 'Installation abgeschlossen',
        'title' => 'Fertig',
        'message' => 'Die Anwendung wurde erfolgreich installiert.',
        'exit' => 'Zum Administrations-Dashboard gehen',
    ],

    'install_success' => 'Erfolgreich installiert!',
];
