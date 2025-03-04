<?php

return [
    'webhook_secret' => 'Webhook Secret',
    'webhook_setup_guide' => [
        'title' => 'Stripe Webhook Setup Guide',
        'description' => 'Befolgen Sie diese Schritte, um einen Streifen -Webhook einzurichten',
        'step_1_label' => 'Melden Sie sich am Streifen -Dashboard an',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'Wählen Sie Ereignis und konfigurieren Sie den Endpunkt',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'Endpunkt hinzufügen',
        'step_3_description' => 'Klicken Sie auf die Schaltfläche "Endpunkt hinzufügen", um das Webhook zu speichern.',
        'step_4_label' => 'Kopieren Sie das Geheimnis der Unterzeichnung',
        'step_4_description' => 'Kopieren Sie den Wert "Secret" im Abschnitt "Webhook Details" und fügen Sie ihn in das Feld "Stripe Webhook Secret" im Abschnitt "Streifen" der Registerkarte "Zahlung" auf der Seite "Einstellungen" ein.',
    ],
];
