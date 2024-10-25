<?php

return [
    'name' => 'Contatos',
    'contact_form' => 'Formulário de contato',
    'menu' => 'Contato',
    'edit' => 'Ver contato',
    'tables' => [
        'phone' => 'Telefone',
        'email' => 'E-mail',
        'full_name' => 'Nome completo',
        'time' => 'Tempo',
        'address' => 'Endereço',
        'subject' => 'Assunto',
        'content' => 'Contente',
    ],
    'contact_information' => 'Informações de contato',
    'replies' => 'Respostas',
    'email' => [
        'header' => 'E-mail',
        'title' => 'Novo contato do seu site',
    ],
    'form' => [
        'name' => [
            'required' => 'O nome é obrigatório',
        ],
        'email' => [
            'required' => 'O e-mail é obrigatório',
            'email' => 'O endereço de e-mail não é válido',
        ],
        'content' => [
            'required' => 'O conteúdo é obrigatório',
        ],
    ],
    'contact_sent_from' => 'Estas informações de contato enviadas de',
    'sender' => 'Remetente',
    'sender_email' => 'E-mail',
    'sender_address' => 'Endereço',
    'sender_phone' => 'Telefone',
    'message_content' => 'Conteúdo da mensagem',
    'sent_from' => 'E-mail enviado de',
    'form_name' => 'Nome',
    'form_email' => 'E-mail',
    'form_address' => 'Endereço',
    'form_subject' => 'Assunto',
    'form_phone' => 'Telefone',
    'form_message' => 'Mensagem',
    'form_content' => 'Contente',
    'required_field' => 'O campo com (<span style="color: red">*</span>) é obrigatório.',
    'send_btn' => 'Enviar mensagem',
    'new_msg_notice' => 'Você tem <span class="bold">:count</span> novas mensagens',
    'view_all' => 'Ver tudo',
    'statuses' => [
        'read' => 'Ler',
        'unread' => 'Não lido',
    ],
    'phone' => 'Telefone',
    'address' => 'Endereço',
    'message' => 'Mensagem',
    'settings' => [
        'email' => [
            'title' => 'Contato',
            'description' => 'Configuração de e-mail de contato',
            'templates' => [
                'notice_title' => 'Enviar aviso ao administrador',
                'notice_description' => 'Modelo de e-mail para notificar o administrador ao receber um novo envio de contato',
                'subject' => 'Mensagem enviada por meio do formulário de contato em {{ site_title }}',
                'contact_name' => 'Nome do contato',
                'contact_subject' => 'Assunto de contato',
                'contact_email' => 'E-mail de contato',
                'contact_phone' => 'Telefone de contato',
                'contact_address' => 'Endereço de contato',
                'contact_content' => 'Conteúdo de contato',
                'contact_custom_fields' => 'Campos personalizados',
                'sender_confirmation_title' => 'Enviar confirmação ao remetente',
                'sender_confirmation_description' => 'Modelo de e-mail para confirmar ao remetente que a mensagem foi enviada com sucesso',
                'sender_confirmation_subject' => 'Obrigado por entrar em contato conosco!',
            ],
        ],
        'title' => 'Contato',
        'description' => 'Configurações do plugin de contato',
        'blacklist_keywords' => 'Palavras-chave na lista negra',
        'blacklist_keywords_placeholder' => 'palavras-chave...',
        'blacklist_keywords_helper' => 'Adicione solicitações de contato à lista negra se essas palavras-chave forem encontradas no campo de conteúdo (separadas por vírgula).',
        'enable_math_captcha_in_contact_form' => 'Habilite Math CAPTCHA para formulários de contato',
        'receiver_emails' => 'E-mails do destinatário',
        'receiver_emails_placeholder' => 'Você pode inserir mais de um endereço de e-mail (separado por vírgula)',
        'receiver_emails_helper' => 'Os e-mails dos formulários de contato serão enviados para esses endereços. Para enviar e-mails para endereços de e-mail de administradores, deixe este campo em branco.',
    ],
    'no_reply' => 'Nenhuma resposta ainda!',
    'reply' => 'Responder',
    'send' => 'Enviar',
    'shortcode_name' => 'Formulário de contato',
    'shortcode_description' => 'Adicione um formulário de contato',
    'shortcode_content_description' => 'Adicione shortcode [formulário de contato][/formulário de contato] ao editor',
    'message_sent_success' => 'Mensagem enviada com sucesso!',
    'dropdown_show_label' => 'Mostrar contatos',
    'display_fields' => 'Campos de exibição',
    'mandatory_fields' => 'Campos obrigatórios',
    'mandatory_fields_helper_text' => 'Se deixados em branco, estes campos serão validados pela configuração padrão. Nome e Mensagem são sempre obrigatórios.',
    'custom_field' => [
        'name' => 'Campos personalizados',
        'create' => 'Criar campo personalizado',
        'type' => 'Tipo',
        'required' => 'Obrigatório',
        'placeholder' => 'Espaço reservado',
        'order' => 'Ordem',
        'options' => 'Opções',
        'option' => [
            'label' => 'Rótulo',
            'value' => 'Valor',
            'add' => 'Adicionar nova opção',
        ],
        'enums' => [
            'types' => [
                'text' => 'Texto',
                'number' => 'Número',
                'dropdown' => 'Suspenso',
                'checkbox' => 'Caixa de seleção',
                'radio' => 'Rádio',
                'textarea' => 'Área de texto',
                'date' => 'Data',
                'datetime' => 'Data e hora',
                'time' => 'Tempo',
            ],
        ],
    ],
];