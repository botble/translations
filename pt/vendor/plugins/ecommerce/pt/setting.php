<?php

return [
    'save_settings' => 'Salvar configuração',
    'general' => [
        'name' => 'Em geral',
        'description' => 'Visualize e atualize suas configurações gerais',
    ],
    'currency' => [
        'name' => 'Moedas',
        'description' => 'Visualizar e atualizar configurações de moeda',
        'currency_setting_description' => 'Visualize e atualize moedas usando o site',
        'form' => [
            'enable_auto_detect_visitor_currency' => 'Ativar a detecção automática da moeda do visitante',
            'add_space_between_price_and_currency' => 'Adicione um espaço entre preço e moeda',
            'thousands_separator' => 'Separador de milhares',
            'decimal_separator' => 'Separador decimal',
            'separator_period' => 'Período (.)',
            'separator_comma' => 'Vírgula (,)',
            'separator_space' => 'Espaço ( )',
            'api_key' => 'Chave de taxas de câmbio da API',
            'api_key_helper' => 'Get exchange rate API key on :link',
            'update_currency_rates' => 'Atualizar taxas de câmbio',
            'use_exchange_rate_from_api' => 'Use a taxa de câmbio da API',
            'clear_cache_rates' => 'Limpar taxas de cache',
            'auto_detect_visitor_currency_description' => 'Ele detecta a moeda do visitante com base no idioma do navegador. Isso substituirá a seleção de moeda padrão.',
            'exchange_rate' => [
                'api_provider' => 'Provedor de API',
                'select' => '-- Selecione --',
                'none' => 'Nenhum',
                'provider' => [
                    'api_layer' => 'Camada API',
                    'open_exchange_rate' => 'Taxas de câmbio abertas',
                ],
                'open_exchange_app_id' => 'Abra o ID do aplicativo de taxas de câmbio',
            ],
            'default_currency_warning' => 'Para a moeda padrão, a taxa de câmbio deve ser 1.',
        ],
    ],
    'product' => [
        'name' => 'Produtos',
        'description' => 'Visualize e atualize as configurações dos seus produtos',
        'product_settings' => 'Configurações do produto',
        'product_settings_description' => 'Configurar regras para o produto',
        'form' => [
            'show_number_of_products' => 'Mostrar número de produtos no produto único',
            'show_out_of_stock_products' => 'Mostrar produtos fora de estoque',
            'how_to_display_product_variation_images' => 'Como exibir imagens de variações de produtos',
            'only_variation_images' => 'Apenas imagens de variação',
            'variation_images_and_main_product_images' => 'Imagens de variação e imagens principais do produto',
            'enable_product_options' => 'Habilitar opções de produto',
            'is_enabled_cross_sale_products' => 'Habilitar produtos de venda cruzada',
            'is_enabled_related_products' => 'Habilitar produtos relacionados',
            'auto_generate_product_sku' => 'Gerar SKU automaticamente ao criar o produto',
            'product_sku_format' => 'Formato SKU',
            'product_sku_format_helper' => 'Você pode usar %s (1 caractere de string) ou %d (1 dígito) no formato para gerar uma string aleatória. Ex: SKU-%s%s%s-HN-%d%d%d',
            'enable_product_specification' => 'Habilitar especificação do produto',
            'enable_product_specification_help' => 'Se ativado, a tabela de especificações do produto será exibida na página de detalhes do produto.',
            'make_product_barcode_required' => 'Tornar o código de barras do produto obrigatório',
            'make_product_barcode_required_helper' => 'Se ativado, o código de barras do produto será necessário ao criar um produto.',
        ],
    ],
    'product_search' => [
        'name' => 'Pesquisa de produtos',
        'description' => 'Visualizar e atualizar as configurações de pesquisa de produtos',
        'product_search_settings' => 'Pesquisa de produto',
        'product_search_settings_description' => 'Configurar regras para pesquisa de produtos',
        'form' => [
            'search_for_an_exact_phrase' => 'Procure uma frase exata',
            'search_products_by' => 'Pesquise produtos por:',
            'enable_filter_products_by_brands' => 'Habilite filtrar produtos por marcas',
            'enable_filter_products_by_tags' => 'Ativar filtrar produtos por tags',
            'enable_filter_products_by_attributes' => 'Habilite filtrar produtos por atributos',
        ],
    ],
    'digital_product' => [
        'name' => 'Produtos Digitais',
        'description' => 'Visualizar e atualizar configurações de produtos digitais',
        'digital_products_settings' => 'Produtos digitais',
        'digital_products_settings_description' => 'Configurar regras para produtos digitais',
        'form' => [
            'enable_support_digital_product' => 'Está habilitado para oferecer suporte a produtos digitais',
            'allow_guest_checkout_for_digital_products' => 'Permitir check-out de convidado para produtos digitais',
            'disable_physical_product' => 'Desativar produto físico',
        ],
    ],
    'product_review' => [
        'name' => 'Avaliações de produtos',
        'description' => 'Visualize e atualize suas configurações de avaliações de produtos',
        'form' => [
            'enable_review' => 'Ativar revisão',
            'review' => [
                'max_file_size' => 'Revise o tamanho máximo do arquivo (MB)',
                'max_file_number' => 'Revise o número máximo de arquivos',
            ],
            'only_allow_customers_purchased_to_review' => 'Somente clientes que compraram o produto podem avaliar o produto',
            'review_need_to_be_approved' => 'A revisão precisa ser aprovada antes de ser exibida na página do produto',
            'show_customer_full_name' => 'Mostrar nome completo do cliente',
            'show_customer_full_name_help' => 'Se estiver desmarcado, o nome do cliente avaliador será ocultado e substituído por asteriscos (***)',
        ],
    ],
    'shopping' => [
        'name' => 'Compras',
        'description' => 'Visualize e atualize suas configurações de compras',
        'general_setting' => 'Configurações gerais',
        'return_settings' => 'Configurações de retorno',
        'return_settings_description' => 'Configurar regras para configurações de devolução',
        'form' => [
            'enable_cart' => 'Ativar carrinho de compras',
            'enable_wishlist' => 'Ativar lista de desejos',
            'enable_wishlist_sharing' => 'Ativar compartilhamento de lista de desejos',
            'shared_wishlist_lifetime' => 'Duração da lista de desejos compartilhada (dias)',
            'shared_wishlist_lifetime_helper' => 'O tempo de vida da lista de desejos compartilhada em dias. Após esse período, a lista de desejos compartilhada será excluída.',
            'enable_compare' => 'Ativar comparação',
            'enable_order_tracking' => 'Ativar rastreamento de pedidos',
            'enable_quick_buy_button' => 'Ativar botão de compra rápida',
            'enable_order_auto_confirmed' => 'Confirmar pedido automaticamente',
            'quick_buy_target' => 'Página de destino de compra rápida',
            'checkout_page' => 'Página de check-out',
            'cart_page' => 'Página do carrinho',
            'cart_destroy_on_logout' => 'Destruir carrinho ao sair',
        ],
    ],
    'checkout' => [
        'name' => 'Confira',
        'panel_description' => 'Visualizar e atualizar configurações de checkout',
        'description' => 'Configurar regras para configurações de checkout',
        'form' => [
            'display_bank_info_at_the_checkout_success_page' => 'Exibir informações bancárias na página de sucesso da finalização da compra',
            'mandatory_form_fields_at_checkout' => 'Campos obrigatórios na página de checkout:',
            'hide_form_fields_at_checkout' => 'Ocultar campos do cliente na página de checkout:',
            'load_countries_states_cities_from_location_plugin' => 'Carregar países, estados e cidades a partir da localização do plugin',
            'load_countries_states_cities_from_location_plugin_placeholder' => 'Após alterar esta opção, você precisa atualizar todos os endereços novamente. Você deve configurá-lo uma vez.',
            'load_countries_states_cities_from_location_plugin_placeholder_2' => 'Então você precisa ir em Ferramentas -> Importar/Exportar Dados para importar dados de localização.',
            'minimum_order_amount' => 'Valor mínimo do pedido para fazer um pedido (:moeda).',
            'zip_code_enabled' => 'Ativar CEP',
            'billing_address_enabled' => 'Ativar endereço de cobrança',
            'display_tax_fields_at_checkout_page' => 'Exibir campos de informações fiscais na página de checkout',
            'use_city_field_as_field_text' => 'Use o campo cidade como um campo de texto livre',
            'available_countries' => 'Países disponíveis',
            'all' => 'Todos',
            'all_helper_text' => 'Se você desmarcar todos os países, isso será aplicado a todos os países.',
            'enable_guest_checkout' => 'Ativar check-out de convidado',
            'recently_viewed' => [
                'enable' => 'Habilitar produtos visualizados recentemente pelo cliente',
                'max' => 'Número máximo de produtos visualizados recentemente pelo cliente',
                'max_helper' => 'Se você definir 0, todos os produtos serão salvos.',
            ],
            'minimum_order_quantity' => 'Quantidade mínima do pedido',
            'minimum_order_quantity_helper' => 'Quantidade mínima para fazer um pedido. Deixe que seja 0 se você não quiser defini-lo.',
            'maximum_order_quantity' => 'Quantidade máxima do pedido',
            'maximum_order_quantity_helper' => 'Quantidade máxima para fazer um pedido. Deixe que seja 0 se você não quiser defini-lo.',
            'default_country_at_checkout_page' => 'País padrão na página de checkout',
            'default_country_at_checkout_page_placeholder' => 'Selecione um país',
            'default_country_at_checkout_page_help' => 'Se você selecionar um país, o país será selecionado por padrão na página de finalização da compra.',
            'checkout_product_quantity_editable' => 'Permitir que os clientes alterem a quantidade do produto na página de finalização da compra',
        ],
    ],
    'return' => [
        'name' => 'Retornar',
        'description' => 'Configurar regras para configurações de devolução',
        'panel_description' => 'Visualizar e atualizar configurações de devolução',
        'form' => [
            'is_enabled_order_return' => 'Está habilitado retorno de pedido',
            'allow_partial_return' => 'Permitir retorno parcial',
            'allow_partial_return_description' => 'O cliente pode devolver alguns produtos, não precisa devolver todos os produtos de um pedido.',
            'returnable_days' => 'Dias retornáveis',
            'return_settings_helper' => 'Número de dias que um cliente pode solicitar uma devolução após a conclusão do pedido.',
        ],
    ],
    'invoice' => [
        'name' => 'Faturas',
        'description' => 'Visualize e atualize suas configurações de faturas',
        'company_settings' => 'Configurações da empresa',
        'company_settings_description' => 'Configurações Informações da empresa para faturamento',
        'form' => [
            'company_name' => 'Nome da empresa',
            'company_address' => 'Endereço da empresa',
            'company_zipcode' => 'CEP da empresa',
            'company_email' => 'E-mail da empresa',
            'company_phone' => 'Telefone da empresa',
            'company_logo' => 'Logotipo da empresa',
            'company_tax_id' => 'ID fiscal da empresa',
            'invoice_code_prefix' => 'Prefixo do código da fatura',
            'using_custom_font_for_invoice' => 'Usando fonte personalizada para fatura',
            'invoice_font_family' => 'Família de fontes da fatura (funciona apenas para o idioma latino)',
            'enable_invoice_stamp' => 'Ativar carimbo de fatura',
            'add_language_support' => 'Adicionar suporte a idiomas',
            'only_latin_languages' => 'Apenas línguas latinas',
            'disable_order_invoice_until_order_confirmed' => 'Desativar fatura do pedido até que o pedido seja confirmado',
            'date_format' => 'Formato de data',
        ],
    ],
    'tax' => [
        'name' => 'Impostos',
        'description' => 'Visualize e atualize suas configurações de impostos',
        'tax_setting' => 'Configurações fiscais',
        'tax_setting_description' => 'Definir configurações fiscais',
        'tax_management' => 'Gestão tributária',
        'tax_management_description' => 'Visualize e gerencie seus impostos',
        'form' => [
            'enable_tax' => 'Ativar imposto',
            'display_company_invoice_information_fields_at_checkout_page' => 'Exibir campos de informações da fatura da empresa na página de checkout',
            'display_company_invoice_information_fields_at_checkout_page_helper' => 'Se estiver habilitado, os campos de informações da fatura da empresa serão exibidos na página de checkout. É necessário preencher os campos de informações da fatura da empresa.',
            'default_tax_rate' => 'Taxa de imposto padrão',
            'default_tax_rate_description' => 'Importante: será aplicado caso não seja selecionado nenhum imposto no produto.',
            'select_tax' => '-- Selecione --',
            'display_product_price_including_taxes' => 'Exibir o preço do produto, incluindo impostos',
        ],
    ],
    'customer' => [
        'name' => 'Clientes',
        'description' => 'Visualize e atualize as configurações dos seus clientes',
        'customer_setting' => 'Configurações do cliente',
        'customer_setting_description' => 'Definir configurações do cliente',
        'form' => [
            'verify_customer_email' => 'Verifique o e-mail do cliente',
            'verify_customer_email_helper' => 'Quando ativado, um link de verificação será enviado para o e-mail do cliente. Os clientes precisam clicar nesse link para verificar seu e-mail antes de poder fazer login.',
            'login_using_phone' => 'Faça login com número de telefone em vez de e-mail',
            'login_option' => 'Opção de login',
            'login_with_email' => 'Entrar com e-mail',
            'login_with_phone' => 'Entrar com telefone',
            'login_with_email_or_phone' => 'Faça login com e-mail ou telefone',
            'enabled_customer_account_deletion' => 'Habilitar exclusão de conta de cliente',
            'enabled_customer_account_deletion_helper' => 'Quando ativado, os clientes podem excluir suas contas no painel do cliente → Configurações da conta.',
            'enabled_customer_dob_field' => 'Habilitar campo de data de nascimento do cliente',
            'enabled_customer_dob_field_helper' => 'Quando ativado, os clientes podem inserir sua data de nascimento no painel do cliente → Configurações da conta.',
            'make_customer_phone_number_required' => 'Tornar obrigatório o número de telefone do cliente',
            'make_customer_phone_number_required_helper' => 'Quando ativado, os clientes devem inserir seu número de telefone durante o registro. É sempre necessário que os clientes façam login com um número de telefone.',
        ],
    ],
    'shipping' => [
        'name' => 'Envio',
        'description' => 'Visualizar e atualizar configurações de envio',
        'shipping_rule' => 'Regras de envio',
        'shipping_rule_description' => 'Configure regras para calcular a taxa de envio',
        'shipping_setting' => 'Configurações de envio',
        'shipping_setting_description' => 'Definir configurações de envio',
        'form' => [
            'hide_other_shipping_options_if_it_has_free_shipping' => 'Ocultar outras opções de frete se tiver frete grátis na lista',
            'disable_shipping_options' => 'Desativar opções de envio',
            'disable_shipping_options_helper' => 'As opções de envio serão removidas na página de finalização da compra, o cliente não poderá selecionar as opções de envio.',
        ],
    ],
    'webhook' => [
        'name' => 'Webhook',
        'description' => 'Definir configurações de webhook',
        'webhook_setting' => 'Webhook',
        'webhook_setting_description' => 'Enviar webhook quando o pedido for feito',
        'form' => [
            'order_placed_webhook_url' => 'URL do webhook do pedido feito (método: POST)',
            'order_placed_webhook_url_placeholder' => 'https://...',
            'order_placed_webhook_url_helper' => 'Para receber notificações quando um pedido for feito, você pode configurar um URL de webhook externo. Se você tiver um URL de webhook externo, poderá inseri-lo ou simplesmente deixá-lo vazio.',
        ],
    ],
    'store_locator' => [
        'name' => 'Localizadores de lojas',
        'description' => 'Visualize e atualize as listas de suas redes',
        'store_locator_description' => 'Todas as listas de suas redes, principais lojas, filiais, etc. As localizações podem ser utilizadas para acompanhar as vendas e nos ajudar a configurar as taxas de impostos a serem cobradas na venda de produtos.',
        'form' => [
            'change_primary_store' => 'alterar localizador de loja padrão',
            'add_location' => 'Adicionar local',
            'edit_location' => 'Editar local',
            'delete_location' => 'Excluir local',
            'delete_location_confirmation' => 'Tem certeza de que deseja excluir este local? Esta ação não pode ser desfeita.',
            'change_primary_location' => 'Alterar local principal',
            'save_location' => 'Salvar localização',
            'add_new' => 'Adicionar novo',
        ],
    ],
    'tracking' => [
        'name' => 'Monitorando',
        'description' => 'Visualizar e atualizar configurações de rastreamento',
        'manage_tracking' => 'Gerenciar rastreamento',
        'manage_tracking_description' => 'Gerenciar rastreamento: UTM, Facebook, Google Tag Manager...',
        'form' => [
            'enable_facebook_pixel' => 'Habilitar Pixel do Facebook (Meta Pixel)',
            'facebook_pixel_helper' => 'Acesse https://developers.facebook.com/docs/meta-pixel para criar o Facebook Pixel.',
            'facebook_pixel_id' => 'ID do pixel do Facebook',
            'enable_google_tag_manager_tracking_events' => 'Ativar eventos de rastreamento do Gerenciador de tags do Google',
            'google_tag_manager_tracking_info' => 'You need to add Google Tag Manager to tracking your website, please go to Admin → Settings → :website_tracking.',
        ],
    ],
    'marketplace' => [
        'name' => 'Mercado',
        'description' => 'Visualize e atualize as configurações do marketplace',
    ],
    'standard_and_format' => [
        'name' => 'Padrão e formato',
        'panel_description' => 'Visualize e atualize configurações padrão e de formato',
        'description' => 'Padrões e formatos são usados ​​para calcular coisas como preços de produtos, pesos de envio e prazos de pedidos.',
        'form' => [
            'change_order_format' => 'Editar formato do código do pedido (opcional)',
            'change_order_format_description' => 'O código de pedido padrão começa em: número. Você pode alterar a string inicial ou final para criar o código de pedido desejado, por exemplo "DH-:número" ou ":número-A"',
            'start_with' => 'Comece com',
            'end_with' => 'Terminar com',
            'order_will_be_shown' => 'Seu código de pedido será mostrado',
            'weight_unit' => 'Unidade de peso',
            'height_unit' => 'Comprimento/altura da unidade',
            'weight_unit_gram' => 'Grama (g)',
            'weight_unit_kilogram' => 'Quilograma (kg)',
            'weight_unit_lb' => 'Libra (lb)',
            'weight_unit_oz' => 'Onça (oz)',
            'height_unit_cm' => 'Centímetro (cm)',
            'height_unit_m' => 'Metro (m)',
            'height_unit_inch' => 'Polegada',
        ],
    ],
    'sale_popup' => [
        'name' => 'Pop-up de venda',
        'description' => 'Personalize suas configurações de pop-up de venda com facilidade',
    ],
    'flash_sale' => [
        'name' => 'Venda relâmpago',
        'description' => 'Visualizar e atualizar configurações de venda relâmpago',
        'enable' => 'Ativar venda relâmpago',
        'show_sale_count_left' => 'Mostrar contagem de vendas restante',
        'show_sale_count_left_description' => 'Esta opção mostrará a quantidade de produtos restantes na venda relâmpago.',
    ],
    'payment_method_cod_minimum_amount' => 'Minimum order amount - :currency (Optional)',
    'payment_method_minimum_amount' => 'Minimum order amount - :currency (Optional)',
    'display_bank_info_at_the_checkout_success_page' => 'Exibir informações bancárias na página de sucesso do checkout?',
    'invoice_templates' => 'Modelos de fatura',
];
