<?php

return [
    'name' => 'Mercado',
    'email' => [
        'withdrawal_approved_title' => 'Saque aprovado',
        'verify_vendor_title' => 'Verificar vendedor',
        'vendor_account_approved_title' => 'Conta do vendedor aprovada',
        'product_approved_title' => 'Produto aprovado',
        'pending_product_approval_title' => 'Aprovação do produto pendente',
        'pending_product_approval_description' => 'Enviar email ao admin quando o vendedor incluir seus produtos',
        'product_approved_description' => 'Enviar email ao vendedor quando seus produtos forem aprovados',
        'store_new_order_description' => 'Enviar email para o dono da loja quando um pedido for realizado',
        'store_new_order_title' => 'Informar sobre novo pedido',
        'vendor_account_approved_description' => 'Enviar email ao vendedor quando sua conta for aprovada',
        'verify_vendor_description' => 'Enviar email ao admin quando um vendedor for registrado',
        'withdrawal_approved_description' => 'Enviar um email ao vendedor quando sua solicitação de saque for aprovada',
        'title' => 'Mercado',
        'description' => 'Configurar modelos de e-mail para o Marketplace',
        'vendor_account_rejected_title' => 'Conta de fornecedor rejeitada',
        'vendor_account_rejected_description' => 'Enviar e-mail ao fornecedor quando sua conta for rejeitada',
        'vendor_account_unblocked_title' => 'Conta de fornecedor desbloqueada',
        'vendor_account_unblocked_description' => 'Enviar e-mail ao fornecedor quando sua conta for desbloqueada',
        'vendor_account_blocked_title' => 'Conta de fornecedor bloqueada',
        'vendor_account_blocked_description' => 'Enviar e-mail ao fornecedor quando sua conta for bloqueada',
        'store_new_order_subject' => 'Novo(s) pedido(s) em {{ site_title }}',
        'verify_vendor_subject' => 'O novo fornecedor em {{ site_title }} precisa ser verificado',
        'vendor_account_approved_subject' => 'Sua conta foi aprovada para venda em {{ site_title }}',
        'vendor_account_rejected_subject' => 'Sua conta foi rejeitada por venda em {{ site_title }}',
        'pending_product_approval_subject' => 'O novo produto precisa ser aprovado para venda em {{ site_title }}',
        'product_approved_subject' => 'Seu produto foi aprovado para venda em {{ site_title }}',
        'withdrawal_approved_subject' => 'Sua solicitação de saque foi aprovada',
        'welcome_vendor_title' => 'Bem-vindo fornecedor',
        'welcome_vendor_description' => 'Enviar e-mail para o fornecedor após cadastrado',
        'welcome_vendor_subject' => 'Bem-vindo ao {{ site_title }}!',
        'contact_store_title' => 'Contate a loja',
        'contact_store_description' => 'Envie um e-mail ao proprietário da loja quando um cliente entrar em contato com a loja',
        'contact_store_subject' => 'Nova mensagem de contato do cliente',
        'vendor_account_blocked_subject' => 'Sua conta de fornecedor em {{ site_title }} foi bloqueada',
        'vendor_account_unblocked_subject' => 'Sua conta de fornecedor em {{ site_title }} foi desbloqueada',
        'store' => 'Loja',
        'order' => 'Ordem',
        'shipment' => 'Informações de envio',
        'address' => 'Endereço para envio',
        'products' => 'Encomendar produtos',
        'customer_message' => 'Mensagem do cliente',
        'customer_name' => 'Nome do cliente',
        'customer_email' => 'E-mail do cliente',
        'block_reason' => 'Motivo do bloqueio',
        'block_date' => 'Data do bloqueio',
        'unblock_date' => 'Data de desbloqueio',
    ],
    'current_balance' => 'Saldo atual',
    'settings' => [
        'name' => 'Definições',
        'title' => 'Definições para o marketplace',
        'hide_store_phone_number' => 'Ocultar telefone da loja?',
        'enable_product_approval' => 'Permitir aprovação do produto',
        'fee_withdrawal' => 'Taxa de saque (Valor fixo)',
        'verify_vendor' => 'Verificação do Vendedor ( Somente poderá publicar seus produtos após aprovação)',
        'fee_per_order' => 'Taxa por pedido (%)',
        'check_valid_signature' => 'Verificar assinatura do válida nos ganhos do vendedor',
        'description' => 'Taxa de comissão de configuração',
        'default_commission_fee' => 'Taxa de comissão padrão (%), sugestão: 2 ou 3',
        'enable_commission_fee_for_each_category' => 'Habilitar taxa de comissão para cada categoria?',
        'categories' => 'Categorias',
        'select_categories' => 'Selecione categorias..',
        'commission_fee' => 'Taxa de comissão (%)',
        'commission_fee_by_category' => 'Taxa de comissão por categoria (%)',
        'verify_vendor_helper' => 'Se ativado, o administrador deverá verificar o fornecedor antes de publicar sua lista de produtos.',
        'requires_vendor_documentations_verification' => 'Requer verificação de documentação do fornecedor',
        'requires_vendor_documentations_verification_helper' => 'Se ativado, os fornecedores deverão fazer upload de seus arquivos de documentação ao se inscreverem para se tornarem fornecedores.',
        'hide_become_vendor_menu_in_customer_dashboard' => 'Ocultar o menu de tornar-se fornecedor no painel do cliente',
        'hide_become_vendor_menu_in_customer_dashboard_description' => 'Se ativado, o menu “Torne-se um fornecedor” ficará oculto no painel do cliente.',
        'enable_product_approval_description' => 'Se ativado, o administrador deverá aprovar o produto antes de ser publicado.',
        'hide_store_email' => 'Ocultar e-mail da loja?',
        'hide_store_address' => 'Ocultar endereço da loja?',
        'hide_store_social_links' => 'Ocultar links sociais da loja?',
        'allow_vendor_manage_shipping' => 'Permitir que o fornecedor gerencie o frete?',
        'allow_vendor_manage_shipping_description' => 'Se estiver habilitado, o fornecedor pode alterar o status de envio do pedido para "entregando", "entregue", ...',
        'commission_fee_each_category_fee_name' => 'Commission fee of commission setting :key',
        'commission_fee_each_category_name' => 'Categories of commission setting :key',
        'add_new' => 'Adicionar novo',
        'payout_methods' => 'Métodos de pagamento',
        'max_upload_filesize' => 'Tamanho máximo do arquivo de upload (MB)',
        'max_upload_filesize_placeholder' => 'Padrão: 10',
        'max_product_images_upload_by_vendor' => 'Número máximo de imagens para cada produto',
        'enable_vendor_registration' => 'Habilitar registro de fornecedor',
        'enable_vendor_registration_helper' => 'Se ativado, os fornecedores podem registrar uma conta no site e publicar seus produtos.',
        'minimum_withdrawal_amount' => 'Valor mínimo de retirada (fixo)',
        'minimum_withdrawal_amount_helper' => 'Especifique o valor mínimo que um fornecedor pode sacar. O padrão é 0.',
        'allow_vendor_delete_their_orders' => 'Permitir que os fornecedores excluam seus pedidos',
        'allow_vendor_delete_their_orders_description' => 'Quando ativado, os fornecedores podem gerenciar sua lista de pedidos removendo entradas indesejadas. Use com cuidado, pois os pedidos excluídos podem afetar os registros de transações.',
        'enable_messaging_system' => 'Habilitar sistema de mensagens',
        'enable_messaging_system_description' => 'Se ativado, fornecedores e clientes poderão se comunicar entre si por meio do sistema de mensagens.',
        'term_and_privacy_policy_url' => 'URL do termo e da política de privacidade',
        'show_vendor_registration_form_at_registration_page' => 'Mostrar formulário de registro de fornecedor na página de registro',
        'show_vendor_registration_form_at_registration_page_description' => 'Se ativado, o formulário de registro do fornecedor será exibido na página de registro.',
        'single_vendor_checkout' => 'Limite a um fornecedor por pedido',
        'single_vendor_checkout_help' => 'Se ativado, os clientes só poderão comprar produtos de um fornecedor por pedido.',
    ],
    'theme_options' => [
        'name' => 'Mercado',
        'description' => 'Opções de tema para Marketplace',
        'logo_vendor_dashboard' => 'Logotipo no painel do fornecedor (o padrão é o logotipo principal)',
    ],
    'store_name' => 'Nome da loja',
    'store_email' => 'Email da loja',
    'store_phone' => 'Telefone da loja',
    'store_address' => 'Endereço da loja',
    'store_url' => 'URL da loja',
    'product_name' => 'Nome do produto',
    'product_url' => 'URL do produto',
    'withdrawal_amount' => 'Sacar montante',
    'helpers' => [
        'store_status' => 'Se você alterar o status diferente de ":status" a conta desta loja também mudará para ":customer"',
    ],
    'tables' => [
        'earnings' => 'Ganhos',
        'products_count' => 'Contagem de produtos',
    ],
    'vendors' => 'Fornecedores',
    'payout_payment_methods' => [
        'bank_transfer' => 'Transferência Bancária',
        'paypal' => 'PayPal',
    ],
    'reports' => [
        'name' => 'Relatórios',
        'total_fee_earnings' => 'Total fee earnings: :value',
        'total_fee' => 'Taxa total',
        'total_amount' => 'Montante total',
        'store_revenues' => 'Receitas da loja',
        'sale_commissions' => 'Comissões de venda',
        'fee' => 'Taxa (:símbolo)',
        'amount' => 'Quantidade (:símbolo)',
    ],
    'vendor' => 'Fornecedor',
    'vendor_name' => 'Nome do fornecedor',
    'contact_store' => [
        'form_name' => 'Formulário de contato da loja',
    ],
    'store_statuses' => [
        'pending' => 'Pendente',
        'published' => 'Aprovado',
        'blocked' => 'Bloqueado',
    ],
];
