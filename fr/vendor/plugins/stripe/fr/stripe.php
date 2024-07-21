<?php

return [
    'webhook_secret' => 'Secret du webhook',
    'webhook_setup_guide' => [
        'title' => 'Guide de configuration du webhook Stripe',
        'description' => 'Suivez ces étapes pour configurer un webhook Stripe',
        'step_1_label' => 'Connectez-vous au tableau de bord Stripe',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'Sélectionnez un événement et configurez le point de terminaison',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'Ajouter un point de terminaison',
        'step_3_description' => 'Cliquez sur le bouton « Ajouter un point de terminaison » pour enregistrer le webhook.',
        'step_4_label' => 'Copier le secret de signature',
        'step_4_description' => 'Copiez la valeur « Signing Secret » de la section « Détails du Webhook » et collez-la dans le champ « Stripe Webhook Secret » de la section « Stripe » de l\'onglet « Paiement » de la page « Paramètres ».',
    ],
];
