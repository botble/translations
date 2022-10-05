<?php

return [
    'store_name' => 'Nome da loja',
    'store_email' => 'Email da loja',
    'store_phone' => 'Telefone da loja',
    'tables' => [
        'earnings' => 'Ganhos',
        'products_count' => 'Contagem de produtos',
    ],
    'theme_options' => [
        'name' => 'Marketplace',
    ],
    'settings' => [
        'name' => 'Definições',
        'title' => 'Definições para o marketplace',
        'hide_store_phone_number' => 'Ocultar telefone da loja?',
        'enable_product_approval' => 'Permitir aprovação do produto',
        'fee_withdrawal' => 'Taxa de saque (Valor fixo)',
        'verify_vendor' => 'Verificação do Vendedor ( Somente poderá publicar seus produtos após aprovação)',
        'fee_per_order' => 'Taxa por pedido (%)',
        'check_valid_signature' => 'Verificar assinatura do válida nos ganhos do vendedor',
    ],
    'name' => 'Marketplace',
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
    ],
    'product_name' => 'Nome do produto',
    'product_url' => 'URL do produto',
    'withdrawal_amount' => 'Sacar montante',
    'current_balance' => 'Saldo atual',
];
