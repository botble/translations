<?php

return [
    'name' => 'Propriétés',
    'create' => 'Nouvelle propriété',
    'edit' => 'Modifier la propriété',
    'statuses' => [
        'draft' => 'Brouillon',
        'pending' => 'En attente',
        'selling' => 'En vente',
        'renting' => 'En location',
        'sold' => 'Vendue',
        'rented' => 'Louée',
        'building' => 'En construction',
    ],
    'moderation_statuses' => [
        'pending' => 'En attente',
        'approved' => 'Approuvée',
        'rejected' => 'Rejetée',
    ],
    'expired_at' => 'Expire le',
    'auto_renew' => 'Renouvellement automatique',
    'renew' => 'Renouveler',
    'renew_notice' => 'Cliquez sur "Renouveler" pour prolonger la date d\'expiration de :days jours supplémentaires !',
    'post_pending' => 'Votre publication est en attente d\'approbation de l\'administrateur.',
    'payment_pending' => 'Votre paiement est en attente d\'approbation de l\'administrateur.',
    'approve' => 'Approuver',
    'approve_property_success' => 'Propriété approuvée avec succès !',
    'reject_property_success' => 'Propriété rejetée avec succès !',
    'reject' => 'Rejeter',
    'reject_reason' => 'Raison du rejet',
    'reject_reason_placeholder' => 'Pourquoi rejetez-vous cette propriété ?',
    'email' => [
        'approve_property' => [
            'title' => 'Propriété Approuvée',
            'description' => 'Votre propriété ":property_name" a été approuvée par l\'administrateur.',
        ],
        'reject_property' => [
            'title' => 'Propriété Rejetée',
            'description' => 'Votre propriété ":property_name" a été rejetée par l\'administrateur.',
        ],
    ],
    'form' => [
        'basic_info' => 'Informations de base',
        'location' => 'Emplacement',
        'images' => 'Images',
        'additional_info' => 'Informations supplémentaires',
        'seo' => 'SEO',
    ],
    'view_property' => 'Voir la propriété',
];
