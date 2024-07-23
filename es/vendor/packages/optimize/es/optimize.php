<?php

return [
    'settings' => [
        'title' => 'Optimizar',
        'description' => 'Minificar la salida HTML, incluir CSS en línea y eliminar comentarios...',
        'enable' => '¿Habilitar optimizar la velocidad de la página?',
    ],
    'collapse_white_space' => 'Contraer espacio en blanco',
    'collapse_white_space_description' => 'Este filtro reduce los bytes transmitidos en un archivo HTML eliminando espacios en blanco innecesarios.',
    'elide_attributes' => 'Atributos de elida',
    'elide_attributes_description' => 'Este filtro reduce el tamaño de transferencia de archivos HTML eliminando atributos de las etiquetas cuando el valor especificado es igual al valor predeterminado para ese atributo. Esto puede ahorrar una cantidad modesta de bytes y puede hacer que el documento sea más comprimible al canonicalizar las etiquetas afectadas.',
    'inline_css' => 'CSS en línea',
    'inline_css_description' => 'Este filtro transforma el atributo "estilo" en línea de las etiquetas en clases moviendo el CSS al encabezado.',
    'insert_dns_prefetch' => 'Insertar captación previa de DNS',
    'insert_dns_prefetch_description' => 'Este filtro inyecta etiquetas en HEAD para permitir que el navegador realice una captación previa de DNS.',
    'remove_comments' => 'Eliminar comentarios',
    'remove_comments_description' => 'Este filtro elimina comentarios HTML, JS y CSS. El filtro reduce el tamaño de transferencia de archivos HTML eliminando los comentarios. Dependiendo del archivo HTML, este filtro puede reducir significativamente la cantidad de bytes transmitidos en la red.',
    'remove_quotes' => 'Eliminar comillas',
    'remove_quotes_description' => 'Este filtro elimina comillas innecesarias de los atributos HTML. Si bien lo exigen las diversas especificaciones HTML, los navegadores permiten su omisión cuando el valor de un atributo se compone de un determinado subconjunto de caracteres (alfanuméricos y algunos caracteres de puntuación).',
    'defer_javascript' => 'Aplazar javascript',
    'defer_javascript_description' => 'Difiere la ejecución de javascript en el HTML. Si es necesario cancelar el aplazamiento en algún script, utilice data-pagespeed-no-defer como atributo del script para cancelar el aplazamiento.',
];
