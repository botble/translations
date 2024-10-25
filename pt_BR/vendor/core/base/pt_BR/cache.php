<?php

return [
    'cache_management' => 'Gerenciamento de Cache',
    'cache_management_description' => 'Limpe o cache para atualizar seu site.',
    'cache_commands' => 'Limpar comandos de cache',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Limpe todo o cache do CMS',
            'description' => 'Limpe o cache do CMS: cache do banco de dados, blocos estáticos... Execute este comando quando não vir as alterações após atualizar os dados.',
            'success_msg' => 'Cache limpo',
        ],
        'refresh_compiled_views' => [
            'title' => 'Atualizar visualizações compiladas',
            'description' => 'Limpe as visualizações compiladas para atualizá-las.',
            'success_msg' => 'Visualização de cache atualizada',
        ],
        'clear_config_cache' => [
            'title' => 'Limpar cache de configuração',
            'description' => 'Pode ser necessário atualizar o cache de configuração ao alterar algo no ambiente de produção.',
            'success_msg' => 'Cache de configuração limpo',
        ],
        'clear_route_cache' => [
            'title' => 'Limpar cache de rota',
            'description' => 'Limpar roteamento de cache.',
            'success_msg' => 'O cache de rota foi limpo',
        ],
        'clear_log' => [
            'title' => 'Limpar registro',
            'description' => 'Limpar arquivos de log do sistema',
            'success_msg' => 'O log do sistema foi limpo',
        ],
    ],
];
