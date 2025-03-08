<?php

return [
    'login' => [
        'username' => 'E -Mail/Benutzername',
        'email' => 'E-Mail',
        'password' => 'Passwort',
        'title' => 'Benutzeranmeldung',
        'remember' => 'Erinnere dich an mich?',
        'login' => 'anmelden',
        'placeholder' => [
            'username' => 'Please enter your username',
            'email' => 'Please enter your email',
            'password' => 'Geben Sie Ihr Passwort ein',
        ],
        'success' => 'Anmelden erfolgreich!',
        'fail' => 'Falscher Benutzername oder Passwort.',
        'not_active' => 'Ihr Konto wurde noch nicht aktiviert!',
        'banned' => 'Dieses Konto ist verboten.',
        'logout_success' => 'Erfolgreich abmelden!',
        'dont_have_account' => 'Sie haben kein Konto auf diesem System. Wenden Sie sich bitte an Administrator, um weitere Informationen zu erhalten!',
    ],
    'forgot_password' => [
        'title' => 'Passwort vergessen',
        'message' => '<p> Haben Sie Ihr Passwort vergessen? </p> <p> Bitte geben Sie Ihr E -Mail -Konto ein. System sendet eine E -Mail mit einem aktiven Link, um Ihr Passwort zurückzusetzen. </P>',
        'submit' => 'Einreichen',
    ],
    'reset' => [
        'new_password' => 'Neues Passwort',
        'password_confirmation' => 'Bestätigen Sie das neue Passwort',
        'email' => 'E-Mail',
        'title' => 'Setzen Sie Ihr Passwort zurück',
        'update' => 'Aktualisieren',
        'wrong_token' => 'Dieser Link ist ungültig oder abgelaufen. Bitte versuchen Sie erneut das Reset -Formular.',
        'user_not_found' => 'Dieser Benutzername existiert nicht.',
        'success' => 'Das Passwort erfolgreich zurücksetzen!',
        'fail' => 'Token ist ungültig, der Link zum Zurücksetzen Passwort ist abgelaufen!',
        'reset' => [
            'title' => 'E -Mail -Zurücksetzen Passwort',
        ],
        'send' => [
            'success' => 'Eine E -Mail wurde an Ihr E -Mail -Konto gesendet. Bitte überprüfen Sie diese Aktion und führen Sie diese Aktion aus.',
            'fail' => 'Kann in dieser Zeit keine E -Mail senden. Bitte versuchen Sie es später erneut.',
        ],
        'new-password' => 'Neues Passwort',
        'placeholder' => [
            'new_password' => 'Geben Sie Ihr neues Passwort ein',
            'new_password_confirmation' => 'Bestätigen Sie Ihr neues Passwort',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E -Mail -Zurücksetzen Passwort',
        ],
    ],
    'password_confirmation' => 'Passwort bestätigen',
    'failed' => 'Fehlgeschlagen',
    'throttle' => 'Gaspedal',
    'not_member' => 'Noch kein Mitglied?',
    'register_now' => 'Registrieren Sie sich jetzt',
    'lost_your_password' => 'Ihr Passwort verloren?',
    'login_title' => 'Administrator',
    'login_via_social' => 'Melden Sie sich mit sozialen Netzwerken an',
    'back_to_login' => 'Zurück zur Anmeldeseite',
    'sign_in_below' => 'Melden Sie sich unten an',
    'languages' => 'Sprachen',
    'reset_password' => 'Passwort zurücksetzen',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'ACL -E -Mail -Konfiguration',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Passwort zurücksetzen',
                    'description' => 'Senden Sie E -Mail an den Benutzer, wenn Sie das Zurücksetzen des Zurücksetzens anfordern',
                    'subject' => 'Passwort zurücksetzen',
                    'reset_link' => 'Kennwortverbindung zurücksetzen',
                ],
            ],
        ],
    ],
];
