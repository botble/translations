<?php

return [
    'settings' => [
        'title' => 'Otimizar',
        'description' => 'Minimize a saída HTML, CSS embutido, remova comentários...',
        'enable' => 'Ativar a otimização da velocidade da página?',
    ],
    'collapse_white_space' => 'Recolher espaço em branco',
    'collapse_white_space_description' => 'Este filtro reduz os bytes transmitidos em um arquivo HTML removendo espaços em branco desnecessários.',
    'elide_attributes' => 'Elidir atributos',
    'elide_attributes_description' => 'Este filtro reduz o tamanho de transferência de arquivos HTML removendo atributos de tags quando o valor especificado é igual ao valor padrão desse atributo. Isso pode economizar um número modesto de bytes e tornar o documento mais compactado canonizando as tags afetadas.',
    'inline_css' => 'CSS embutido',
    'inline_css_description' => 'Este filtro transforma o atributo "estilo" embutido das tags em classes, movendo o CSS para o cabeçalho.',
    'insert_dns_prefetch' => 'Inserir pré-busca de DNS',
    'insert_dns_prefetch_description' => 'Este filtro injeta tags no HEAD para permitir que o navegador faça a pré-busca de DNS.',
    'remove_comments' => 'Remover comentários',
    'remove_comments_description' => 'Este filtro elimina comentários HTML, JS e CSS. O filtro reduz o tamanho da transferência de arquivos HTML removendo os comentários. Dependendo do arquivo HTML, este filtro pode reduzir significativamente o número de bytes transmitidos na rede.',
    'remove_quotes' => 'Remover aspas',
    'remove_quotes_description' => 'Este filtro elimina aspas desnecessárias dos atributos HTML. Embora exigido pelas diversas especificações HTML, os navegadores permitem sua omissão quando o valor de um atributo é composto por um determinado subconjunto de caracteres (alfanuméricos e alguns caracteres de pontuação).',
    'defer_javascript' => 'Adiar javascript',
    'defer_javascript_description' => 'Adia a execução de javascript no HTML. Se necessário cancelar o adiamento em algum script, use data-pagespeed-no-defer como atributo do script para cancelar o adiamento.',
];
