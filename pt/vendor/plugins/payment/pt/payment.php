<?php

return [
    'payments' => 'Pagamentos',
    'checkout_success' => 'Finalização da compra com sucesso!',
    'view_payment' => 'Ver número de pagamento',
    'charge_id' => 'ID de cobrança',
    'amount' => 'Quantia',
    'currency' => 'Moeda',
    'user' => 'Usuário',
    'stripe' => 'Listra',
    'paypal' => 'PayPal',
    'action' => 'Ação',
    'payment_via_card' => 'Pagamento via cartão',
    'card_number' => 'Número do cartão',
    'full_name' => 'Nome completo',
    'payment_via_paypal' => 'Pagamento online rápido e seguro via PayPal.',
    'mm_yy' => 'MM/AA',
    'cvc' => 'CVC',
    'details' => 'Detalhes',
    'payer_name' => 'Nome do pagador',
    'email' => 'E-mail',
    'phone' => 'Telefone',
    'country' => 'País',
    'shipping_address' => 'Endereço para envio',
    'payment_details' => 'Detalhes de pagamento',
    'card' => 'Cartão',
    'address' => 'Endereço',
    'could_not_get_stripe_token' => 'Não foi possível fazer com que o token Stripe fizesse uma cobrança.',
    'payment_id' => 'ID de pagamento',
    'payment_methods' => 'Métodos de pagamento',
    'transactions' => 'Transações',
    'payment_methods_description' => 'Configurar métodos de pagamento para site',
    'paypal_description' => 'O cliente pode comprar o produto e pagar diretamente via PayPal',
    'use' => 'Usar',
    'stripe_description' => 'O cliente pode comprar o produto e pagar diretamente usando Visa, cartão de crédito via Stripe',
    'edit' => 'Editar',
    'settings' => 'Configurações',
    'activate' => 'Ativar',
    'deactivate' => 'Desativar',
    'update' => 'Atualizar',
    'configuration_instruction' => 'Configuration instruction for :name',
    'configuration_requirement' => 'To use :name, you need',
    'service_registration' => 'Register with :name',
    'after_service_registration_msg' => 'After registration at :name, you will have Client ID, Client Secret',
    'enter_client_id_and_secret' => 'Insira o ID do cliente e o segredo na caixa à direita',
    'method_name' => 'Nome do método',
    'method_logo' => 'Logotipo do método',
    'please_provide_information' => 'Forneça informações',
    'client_id' => 'ID do cliente',
    'client_secret' => 'Segredo do cliente',
    'secret' => 'Segredo',
    'stripe_key' => 'Chave pública de distribuição',
    'stripe_secret' => 'Chave privada de distribuição',
    'stripe_after_service_registration_msg' => 'After registration at :name, you will have Public, Secret keys',
    'stripe_enter_client_id_and_secret' => 'Insira as chaves públicas e secretas na caixa à direita',
    'pay_online_via' => 'Pay online via :name',
    'sandbox_mode' => 'Modo sandbox',
    'live_mode' => 'Modo ao vivo',
    'deactivate_payment_method' => 'Desativar forma de pagamento',
    'deactivate_payment_method_description' => 'Você realmente deseja desativar este método de pagamento?',
    'agree' => 'Concordar',
    'name' => 'Pagamentos',
    'create' => 'Novo pagamento',
    'go_back' => 'Volte',
    'information' => 'Informação',
    'methods' => [
        'paypal' => 'PayPal',
        'cod' => 'Pagamento na entrega (COD)',
        'bank_transfer' => 'Transferência bancária',
    ],
    'statuses' => [
        'pending' => 'Pendente',
        'completed' => 'Concluído',
        'refunding' => 'Reembolso',
        'refunded' => 'Reembolsado',
        'fraud' => 'Fraude',
        'failed' => 'Fracassado',
    ],
    'payment_methods_instruction' => 'Oriente os clientes a pagar diretamente. Você pode optar por pagar por entrega ou transferência bancária',
    'payment_method_description' => 'Guia de pagamento - (Exibido no aviso de compra bem-sucedida e na página de pagamento)',
    'payment_via_cod' => 'Pagamento na entrega (COD)',
    'payment_via_bank_transfer' => 'Transferência bancária',
    'payment_pending' => 'Finalização da compra com sucesso. Seu pagamento está pendente e será verificado por nossa equipe.',
    'created_at' => 'Criado em',
    'payment_channel' => 'Canal de pagamento',
    'total' => 'Total',
    'status' => 'Status',
    'default_payment_method' => 'Método de pagamento padrão',
    'available_countries' => 'Países disponíveis',
    'available_countries_help' => 'Escolha os países onde este método de pagamento está disponível.',
    'all_countries_checkbox' => 'Todos',
    'turn_off_success' => 'Desative a forma de pagamento com sucesso!',
    'saved_payment_settings_success' => 'Configurações de pagamento salvas com sucesso!',
    'payment_name' => 'Nome',
    'payment_not_found' => 'Pagamento não encontrado!',
    'refunds' => [
        'title' => 'Reembolsos',
        'id' => 'EU IA',
        'breakdowns' => 'Avarias',
        'gross_amount' => 'Montante bruto',
        'paypal_fee' => 'Taxa do PayPal',
        'net_amount' => 'Valor líquido',
        'total_refunded_amount' => 'Valor total reembolsado',
        'create_time' => 'Criar horário',
        'update_time' => 'Hora de atualização',
        'status' => 'Status',
        'description' => 'Descrição',
        'refunded_at' => 'Reembolsado em',
        'error_message' => 'Mensagem de erro',
    ],
    'view_response_source' => 'Ver fonte de resposta',
    'status_is_not_completed' => 'O status não é CONCLUÍDO',
    'cannot_found_capture_id' => 'Não foi possível encontrar o ID de captura com os detalhes do pagamento',
    'amount_refunded' => 'Valor reembolsado',
    'amount_remaining' => 'Valor restante',
    'paid_at' => 'Pago em',
    'invalid_settings' => 'Settings for :name are invalid!',
    'view_transaction' => 'Transação ":charge_id"',
    'payment_description' => 'Pay for your order #:order_id at :site_url',
    'payment_log' => [
        'name' => 'Registros de pagamento',
        'view' => 'Ver registro de pagamento #:id',
        'ip_address' => 'Endereço IP',
        'type' => 'Tipo',
        'request' => 'Solicitar',
        'response' => 'Resposta',
    ],
];