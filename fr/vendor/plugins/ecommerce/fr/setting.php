<?php

return [
    'save_settings' => 'Sauvegarder les paramètres',
    'general' => [
        'name' => 'Général',
        'description' => 'Afficher et mettre à jour vos paramètres généraux',
    ],
    'currency' => [
        'name' => 'Devises',
        'description' => 'Afficher et mettre à jour les paramètres de devise',
        'currency_setting_description' => 'Afficher et mettre à jour les devises en utilisant sur le site Web',
        'form' => [
            'enable_auto_detect_visitor_currency' => 'Activer la détection automatique de la devise du visiteur',
            'add_space_between_price_and_currency' => 'Ajouter un espace entre le prix et la devise',
            'thousands_separator' => 'Séparateur de milliers',
            'decimal_separator' => 'Séparateur décimal',
            'separator_period' => 'Période (.)',
            'separator_comma' => 'Virgule (,)',
            'separator_space' => 'Espace ( )',
            'api_key' => 'Clé des taux de change de l\'API',
            'api_key_helper' => 'Get exchange rate API key on :link',
            'update_currency_rates' => 'Mettre à jour les taux de change',
            'use_exchange_rate_from_api' => 'Utiliser le taux de change de l\'API',
            'clear_cache_rates' => 'Effacer les taux de cache',
            'auto_detect_visitor_currency_description' => 'Il détecte la devise des visiteurs en fonction de la langue du navigateur. Cela remplacera la sélection de devise par défaut.',
            'exchange_rate' => [
                'api_provider' => 'Fournisseur d\'API',
                'select' => '-- Sélectionner --',
                'none' => 'Aucun',
                'provider' => [
                    'api_layer' => 'Couche API',
                    'open_exchange_rate' => 'Taux de change ouverts',
                ],
                'open_exchange_app_id' => 'ID de l’application Ouvrir les taux de change',
            ],
            'default_currency_warning' => 'Pour la devise par défaut, le taux de change doit être 1.',
        ],
    ],
    'product' => [
        'name' => 'Des produits',
        'description' => 'Afficher et mettre à jour les paramètres de vos produits',
        'product_settings' => 'Paramètres du produit',
        'product_settings_description' => 'Configurer les règles pour le produit',
        'form' => [
            'show_number_of_products' => 'Afficher le nombre de produits dans le produit unique',
            'show_out_of_stock_products' => 'Afficher les produits en rupture de stock',
            'how_to_display_product_variation_images' => 'Comment afficher des images de variantes de produits',
            'only_variation_images' => 'Uniquement des images de variations',
            'variation_images_and_main_product_images' => 'Images de variantes et images principales du produit',
            'enable_product_options' => 'Activer les options du produit',
            'is_enabled_cross_sale_products' => 'Activer les produits de vente croisée',
            'is_enabled_related_products' => 'Activer les produits associés',
            'auto_generate_product_sku' => 'Générer automatiquement le SKU lors de la création du produit',
            'product_sku_format' => 'Format UGS',
            'product_sku_format_helper' => 'Vous pouvez utiliser %s (1 caractère de chaîne) ou %d (1 chiffre) dans le format pour générer une chaîne aléatoire. Ex : SKU-%s%s%s-HN-%d%d%d',
        ],
    ],
    'product_search' => [
        'name' => 'Recherche de produit',
        'description' => 'Afficher et mettre à jour les paramètres de recherche de produits',
        'product_search_settings' => 'Recherche de produit',
        'product_search_settings_description' => 'Configurer les règles pour la recherche de produits',
        'form' => [
            'search_for_an_exact_phrase' => 'Rechercher une expression exacte',
            'search_products_by' => 'Rechercher des produits par :',
            'enable_filter_products_by_brands' => 'Activer le filtrage des produits par marques',
            'enable_filter_products_by_tags' => 'Activer le filtrage des produits par balises',
            'enable_filter_products_by_attributes' => 'Activer le filtrage des produits par attributs',
        ],
    ],
    'digital_product' => [
        'name' => 'Produits numériques',
        'description' => 'Afficher et mettre à jour les paramètres des produits numériques',
        'digital_products_settings' => 'Produits numériques',
        'digital_products_settings_description' => 'Configurer les règles pour les produits numériques',
        'form' => [
            'enable_support_digital_product' => 'Est-il activé pour prendre en charge les produits numériques',
            'allow_guest_checkout_for_digital_products' => 'Autoriser le paiement par les invités pour les produits numériques',
            'disable_physical_product' => 'Désactiver le produit physique',
        ],
    ],
    'product_review' => [
        'name' => 'Avis sur les produits',
        'description' => 'Afficher et mettre à jour les paramètres de vos avis sur les produits',
        'form' => [
            'enable_review' => 'Activer la révision',
            'review' => [
                'max_file_size' => 'Vérifier la taille maximale du fichier (Mo)',
                'max_file_number' => 'Vérifier le nombre maximum de dossiers',
            ],
            'only_allow_customers_purchased_to_review' => 'Seuls les clients ayant acheté le produit peuvent évaluer le produit',
            'review_need_to_be_approved' => 'L\'avis doit être approuvé avant d\'être affiché sur la page du produit',
            'show_customer_full_name' => 'Afficher le nom complet du client',
            'show_customer_full_name_help' => 'Si cette case n\'est pas cochée, le nom du client évaluateur sera masqué et remplacé par des astérisques (***)',
        ],
    ],
    'shopping' => [
        'name' => 'Achats',
        'description' => 'Afficher et mettre à jour vos paramètres d\'achat',
        'general_setting' => 'Réglages généraux',
        'return_settings' => 'Paramètres de retour',
        'return_settings_description' => 'Configurer les règles pour les paramètres de retour',
        'form' => [
            'enable_cart' => 'Activer le panier',
            'enable_wishlist' => 'Activer la liste de souhaits',
            'enable_wishlist_sharing' => 'Activer le partage de liste de souhaits',
            'shared_wishlist_lifetime' => 'Durée de vie de la liste de souhaits partagée (jours)',
            'shared_wishlist_lifetime_helper' => 'La durée de vie de la liste de souhaits partagée en jours. Passé ce délai, la liste de souhaits partagée sera supprimée.',
            'enable_compare' => 'Activer la comparaison',
            'enable_order_tracking' => 'Activer le suivi des commandes',
            'enable_quick_buy_button' => 'Activer le bouton d\'achat rapide',
            'enable_order_auto_confirmed' => 'Confirmation automatique de la commande',
            'quick_buy_target' => 'Page cible d\'achat rapide',
            'checkout_page' => 'Page de paiement',
            'cart_page' => 'Page du panier',
            'cart_destroy_on_logout' => 'Détruire le panier à la déconnexion',
        ],
    ],
    'checkout' => [
        'name' => 'Vérifier',
        'panel_description' => 'Afficher et mettre à jour les paramètres de paiement',
        'description' => 'Configurer les règles pour les paramètres de paiement',
        'form' => [
            'display_bank_info_at_the_checkout_success_page' => 'Afficher les informations bancaires sur la page de réussite du paiement',
            'mandatory_form_fields_at_checkout' => 'Champs obligatoires sur la page de paiement :',
            'hide_form_fields_at_checkout' => 'Masquer les champs client sur la page de paiement :',
            'load_countries_states_cities_from_location_plugin' => 'Charger les pays, les états et les villes à partir de l\'emplacement du plugin',
            'load_countries_states_cities_from_location_plugin_placeholder' => 'Après avoir modifié cette option, vous devez à nouveau mettre à jour toutes les adresses. Vous devriez le régler une fois.',
            'load_countries_states_cities_from_location_plugin_placeholder_2' => 'Ensuite, vous devez aller dans Outils -> Importer/Exporter des données pour importer les données de localisation.',
            'minimum_order_amount' => 'Montant minimum de commande pour passer une commande (:devise).',
            'zip_code_enabled' => 'Activer le code postal',
            'billing_address_enabled' => 'Activer l\'adresse de facturation',
            'display_tax_fields_at_checkout_page' => 'Afficher les champs d\'informations fiscales sur la page de paiement',
            'use_city_field_as_field_text' => 'Utiliser le champ de ville comme champ de texte libre',
            'available_countries' => 'Pays disponibles',
            'all' => 'Tous',
            'all_helper_text' => 'Si vous décochez tous les pays, cela s\'appliquera à tous les pays.',
            'enable_guest_checkout' => 'Activer le paiement des invités',
            'recently_viewed' => [
                'enable' => 'Activer les produits récemment consultés par les clients',
                'max' => 'Nombre maximum de produits récemment consultés par les clients',
                'max_helper' => 'Si vous définissez 0, tous les produits seront enregistrés.',
            ],
            'minimum_order_quantity' => 'Quantité minimum d\'achat',
            'minimum_order_quantity_helper' => 'Quantité minimum pour passer une commande. Laissez-le être 0 si vous ne souhaitez pas le définir.',
            'maximum_order_quantity' => 'Quantité maximale de commande',
            'maximum_order_quantity_helper' => 'Quantité maximale pour passer une commande. Laissez-le être 0 si vous ne souhaitez pas le définir.',
        ],
    ],
    'return' => [
        'name' => 'Retour',
        'description' => 'Configurer les règles pour les paramètres de retour',
        'panel_description' => 'Afficher et mettre à jour les paramètres de retour',
        'form' => [
            'is_enabled_order_return' => 'Est activé le retour de commande',
            'allow_partial_return' => 'Autoriser le retour partiel',
            'allow_partial_return_description' => 'Le client peut retourner quelques produits, il n\'est pas nécessaire de retourner tous les produits d\'une commande.',
            'returnable_days' => 'Jours consignés',
            'return_settings_helper' => 'Nombre de jours pendant lesquels un client peut demander un retour une fois la commande terminée.',
        ],
    ],
    'invoice' => [
        'name' => 'Factures',
        'description' => 'Afficher et mettre à jour vos paramètres de factures',
        'company_settings' => 'Paramètres de l\'entreprise',
        'company_settings_description' => 'Paramètres Informations sur l\'entreprise pour la facturation',
        'form' => [
            'company_name' => 'Nom de l\'entreprise',
            'company_address' => 'Adresse de la société',
            'company_zipcode' => 'Code postal de l\'entreprise',
            'company_email' => 'E-mail de l\'entreprise',
            'company_phone' => 'Téléphone de l\'entreprise',
            'company_logo' => 'Logo d\'entreprise',
            'company_tax_id' => 'Numéro d\'identification fiscale de l\'entreprise',
            'invoice_code_prefix' => 'Préfixe du code de facture',
            'using_custom_font_for_invoice' => 'Utiliser une police personnalisée pour la facture',
            'invoice_font_family' => 'Famille de polices de facture (fonctionne uniquement pour la langue latine)',
            'enable_invoice_stamp' => 'Activer le cachet de la facture',
            'add_language_support' => 'Ajouter la prise en charge linguistique',
            'only_latin_languages' => 'Uniquement les langues latines',
            'disable_order_invoice_until_order_confirmed' => 'Désactiver la facture de commande jusqu\'à ce que la commande soit confirmée',
            'date_format' => 'Format de date',
        ],
    ],
    'tax' => [
        'name' => 'Impôts',
        'description' => 'Afficher et mettre à jour vos paramètres de taxes',
        'tax_setting' => 'Paramètres fiscaux',
        'tax_setting_description' => 'Configurer les paramètres fiscaux',
        'tax_management' => 'Gestion des impôts',
        'tax_management_description' => 'Consultez et gérez vos impôts',
        'form' => [
            'enable_tax' => 'Activer la taxe',
            'display_company_invoice_information_fields_at_checkout_page' => 'Afficher les champs d\'informations sur la facture de l\'entreprise sur la page de paiement',
            'display_company_invoice_information_fields_at_checkout_page_helper' => 'S\'il est activé, les champs d\'informations sur la facture de l\'entreprise seront affichés sur la page de paiement. Il est obligatoire de remplir les champs d’informations sur la facture de l’entreprise.',
            'default_tax_rate' => 'Taux d\'imposition par défaut',
            'default_tax_rate_description' => 'Important : elle sera appliquée si aucune taxe n\'est sélectionnée dans le produit.',
            'select_tax' => '-- Sélectionner --',
            'display_product_price_including_taxes' => 'Afficher le prix du produit taxes comprises',
        ],
    ],
    'customer' => [
        'name' => 'Clients',
        'description' => 'Afficher et mettre à jour les paramètres de vos clients',
        'customer_setting' => 'Paramètres client',
        'customer_setting_description' => 'Configurer les paramètres client',
        'form' => [
            'verify_customer_email' => 'Vérifier l\'e-mail du client',
            'verify_customer_email_helper' => 'Lorsqu\'il est activé, un lien de vérification sera envoyé à l\'e-mail du client, les clients doivent cliquer sur ce lien pour vérifier leur e-mail avant de pouvoir se connecter.',
            'login_using_phone' => 'Connectez-vous avec un numéro de téléphone au lieu d\'un e-mail',
            'login_option' => 'Option de connexion',
            'login_with_email' => 'Connectez-vous avec email',
            'login_with_phone' => 'Connectez-vous avec le téléphone',
            'login_with_email_or_phone' => 'Connectez-vous par e-mail ou par téléphone',
            'enabled_customer_account_deletion' => 'Activer la suppression du compte client',
            'enabled_customer_account_deletion_helper' => 'Lorsqu\'il est activé, les clients peuvent supprimer leur compte dans le tableau de bord client → Paramètres du compte.',
            'enabled_customer_dob_field' => 'Activer le champ date de naissance du client',
            'enabled_customer_dob_field_helper' => 'Lorsqu\'il est activé, les clients peuvent saisir leur date de naissance dans le tableau de bord client → Paramètres du compte.',
        ],
    ],
    'shipping' => [
        'name' => 'Expédition',
        'description' => 'Afficher et mettre à jour les paramètres d\'expédition',
        'shipping_rule' => 'Règles d\'expédition',
        'shipping_rule_description' => 'Configurer les règles pour calculer les frais d\'expédition',
        'shipping_setting' => 'Paramètres d\'expédition',
        'shipping_setting_description' => 'Configurer les paramètres d\'expédition',
        'form' => [
            'hide_other_shipping_options_if_it_has_free_shipping' => 'Masquer les autres options d\'expédition si la livraison est gratuite dans la liste',
        ],
    ],
    'webhook' => [
        'name' => 'Webhook',
        'description' => 'Configurer les paramètres du webhook',
        'webhook_setting' => 'Webhook',
        'webhook_setting_description' => 'Envoyer un webhook lors de la commande',
        'form' => [
            'order_placed_webhook_url' => 'URL du webhook passé par la commande (méthode : POST)',
            'order_placed_webhook_url_placeholder' => 'https://...',
            'order_placed_webhook_url_helper' => 'Pour recevoir des notifications lorsqu\'une commande est passée, vous pouvez configurer une URL de webhook externe. Si vous disposez d\'une URL de webhook externe, vous pouvez saisir cette URL ou simplement la laisser vide.',
        ],
    ],
    'store_locator' => [
        'name' => 'Localisateurs de magasins',
        'description' => 'Consultez et mettez à jour les listes de vos chaînes',
        'store_locator_description' => 'Toutes les listes de vos chaînes, magasins principaux, succursales, etc. Les emplacements peuvent être utilisés pour suivre les ventes et pour nous aider à configurer les taux de taxe à appliquer lors de la vente de produits.',
        'form' => [
            'change_primary_store' => 'changer le localisateur de magasin par défaut',
            'add_location' => 'Ajouter un emplacement',
            'edit_location' => 'Modifier l\'emplacement',
            'delete_location' => 'Supprimer l\'emplacement',
            'delete_location_confirmation' => 'Êtes-vous sûr de vouloir supprimer cet emplacement? Cette action ne peut pas être annulée.',
            'change_primary_location' => 'Changer l\'emplacement principal',
            'save_location' => 'Enregistrer l\'emplacement',
            'add_new' => 'Ajouter un nouveau',
        ],
    ],
    'tracking' => [
        'name' => 'Suivi',
        'description' => 'Afficher et mettre à jour les paramètres de suivi',
        'manage_tracking' => 'Gérer le suivi',
        'manage_tracking_description' => 'Gérer le tracking : UTM, Facebook, Google Tag Manager...',
        'form' => [
            'enable_facebook_pixel' => 'Activer le pixel Facebook (méta pixel)',
            'facebook_pixel_helper' => 'Accédez à https://developers.facebook.com/docs/meta-pixel pour créer Facebook Pixel.',
            'facebook_pixel_id' => 'Identifiant de pixel Facebook',
            'enable_google_tag_manager_tracking_events' => 'Activer les événements de suivi de Google Tag Manager',
            'google_tag_manager_tracking_info' => 'You need to add Google Tag Manager to tracking your website, please go to Admin → Settings → :website_tracking.',
        ],
    ],
    'marketplace' => [
        'name' => 'Marché',
        'description' => 'Afficher et mettre à jour les paramètres du marché',
    ],
    'standard_and_format' => [
        'name' => 'Format standard',
        'panel_description' => 'Afficher et mettre à jour les paramètres de norme et de format',
        'description' => 'Les normes et les formats sont utilisés pour calculer des éléments tels que les prix des produits, les poids d\'expédition et les délais de commande.',
        'form' => [
            'change_order_format' => 'Modifier le format du code de commande (facultatif)',
            'change_order_format_description' => 'Le code de commande par défaut commence à : numéro. Vous pouvez modifier la chaîne de début ou de fin pour créer le code de commande souhaité, par exemple « DH- : numéro » ou « : numéro-A »',
            'start_with' => 'Commencer avec',
            'end_with' => 'Terminer par',
            'order_will_be_shown' => 'Votre code de commande sera affiché',
            'weight_unit' => 'Unité de poids',
            'height_unit' => 'Longueur / hauteur de l\'unité',
            'weight_unit_gram' => 'Gramme (g)',
            'weight_unit_kilogram' => 'Kilogramme (kg)',
            'weight_unit_lb' => 'Livre (lb)',
            'weight_unit_oz' => 'Once (oz)',
            'height_unit_cm' => 'Centimètre (cm)',
            'height_unit_m' => 'Mètre (m)',
            'height_unit_inch' => 'Pouce',
        ],
    ],
    'sale_popup' => [
        'name' => 'Pop-up de vente',
        'description' => 'Personnalisez facilement les paramètres de votre popup de vente',
    ],
    'flash_sale' => [
        'name' => 'Vente flash',
        'description' => 'Afficher et mettre à jour les paramètres de vente flash',
        'enable' => 'Activer la vente flash',
        'show_sale_count_left' => 'Afficher le nombre de ventes restantes',
        'show_sale_count_left_description' => 'Cette option affichera le nombre de produits restants dans la vente flash.',
    ],
    'payment_method_cod_minimum_amount' => 'Minimum order amount - :currency (Optional)',
    'display_bank_info_at_the_checkout_success_page' => 'Afficher les informations bancaires sur la page de réussite du paiement ?',
    'invoice_templates' => 'Modèles de facture',
];
