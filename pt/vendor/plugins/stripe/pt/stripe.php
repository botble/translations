<?php

return [
    'webhook_secret' => 'Segredo do webhook',
    'webhook_setup_guide' => [
        'title' => 'Guia de configuração do Stripe Webhook',
        'description' => 'Siga estas etapas para configurar um webhook Stripe',
        'step_1_label' => 'Faça login no painel Stripe',
        'step_1_description' => 'Access the :link and click on the "Add Endpoint" button in the "Webhooks" section of the "Developers" tab.',
        'step_2_label' => 'Selecione Evento e Configure Endpoint',
        'step_2_description' => 'Select the "payment_intent.succeeded" event and enter the following URL in the "Endpoint URL" field: :url',
        'step_3_label' => 'Adicionar ponto final',
        'step_3_description' => 'Clique no botão "Adicionar endpoint" para salvar o webhook.',
        'step_4_label' => 'Copiar segredo de assinatura',
        'step_4_description' => 'Copie o valor "Signing Secret" da seção "Detalhes do Webhook" e cole-o no campo "Stripe Webhook Secret" na seção "Stripe" da guia "Pagamento" na página "Configurações".',
    ],
];
