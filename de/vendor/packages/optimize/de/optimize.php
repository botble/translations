<?php

return [
    'settings' => [
        'title' => 'Optimize page speed',
        'description' => 'HTML -Ausgabe minifieren, Inline -CSS, Kommentare entfernen ...',
        'enable' => 'Aktivieren Sie die Seitengeschwindigkeit optimieren?',
    ],
    'collapse_white_space' => 'Kollabieren Sie den weißen Raum',
    'collapse_white_space_description' => 'Dieser Filter reduziert Bytes, die in einer HTML -Datei übertragen werden, indem unnötige Whitespace entfernt wird.',
    'elide_attributes' => 'Elide -Attribute',
    'elide_attributes_description' => 'Dieser Filter reduziert die Übertragungsgröße von HTML -Dateien, indem die Attribute aus Tags entfernt werden, wenn der angegebene Wert dem Standardwert für dieses Attribut entspricht. Dies kann eine bescheidene Anzahl von Bytes sparen und das Dokument durch Kanonialisierung der betroffenen Tags komprimierbarer machen.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Dieser Filter verwandelt das Inline -Style -Attribut von Tags in Klassen, indem das CSS in den Header verschoben wird.',
    'insert_dns_prefetch' => 'Fügen Sie DNS Prefetch ein',
    'insert_dns_prefetch_description' => 'Dieser Filter injiziert Tags im Kopf, damit der Browser DNS -Vorabstieg durchführen kann.',
    'remove_comments' => 'Kommentare entfernen',
    'remove_comments_description' => 'Dieser Filter beseitigt HTML-, JS- und CSS -Kommentare. Der Filter reduziert die Übertragungsgröße von HTML -Dateien, indem die Kommentare entfernt werden. Abhängig von der HTML -Datei kann dieser Filter die Anzahl der im Netzwerk übertragenen Bytes erheblich reduzieren.',
    'remove_quotes' => 'Zitate entfernen',
    'remove_quotes_description' => 'Dieser Filter beseitigt unnötige Anführungszeichen aus HTML -Attributen. Die Browser sind zwar nach den verschiedenen HTML -Spezifikationen erforderlich, und ermöglichen ihre Auslassung, wenn der Wert eines Attributs aus einer bestimmten Untergruppe von Zeichen (alphanumerische und einige Interpunktionszeichen) besteht.',
    'defer_javascript' => 'JavaScript aufschieben',
    'defer_javascript_description' => 'Defiert die Ausführung von JavaScript in der HTML. Verwenden Sie bei Bedarf das Aufschieben in ein Skript, verwenden Sie Data-PageSpeed-No-Defer als Skriptattribut, um die Aufhebung zu kündigen.',
];
