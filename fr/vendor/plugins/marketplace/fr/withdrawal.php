<?php

return [
    'name' => 'Retraits',
    'edit' => 'Editer le retrait',
    'statuses' => [
        'pending' => 'En attente',
        'processing' => 'Traitement',
        'completed' => 'Complété',
        'canceled' => 'Annulé',
        'refused' => 'Refusé',
    ],
    'amount' => 'Montant',
    'customer' => 'Client',
    'vendor' => 'Vendeur',
    'currency' => 'Monnaie',
    'forms' => [
        'amount' => 'Montant',
        'amount_placeholder' => 'Montant que vous souhaitez retirer',
        'fee' => 'Frais',
        'fee_helper' => 'Vous devez payer des frais lors d\'un retrait : :frais',
        'pending_status_helper' => 'Pour terminer le retrait, veuillez mettre à jour le statut en indiquant que le traitement est terminé.',
        'payment_channel' => 'Canal de paiement',
        'payment_channel_placeholder' => 'Canal de paiement',
        'transaction_id' => 'Transaction ID',
        'transaction_id_placeholder' => 'Transaction ID',
        'amount_with_balance' => 'Montant (solde : :balance)',
    ],
];
