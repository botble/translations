<?php

return [
    'name' => 'Inventaire de produits',
    'storehouse_management' => 'Gestion d\'entrepôt',
    'import' => [
        'name' => 'Mettre à jour l\'inventaire des produits',
        'description' => 'Mettez à jour l\'inventaire de produits en masse en téléchargeant un fichier CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'Le champ ID est obligatoire et doit exister dans la table des produits.',
            'name' => 'Le champ nom est obligatoire et doit être une chaîne.',
            'sku' => 'Le champ SKU doit être une chaîne.',
            'with_storehouse_management' => 'Le champ Avec gestion magasin doit être "Oui" ou "Non".',
            'quantity' => 'Le champ quantité est obligatoire lorsqu\'en gestion de magasin est "Oui".',
            'stock_status' => 'The stock status field is mandatory when with storehouse management is "No" and must be one of the following values: :statuses.',
        ],
    ],
    'export' => [
        'description' => 'Exportez l\'inventaire des produits vers un fichier CSV/Excel.',
    ],
];
