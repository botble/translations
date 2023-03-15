<?php

return [
    'settings' => [
        'title' => 'Optimiser la vitesse des pages',
        'description' => 'Minify HTML output, inline CSS, remove comments...',
        'enable' => 'Activer l\'optimisation de la vitesse des pages ?',
    ],
    'collapse_white_space' => 'Réduire l\'espace blanc',
    'collapse_white_space_description' => 'Ce filtre réduit le nombre d\'octets transmis dans un fichier HTML en supprimant les espaces blancs inutiles.',
    'elide_attributes' => 'Attributs de l\'élide',
    'elide_attributes_description' => 'Ce filtre réduit la taille de transfert des fichiers HTML en supprimant les attributs des balises lorsque la valeur spécifiée est égale à la valeur par défaut de cet attribut. Cela permet d\'économiser un nombre modeste d\'octets et peut rendre le document plus compressible en canonisant les balises concernées.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Ce filtre transforme l\'attribut "style" en ligne des balises en classes en déplaçant le CSS vers l\'en-tête.',
    'insert_dns_prefetch' => 'Insert DNS prefetch',
    'insert_dns_prefetch_description' => 'Ce filtre injecte des balises dans le HEAD pour permettre au navigateur d\'effectuer une recherche préalable de DNS.',
    'remove_comments' => 'Supprimer les commentaires',
    'remove_comments_description' => 'Ce filtre élimine les commentaires HTML, JS et CSS. Le filtre réduit la taille de transfert des fichiers HTML en supprimant les commentaires. En fonction du fichier HTML, ce filtre peut réduire de manière significative le nombre d\'octets transmis sur le réseau.',
    'trim_urls' => 'Trim URLs',
    'trim_urls_description' => 'Ce filtre élimine les URL en les résolvant par rapport à l\'URL de base de la page.',
    'remove_quotes' => 'Supprimer les guillemets',
    'remove_quotes_description' => 'Ce filtre élimine les guillemets inutiles des attributs HTML. Bien qu\'ils soient requis par les différentes spécifications HTML, les navigateurs permettent leur omission lorsque la valeur d\'un attribut est composée d\'un certain sous-ensemble de caractères (alphanumériques et certains caractères de ponctuation).',
    'defer_javascript' => 'Reporter le javascript',
    'defer_javascript_description' => 'Diffère l\'exécution du javascript dans le HTML. S\'il est nécessaire d\'annuler le report dans certains scripts, utilisez data-pagespeed-no-defer comme attribut de script pour annuler le report.',
];
