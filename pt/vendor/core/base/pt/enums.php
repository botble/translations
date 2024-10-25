<?php

return [
    'statuses' => [
        'draft' => 'Rascunho',
        'pending' => 'Pendente',
        'published' => 'Publicado',
    ],
    'system_updater_steps' => [
        'download' => 'Baixar arquivos de atualização',
        'update_files' => 'Atualizar arquivos do sistema',
        'update_database' => 'Atualizar bancos de dados',
        'publish_core_assets' => 'Publique os principais ativos',
        'publish_packages_assets' => 'Publicar ativos de pacotes',
        'clean_up' => 'Limpe os arquivos de atualização do sistema',
        'done' => 'Sistema atualizado com sucesso',
        'messages' => [
            'download' => 'Baixando arquivos de atualização...',
            'update_files' => 'Atualizando arquivos do sistema...',
            'update_database' => 'Atualizando bancos de dados...',
            'publish_core_assets' => 'Publicando ativos principais...',
            'publish_packages_assets' => 'Publicando ativos de pacotes...',
            'clean_up' => 'Limpando arquivos de atualização do sistema...',
            'done' => 'Feito! Seu navegador será atualizado em 30 segundos.',
        ],
        'failed_messages' => [
            'download' => 'Não foi possível baixar os arquivos de atualização',
            'update_files' => 'Não foi possível atualizar os arquivos do sistema',
            'update_database' => 'Não foi possível atualizar os bancos de dados',
            'publish_core_assets' => 'Não foi possível publicar os recursos principais',
            'publish_packages_assets' => 'Não foi possível publicar ativos de pacotes',
            'clean_up' => 'Não foi possível limpar os arquivos de atualização do sistema',
        ],
        'success_messages' => [
            'download' => 'Arquivos de atualização baixados com sucesso.',
            'update_files' => 'Arquivos de sistema atualizados com sucesso.',
            'update_database' => 'Bancos de dados atualizados com sucesso.',
            'publish_core_assets' => 'Ativos principais publicados com sucesso.',
            'publish_packages_assets' => 'Ativos de pacotes publicados com sucesso.',
            'clean_up' => 'Arquivos de atualização do sistema limpos com sucesso.',
        ],
    ],
];
