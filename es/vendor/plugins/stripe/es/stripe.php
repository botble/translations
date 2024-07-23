<?php

return [
    'webhook_secret' => 'Secreto del webhook',
    'webhook_setup_guide' => [
        'title' => 'Guía de configuración del webhook de Stripe',
        'description' => 'Siga estos pasos para configurar un webhook de Stripe',
        'step_1_label' => 'Inicie sesión en el panel de Stripe',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'Seleccionar evento y configurar punto final',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'Agregar punto final',
        'step_3_description' => 'Haga clic en el botón "Agregar punto final" para guardar el webhook.',
        'step_4_label' => 'Copiar el secreto de firma',
        'step_4_description' => 'Copie el valor "Secreto de firma" de la sección "Detalles del Webhook" y péguelo en el campo "Secreto del Webhook Stripe" en la sección "Stripe" de la pestaña "Pago" en la página "Configuración".',
    ],
];
