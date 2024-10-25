<?php

return [
    'name' => 'Boletins informativos',
    'newsletter_form' => 'Formulário de boletins informativos',
    'description' => 'Visualizar e excluir assinantes do boletim informativo',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Boletim informativo',
                'description' => 'Configurar modelos de e-mail de boletim informativo',
                'to_admin' => [
                    'title' => 'E-mail enviado para administrador',
                    'description' => 'Modelo para enviar e-mail ao administrador',
                    'subject' => 'Novo usuário assinou seu boletim informativo',
                    'newsletter_email' => 'E-mail do usuário que assina a newsletter',
                ],
                'to_user' => [
                    'title' => 'E-mail enviado ao usuário',
                    'description' => 'Modelo para enviar e-mail ao assinante',
                    'subject' => '{{ site_title }}: Assinatura confirmada!',
                    'newsletter_name' => 'Nome completo do usuário que assina a newsletter',
                    'newsletter_email' => 'E-mail do usuário que assina a newsletter',
                    'newsletter_unsubscribe_link' => 'Link para cancelamento de assinatura do boletim informativo',
                    'newsletter_unsubscribe_url' => 'URL para cancelamento de assinatura do boletim informativo',
                ],
            ],
        ],
        'title' => 'Boletim informativo',
        'panel_description' => 'Visualizar e atualizar as configurações do boletim informativo',
        'description' => 'Configurações para newsletter (envio automático de e-mail de newsletter para SendGrid, Mailchimp... quando alguém registra newsletter no site).',
        'mailchimp_api_key' => 'Chave de API do Mailchimp',
        'mailchimp_list_id' => 'ID da lista Mailchimp',
        'mailchimp_list' => 'Lista Mailchimp',
        'sendgrid_api_key' => 'Chave API Sendgrid',
        'sendgrid_list_id' => 'ID da lista Sendgrid',
        'sendgrid_list' => 'Lista Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Ativar API da lista de contatos do boletim informativo?',
    ],
    'statuses' => [
        'subscribed' => 'Inscrito',
        'unsubscribed' => 'Inscrição cancelada',
    ],
];
