<?php

return [
    'name' => 'navio',
    'description' => 'Todas as operadoras e lojas que você precisa',
    'note_0' => 'Antes de ativar, leia as instruções abaixo',
    'note_1' => 'É necessário usar cidades, estados e países em Admin -> Locais, <a href=":link" target="_blank" rel="noopener noreferrer">:link</a>',
    'note_2' => 'Habilitado "Carregar países, estados, cidades da localização do plugin?" e "Ativar CEP?" para Shippo funcionar corretamente',
    'note_3' => 'Atualize cidade, estado e país com os dados do plugin de localização, insira e verifique o endereço e CEP em "<a href=":link" target="_blank">Informações básicas</a>"',
    'note_4' => 'O fornecedor precisa atualizar a empresa e o CEP. Atualizar cidade, estado e país com dados do plugin de localização',
    'note_5' => 'Shippo só permite criar transações com remessa/taxa dentro de 24 horas, se for mais de 24 horas, atualize a taxa novamente',
    'note_6' => 'Método de pagamento COD, consulte <a href=":link" target="_blank" rel="noopener noreferrer">aqui</a>',
    'configuration_instruction' => 'Configuration instruction for :name',
    'configuration_requirement' => 'To use :name, you need',
    'service_registration' => 'Register with :name',
    'after_service_registration_msg' => 'After registration at :name, you will have API Key',
    'enter_api_key' => 'Insira a chave da API na caixa à direita',
    'please_provide_information' => 'Forneça informações',
    'sandbox_mode' => 'Modo de teste',
    'activate' => 'Ativar',
    'disabled_in_demo_mode' => 'Você não pode atualizar as configurações do Shippo no modo de demonstração!',
    'parcel' => 'Parcela',
    'estimated_days' => 'Estimated delivery in :day day(s)',
    'from_address' => 'Do endereço',
    'to_address' => 'Para abordar',
    'check_validate_token' => 'Verifique o token de validação?',
    'saved_shipping_settings_success' => 'Configurações salvas com sucesso!',
    'token_name_is_required' => ':name is required for the integration to work',
    'token_name_is_invalid' => ':name is invalid',
    'live_api_token' => 'Token de API ativo',
    'test_api_token' => 'Token de API de teste',
    'print_label' => 'Imprimir etiqueta',
    'transaction' => [
        'created' => 'Transação criada #:tracking',
        'view_and_create' => 'Visualizar e criar transação',
        'create' => 'Criar transação',
        'created_success' => 'Transação criada com sucesso!',
        'updated' => 'Transação atualizada #:rastreamento',
    ],
    'tracking' => [
        'updated' => 'Acompanhamento atualizado #:tracking',
        'statuses' => [
            'pre_transit' => 'A etiqueta é criada, mas antes que o pacote seja entregue ou retirado pela transportadora.',
            'transit' => 'O pacote foi digitalizado pela transportadora e está em trânsito.',
            'delivered' => 'O pacote foi entregue com sucesso.',
            'returned' => 'O pacote está a caminho para ser devolvido ao remetente ou foi devolvido com sucesso.',
            'failure' => 'A transportadora indicou que houve um problema com a entrega. Isso pode acontecer por vários motivos e depende da operadora. Este status não indica um problema técnico, mas sim de entrega.',
            'unknown' => 'O pacote não foi encontrado através do sistema de rastreamento da transportadora.',
        ],
    ],
    'view_other_exchange_rates' => 'View :count other exchange rates',
    'carrier_could_not_be_found' => 'A transportadora para a qual o pedido foi selecionado não foi encontrada',
    'update_rate' => 'Taxa de atualização',
    'updated_rate_success' => 'Taxa criada com sucesso!',
    'recheck_rate' => 'Verifique novamente a taxa',
    'shipment_object_id_not_found' => 'Nenhum número de envio correspondente: informações de ID encontradas',
    'order_amount' => 'Valor do pedido',
    'logging' => 'Registrando?',
    'webhooks' => 'Webhooks?',
    'cache_response' => 'Resposta do cache?',
    'not_available_in_cod_payment_method' => 'As opções do Shippo não serão mostradas se o método de pagamento selecionado for COD!',
];
