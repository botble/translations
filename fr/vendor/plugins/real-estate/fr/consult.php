<?php

return [
    'name' => 'Consultations',
    'edit' => 'Voir la consultation',
    'statuses' => [
        'read' => 'Lu',
        'unread' => 'Non lu',
    ],
    'phone' => 'Téléphone',
    'ip_address' => 'Adresse IP',
    'content' => 'Détails',
    'consult_information' => 'Informations de consultation',
    'email' => [
        'header' => 'Email',
        'title' => 'Nouvelle consultation depuis votre site',
        'success' => 'Consultation envoyée avec succès !',
        'failed' => 'Impossible d\'envoyer la demande en ce moment, veuillez réessayer plus tard !',
    ],
    'form' => [
        'name' => [
            'required' => 'Le nom est requis',
        ],
        'email' => [
            'required' => 'L\'email est requis',
            'email' => 'L\'adresse email n\'est pas valide',
        ],
        'content' => [
            'required' => 'Le message est requis',
        ],
    ],
    'consult_sent_from' => 'Ces informations de consultation ont été envoyées depuis',
    'time' => 'Heure',
    'consult_id' => 'ID de Consultation',
    'form_name' => 'Nom',
    'form_email' => 'Email',
    'form_phone' => 'Téléphone',
    'mark_as_read' => 'Marquer comme lu',
    'mark_as_unread' => 'Marquer comme non lu',
    'new_consult_notice' => 'Vous avez <span class="bold">:count</span> Nouvelles Consultations',
    'view_all' => 'Voir tout',
    'project' => 'Projet',
    'property' => 'Propriété',
    'custom_field' => [
        'name' => 'Champs Personnalisés',
        'create' => 'Créer un Champ Personnalisé',
        'type' => 'Type',
        'required' => 'Requis',
        'placeholder' => 'Placeholder',
        'order' => 'Ordre',
        'options' => 'Options',
        'option' => [
            'label' => 'Libellé',
            'value' => 'Valeur',
            'add' => 'Ajouter une nouvelle option',
        ],
        'enums' => [
            'types' => [
                'text' => 'Texte',
                'number' => 'Nombre',
                'dropdown' => 'Liste déroulante',
                'checkbox' => 'Case à cocher',
                'radio' => 'Bouton radio',
                'textarea' => 'Zone de texte',
                'date' => 'Date',
                'datetime' => 'Date et heure',
                'time' => 'Heure',
            ],
        ],
    ],
];
