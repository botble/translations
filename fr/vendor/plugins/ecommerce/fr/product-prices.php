<?php

return [
    'name' => 'Prix ​​des produits',
    'warning_prices' => 'Ces prix représentent les coûts initiaux du produit et peuvent ne pas refléter les prix finaux, qui peuvent varier en raison de facteurs tels que les ventes flash, les promotions, etc.',
    'import' => [
        'name' => 'Mettre à jour les prix des produits',
        'description' => 'Mettez à jour les prix des produits en masse en téléchargeant un fichier CSV/Excel.',
        'done_message' => 'Updated :count product(s) successfully.',
        'rules' => [
            'id' => 'Le champ ID est obligatoire et doit exister dans la table des produits.',
            'name' => 'Le champ nom est obligatoire et doit être une chaîne.',
            'sku' => 'Le champ SKU doit être une chaîne.',
            'cost_per_item' => 'Le champ Coût par article doit être une valeur numérique.',
            'price' => 'Le champ Prix est obligatoire et doit être une valeur numérique.',
            'sale_price' => 'Le champ Prix de vente doit être une valeur numérique.',
        ],
    ],
    'export' => [
        'description' => 'Exportez les prix des produits vers un fichier CSV/Excel.',
    ],
];
