<?php

return [
    'statuses' => [
        'canceled' => 'Cancelar',
        'completed' => 'Finalizado',
        'processing' => 'Processando',
        'pending' => 'Pendente',
        'partial_returned' => 'Parcial devolvido',
        'returned' => 'Devolvido',
    ],
    'return_statuses' => [
        'pending' => 'Pendente',
        'processing' => 'Processamento',
        'completed' => 'Concluído',
        'canceled' => 'Cancelado',
    ],
    'menu' => 'Pedido',
    'create' => 'Criar um pedido',
    'cancel_error' => 'Este pedido esta sendo entregue ou foi finalizado',
    'cancel_success' => 'Pedido cancelado com sucesso',
    'return_error' => 'O pedido está sendo entregue ou não foi concluído',
    'return_success' => 'Produto(s) solicitado(s) devolvido(s) com sucesso!',
    'incomplete_order' => 'Pedidos incompletos',
    'order_id' => 'Pedido ID',
    'product_id' => 'Produto ID',
    'customer_label' => 'Cliente',
    'tax_amount' => 'Valor da taxa',
    'shipping_amount' => 'Valor do frete',
    'payment_method' => 'Método de pagamento',
    'payment_status_label' => 'Status de pagamento',
    'manage_orders' => 'Gerenciar pedidos',
    'order_intro_description' => 'Assim que sua loja tiver pedidos, é aqui que você processará e rastreará esses pedidos.',
    'create_new_order' => 'Criar um novo pedido',
    'manage_incomplete_orders' => 'Gerenciar pedidos incompletos',
    'incomplete_orders_intro_description' => 'Pedidos incompletos são pedidos quando o cliente seleciona o produto, informa todas informações sobre a compra pagamento, porém não completa o pagamento',
    'invoice_for_order' => 'Fatura do pedido',
    'created' => 'Criado',
    'invoice' => 'Fatura',
    'return' => 'Retornar',
    'restock_products' => 'Restock :count product(s)?',
    'is_return' => 'Caixa de seleção de retorno',
    'total_refund_amount' => 'Valor total de reembolso',
    'total_amount_can_be_refunded' => 'Total do valor que pode ser reembolsado',
    'refund_reason' => 'Razões para reembolso (opcional)',
    'products' => 'produto(s)',
    'default' => 'Padrão',
    'system' => 'Sistema',
    'new_order_from' => 'Novo pedido :order_id pelo :customer',
    'confirmation_email_was_sent_to_customer' => 'Email de confirmação foi enviado ao cliente',
    'create_order_from_payment_page' => 'O pedido foi criado na página de checkout',
    'create_order_from_admin_page' => 'O pedido foi criado na página de administração',
    'order_was_verified_by' => 'Pedido foi verificado por %user_name%',
    'new_order' => 'Novo pedido :order_id',
    'payment_was_confirmed_by' => 'Pagamento foi confirmado (valor :money) por %user_name%',
    'edit_order' => 'Editar pedido :code',
    'confirm_order_success' => 'Pedido confirmado com sucesso!',
    'error_when_sending_email' => 'Erro ao enviar email',
    'sent_confirmation_email_success' => 'Email de confirmação enviado com sucesso!',
    'order_was_sent_to_shipping_team' => 'Pedido foi encaminhado para o time de entrega',
    'by_username' => 'por %nome_do_usuário%',
    'shipping_was_created_from' => 'Entrega criada para o pedido %order_id%',
    'shipping_was_canceled_success' => 'Entrega cancelada com sucesso!',
    'shipping_was_canceled_by' => 'Entrega foi cancelada pelo %user_name%',
    'update_shipping_address_success' => 'Endereço de entrega atualizado com sucesso!',
    'order_was_canceled_by' => 'Pedido foi cancelado por %user_name%',
    'order_was_returned_by' => 'O pedido foi devolvido por %user_name%',
    'confirm_payment_success' => 'Pagamento confirmado com sucesso!',
    'refund_amount_invalid' => 'Valor do reembolso precisa ser menor ou igual :price',
    'number_of_products_invalid' => 'O reembolso do número de produtos não é válido!',
    'cannot_found_payment_for_this_order' => 'Não foi possível encontrar o pagamento deste pedido!',
    'refund_success_with_price' => 'Reembolso efetuado :price',
    'refund_success' => 'Reembolso feito com sucesso!',
    'order_is_not_existed' => 'Pedido não existe!',
    'reorder' => 'Pedir Novamente',
    'sent_email_incomplete_order_success' => 'Email lembrando pedido incompleto enviado com sucesso!',
    'applied_coupon_success' => 'Cupom ":code" aplicado com sucesso!',
    'new_order_notice' => 'Voçê tem <span class="bold">:count</span> Novo(s) pedido(s)',
    'view_all' => 'Mostrar todos',
    'cancel_order' => 'Cancelar pedido',
    'order_canceled' => 'Pedidos cancelados',
    'order_was_canceled_at' => 'Pedido foi cancelado em',
    'return_order' => 'Pedido de devolução',
    'order_returned' => 'Pedido devolvido',
    'order_was_returned_at' => 'O pedido foi devolvido às',
    'completed' => 'Finalizado',
    'uncompleted' => 'Incompleto',
    'sku' => 'SKU',
    'warehouse' => 'Armazém',
    'sub_amount' => 'Sub Total',
    'coupon_code' => 'Código do cupom: ":code"',
    'shipping_fee' => 'Taxa de frete',
    'tax' => 'Taxa',
    'refunded_amount' => 'Valor do reembolso',
    'amount_received' => 'Valor recebido',
    'download_invoice' => 'Baixar fatura',
    'payment_proof' => 'Comprovante de pagamento',
    'print_invoice' => 'Imprimir fatura',
    'add_note' => 'Adicionar informação',
    'order_was_confirmed' => 'Pedido foi confirmado',
    'confirm_order' => 'Confirmar pedido',
    'confirm' => 'Confirmar',
    'order_was_canceled' => 'Pedido foi cancelado',
    'pending_payment' => 'Pagamento pendente',
    'payment_was_accepted' => 'Pagamento :money foi aceito',
    'payment_was_refunded' => 'Pagamento foi reembolsado',
    'confirm_payment' => 'Confirmar pagamento',
    'refund' => 'Reembolso',
    'all_products_are_not_delivered' => 'Todos os produtos não enviados',
    'delivery' => 'Entrega',
    'history' => 'histórico',
    'order_number' => 'Número do pedido',
    'from' => 'de',
    'status' => 'Status',
    'successfully' => 'Com sucesso',
    'transaction_type' => 'Tipo de transação',
    'staff' => 'Funcionários',
    'refund_date' => 'Data de reembolso',
    'n_a' => 'N / D',
    'payment_date' => 'Data de pagamento',
    'payment_gateway' => 'Gateway de pagamento',
    'transaction_amount' => 'Valor da transação',
    'resend' => 'Reenviar',
    'default_store' => 'Loja padrão',
    'update_address' => 'Endereço atualizado',
    'have_an_account_already' => 'Já tem uma conta',
    'dont_have_an_account_yet' => 'Ainda não tem uma conta',
    'mark_payment_as_confirmed' => 'Marcar <span>:method</span> como confirmado',
    'resend_order_confirmation' => 'Reenviar confirmação do pedido',
    'resend_order_confirmation_description' => 'Confirmação de email enviado para <strong>:email</strong>?',
    'send' => 'Enviar',
    'update' => 'Atualizar',
    'cancel_shipping_confirmation' => 'Cancelar confirmação de entrega?',
    'cancel_shipping_confirmation_description' => 'Cancelar confirmação de entrega?',
    'cancel_order_confirmation' => 'Cancelar confirmação de pedido?',
    'cancel_order_confirmation_description' => 'Deseja cancelar este pedido? Esta ação não pode ser revertida',
    'return_order_confirmation' => 'Confirmação do pedido de devolução?',
    'return_order_confirmation_description' => 'Tem certeza de que deseja devolver este pedido? Esta ação não pode ser revertida',
    'confirm_payment_confirmation_description' => 'Processado por <strong>:método</strong>. Você recebeu pagamento fora do sistema? Este pagamento não será salvo no sistema e não poderá ser reembolsado',
    'save_note' => 'Salvar nota',
    'order_note' => 'Nota de pedido',
    'order_note_placeholder' => 'Nota sobre o pedido, ex: horário ou instruções de envio.',
    'order_amount' => 'Quantidade de pedidos',
    'additional_information' => 'Informação adicional',
    'notice_about_incomplete_order' => 'Informar sobre pedido incompleto',
    'notice_about_incomplete_order_description' => 'Lembrar que o e-mail sobre pedido incompleto será enviado para <strong>:email</strong>?',
    'incomplete_order_description_1' => 'Um pedido incompleto ocorre quando um cliente potencial coloca itens em seu carrinho de compras e vai até a página de pagamento, mas não conclui a transação.',
    'incomplete_order_description_2' => 'Se você entrou em contato com clientes e eles desejam continuar comprando, você pode ajudá-los a concluir o pedido seguindo o link:',
    'send_an_email_to_recover_this_order' => 'Envie um e-mail ao cliente para recuperar este pedido',
    'see_maps' => 'Olhar mapa',
    'one_or_more_products_dont_have_enough_quantity' => 'Um ou mais produtos não tem o suficiente em estoque',
    'cannot_send_order_recover_to_mail' => 'O e-mail não foi encontrado, por isso não é possível enviar um e-mail de recuperação ao cliente.',
    'payment_info' => 'Informação sobre pagamento',
    'payment_method_refund_automatic' => 'Your customer will be refunded using :method automatically.',
    'order' => 'Pedido',
    'order_information' => 'Informações do pedido',
    'create_a_new_product' => 'Criar um novo produto',
    'out_of_stock' => 'Sem estoque',
    'products_available' => 'produto(s) disponiveis',
    'no_products_found' => 'Produto não encontrado!',
    'note' => 'Observação',
    'note_for_order' => 'Nota para pedido...',
    'amount' => 'Valor',
    'add_discount' => 'Adicionar desconto',
    'discount' => 'Desconto',
    'add_shipping_fee' => 'Adicionar frete',
    'shipping' => 'Frete',
    'total_amount' => 'Valor total',
    'confirm_payment_and_create_order' => 'Confirmar pagamento e criar pedido',
    'paid' => 'Pagar',
    'pay_later' => 'Pagar depois',
    'customer_information' => 'Informação do cliente',
    'create_new_customer' => 'Criar um novo cliente',
    'no_customer_found' => 'Cliente não encontrado!',
    'customer' => 'Cliente',
    'orders' => 'pedido(s)',
    'shipping_address' => 'Endereço de Entrega',
    'shipping_info' => 'Informações de envio',
    'billing_address' => 'Endereço de Cobrança',
    'see_on_maps' => 'Olhar no mapa',
    'name' => 'Nome',
    'price' => 'Preço',
    'product_name' => 'Nome do produto',
    'total' => 'Total',
    'action' => 'Ação',
    'add_product' => 'Adicionar produto',
    'enter_free_text' => 'Insira texto livre',
    'promotion_discount_amount' => 'Valor da promoção',
    'add' => 'Adicionar',
    'store' => 'Loja',
    'please_choose_product_option' => 'Por favor escolha a opção do produto',
    'sku_optional' => 'SKU (opcional)',
    'with_storehouse_management' => 'Com gerenciamento de armazém?',
    'quantity' => 'Quantidade',
    'allow_customer_checkout_when_this_product_out_of_stock' => 'Permitir a finalização da compra do cliente quando este produto estiver fora de estoque?',
    'address' => 'Endereço',
    'phone' => 'Telefone',
    'country' => 'País',
    'state' => 'Estado',
    'city' => 'Cidade',
    'zip_code' => 'Cep',
    'discount_based_on' => 'Desconto baseado em',
    'or_coupon_code' => 'Ou código de cupom',
    'description' => 'Descrição',
    'how_to_select_configured_shipping' => 'Como selecionar configuração de frete?',
    'please_add_customer_information_with_the_complete_shipping_address_to_see_the_configured_shipping_rates' => 'Adicione informações do cliente com o endereço de entrega completo para ver as taxas de envio configuradas',
    'please_products_and_customer_address_to_see_the_shipping_rates' => 'Adicione produtos e informações do cliente com o endereço de entrega completo para ver as taxas de envio configuradas',
    'shipping_method_not_found' => 'Método de envio não encontrado',
    'free_shipping' => 'Frete grátis',
    'custom' => 'Personalizar',
    'email' => 'E-mail',
    'create_order' => 'Criar pedido',
    'close' => 'Fechar',
    'confirm_payment_title' => 'Confirm payment is :status for this order',
    'confirm_payment_description' => 'Payment status of the order is :status. Once the order has been created, you cannot change the payment method or status',
    'select_payment_method' => 'Selecionar método de pagamento',
    'cash_on_delivery_cod' => 'Pagamento na entrega',
    'bank_transfer' => 'Transferência bancária',
    'paid_amount' => 'Valor pago',
    'update_email' => 'Email atualizado',
    'save' => 'Salvar',
    'cancel' => 'Cancelar',
    'create_a_new_order' => 'Criar um novo pedido',
    'search_or_create_new_product' => 'Procurar ou criar novo produto',
    'search_or_create_new_customer' => 'Procurar ou criar novo cliente',
    'discount_description' => 'Descrição do desconto',
    'cant_select_out_of_stock_product' => 'Não é possivel selecionar produto sem estoque!',
    'referral' => 'Referência',
    'return_order_unique' => 'Same :attribute already exists in a previous return request.',
    'total_return_amount' => 'Valor total de devolução',
    'change_return_order_status' => 'Alterar o status do pedido de devolução',
    'return_order_approve' => 'Aprovar',
    'return_order_reject' => 'Rejeitar',
    'return_reason' => 'Motivo da devolução',
    'order_return_moderation' => [
        'approve_button' => 'Aprovar',
        'reject_button' => 'Rejeitar',
        'approve_confirmation_title' => 'Aprovar pedido de devolução',
        'approve_confirmation_description' => 'Depois de aprovar este pedido de devolução, o status será alterado para processamento e o cliente será notificado. Tem certeza de que deseja aprovar este pedido de devolução?',
        'reject_confirmation_title' => 'Rejeitar pedido de devolução',
        'reject_confirmation_description' => 'Depois de rejeitar este pedido de devolução, o status será alterado para cancelado e o cliente será notificado. Tem certeza de que deseja rejeitar este pedido de devolução?',
        'mark_as_completed_button' => 'Marcar como concluído',
        'mark_as_completed_confirmation_title' => 'Marcar pedido de devolução como concluído',
        'mark_as_completed_confirmation_description' => 'Depois de marcar este pedido de devolução como concluído, o status será alterado para concluído e o cliente será notificado. Tem certeza de que deseja marcar este pedido de devolução como concluído?',
    ],
    'order_return_action' => [
        'created' => 'Criado',
        'approved' => 'Aprovado',
        'rejected' => 'Rejeitado',
        'mark_as_completed' => 'Marcar como concluído',
    ],
    'referral_data' => [
        'ip' => 'PI',
        'landing_domain' => 'Domínio de destino',
        'landing_page' => 'Página de destino',
        'landing_params' => 'Parâmetros de destino',
        'gclid' => 'Gclid',
        'fclid' => 'Fclid',
        'utm_source' => 'Fonte UTM',
        'utm_campaign' => 'Campanha UTM',
        'utm_medium' => 'Meio UTM',
        'utm_term' => 'Termo UTM',
        'utm_content' => 'Conteúdo UTM',
        'referral' => 'Referência',
        'referrer_url' => 'URL de referência',
        'referrer_domain' => 'Domínio de referência',
    ],
    'order_address_types' => [
        'shipping_address' => 'Endereço para envio',
        'billing_address' => 'Endereço de Cobrança',
    ],
    'order_return_reasons' => [
        'damaged' => 'Produto danificado',
        'defective' => 'Defeituoso',
        'incorrect_item' => 'Item incorreto',
        'arrived_late' => 'Chegou tarde',
        'not_as_described' => 'Não como descrito',
        'no_longer_want' => 'Não quero mais',
        'other' => 'Outro',
    ],
    'order_return_reason' => 'Motivo da devolução',
    'notices' => [
        'update_return_order_status_error' => 'Não é possível atualizar o status do pedido de devolução! Talvez o status do pedido de devolução não seja válido.',
        'update_return_order_status_success' => 'Atualize o status do pedido de devolução com sucesso!',
    ],
    'order_return' => 'Devoluções de pedidos',
    'edit_order_return' => 'Edit order return :code',
    'order_return_items_count' => 'Itens do produto',
    'new_order_notifications' => [
        'new_order' => 'Novo pedido',
        'view' => 'Visualizar',
        'description' => ':customer ordered :quantity :product',
    ],
    'confirm_payment_notifications' => [
        'confirm_payment' => 'Confirmar pagamento',
        'description' => 'Order :order Payment was confirmed (amount :amount) by :by',
    ],
    'update_shipping_status_notifications' => [
        'update_shipping_status' => 'Atualizar status de envio',
        'description' => 'Order :order had changed shipping status :description',
    ],
    'cancel_order_notifications' => [
        'cancel_order' => 'Cancelar pedido',
        'description' => 'Order :order was cancelled by custom :customer',
    ],
    'return_order_notifications' => [
        'return_order' => 'Pedido de devolução',
        'description' => ':customer has requested return product(s)',
    ],
    'order_completed_notifications' => [
        'order_completed' => 'Pedido concluído',
        'description' => 'Order :order has been completed',
    ],
    'tax_info' => [
        'name' => 'Informações fiscais',
        'update' => 'Atualizar informações fiscais',
        'update_success' => 'Atualize as informações fiscais com sucesso!',
        'company_name' => 'Nome da empresa',
        'company_address' => 'Endereço da empresa',
        'company_tax_code' => 'Código tributário da empresa',
        'company_email' => 'E-mail da empresa',
    ],
    'mark_as_completed' => [
        'name' => 'Marcar como concluído',
        'modal_title' => 'Marcar pedido como concluído',
        'modal_description' => 'Tem certeza de que deseja marcar este pedido como concluído? Isso alterará o status do pedido para concluído e não poderá ser desfeito.',
        'success' => 'Marque o pedido como concluído com sucesso!',
        'history' => 'Order is marked as completed by :admin at :time',
    ],
    'generate_invoice' => 'Gerar fatura',
    'generated_invoice_successfully' => 'Fatura gerada com sucesso!',
    'order_cannot_be_canceled' => 'O pedido está sendo processado ou concluído, não pode ser cancelado!',
    'cancellation_reason' => 'Reason: :reason',
    'order_cancellation_reason' => 'Motivo do cancelamento do pedido',
    'cancellation_reasons' => [
        'change-mind' => 'Mudou de ideia ou não precisava mais do produto',
        'found-better-price' => 'Encontrei um preço melhor em outro lugar',
        'out-of-stock' => 'Produto fora de estoque',
        'shipping-delays' => 'Atrasos no envio',
        'incorrect-address' => 'Endereço de entrega incorreto ou incompleto',
        'customer-requested' => 'Cliente solicitou cancelamento',
        'not-as-described' => 'Produto não conforme descrito',
        'payment-issues' => 'Problemas de pagamento ou transação recusada',
        'unforeseen-circumstances' => 'Circunstâncias imprevistas ou emergências',
        'technical-issues' => 'Problemas técnicos durante o processo de checkout',
        'other' => 'Outro',
    ],
    'requires_products_to_create_order' => 'Selecione pelo menos um produto para criar o pedido',
    'transaction_id' => 'ID da transação',
    'incomplete_order_transaction_id_placeholder' => 'Você pode deixar este campo vazio se a forma de pagamento for COD ou transferência bancária',
    'digital_product_downloads' => [
        'title' => 'Downloads de produtos digitais',
        'download_count' => ':count download(s)',
        'first_download' => 'First download at :time',
        'not_downloaded_yet' => 'Ainda não baixado',
    ],
    'select_one' => 'Selecione um',
    'confirm_delivery_error' => 'Você não pode confirmar a entrega deste pedido',
    'confirm_delivery_success' => 'Pedido foi entregue confirmado com sucesso!',
    'export' => [
        'total_orders' => 'Total de pedidos',
    ],
    'edit_email' => 'Editar e-mail',
    'address_address_required' => 'O campo endereço é obrigatório.',
    'address_city_required' => 'O campo cidade é obrigatório.',
    'address_country_required' => 'O campo país é obrigatório.',
    'address_email_required' => 'O campo email é obrigatório.',
    'address_name_required' => 'O campo nome é obrigatório.',
    'address_phone_required' => 'O campo telefone é obrigatório.',
    'address_state_required' => 'O campo estado é obrigatório.',
    'address_email_unique' => 'Um cliente já possui este email, por favor faça login ou entre com outro email.',
    'pending_amount' => 'Quantidade pendente',
    'confirm_payment_is_paid_for_this_order' => 'Confirmar pagamento para o pedido',
    'confirm_that_payment_for_this_order_will_be_paid_later' => 'Confimar que o pagamento deste pedido será efetuado depois',
];
