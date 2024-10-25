<?php

return [
    'title' => 'Instalação',
    'next' => 'Próxima etapa',
    'back' => 'Anterior',
    'finish' => 'Instalar',
    'installation' => 'Instalação',
    'forms' => [
        'errorTitle' => 'Ocorreram os seguintes erros:',
    ],
    'welcome' => [
        'title' => 'Bem-vindo',
        'message' => 'Antes de começar, precisamos de algumas informações sobre o banco de dados. Você precisará saber os seguintes itens antes de prosseguir.',
        'language' => 'Linguagem',
        'next' => 'Vamos',
    ],
    'requirements' => [
        'title' => 'Requisitos do servidor',
        'next' => 'Verifique as permissões',
    ],
    'permissions' => [
        'next' => 'Configurar ambiente',
    ],
    'environment' => [
        'wizard' => [
            'title' => 'Configurações de ambiente',
            'form' => [
                'name_required' => 'É necessário um nome de ambiente.',
                'app_name_label' => 'Título do site',
                'app_name_placeholder' => 'Título do site',
                'app_url_label' => 'URL',
                'app_url_placeholder' => 'URL',
                'db_connection_label' => 'Conexão de banco de dados',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'SQLite',
                'db_connection_label_pgsql' => 'PostgreSQL',
                'db_host_label' => 'Host de banco de dados',
                'db_host_placeholder' => 'Host de banco de dados',
                'db_port_label' => 'Porta do banco de dados',
                'db_port_placeholder' => 'Porta do banco de dados',
                'db_name_label' => 'Nome do banco de dados',
                'db_name_placeholder' => 'Nome do banco de dados',
                'db_username_label' => 'Nome de usuário do banco de dados',
                'db_username_placeholder' => 'Nome de usuário do banco de dados',
                'db_password_label' => 'Senha do banco de dados',
                'db_password_placeholder' => 'Senha do banco de dados',
                'buttons' => [
                    'install' => 'Instalar',
                ],
                'db_host_helper' => 'Se você usa Laravel Sail, basta alterar DB_HOST para DB_HOST=mysql. Em algumas hospedagens DB_HOST pode ser localhost em vez de 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'SQLite',
                    'pgsql' => 'PostgreSQL',
                ],
            ],
        ],
        'success' => 'As configurações do seu arquivo .env foram salvas.',
        'errors' => 'Não foi possível salvar o arquivo .env. Crie-o manualmente.',
    ],
    'theme' => [
        'title' => 'Escolha o tema',
        'message' => 'Escolha um tema para personalizar a aparência do seu site. Esta seleção também importará dados de amostra adaptados ao tema escolhido.',
    ],
    'createAccount' => [
        'title' => 'Criar uma conta',
        'form' => [
            'first_name' => 'Primeiro nome',
            'last_name' => 'Sobrenome',
            'username' => 'Nome de usuário',
            'email' => 'E-mail',
            'password' => 'Senha',
            'password_confirmation' => 'Confirmação de senha',
            'create' => 'Criar',
        ],
    ],
    'license' => [
        'title' => 'Ativar licença',
        'skip' => 'Pular por enquanto',
    ],
    'install' => 'Instalar',
    'final' => [
        'pageTitle' => 'Instalação concluída',
        'title' => 'Feito',
        'message' => 'O aplicativo foi instalado com sucesso.',
        'exit' => 'Vá para o painel de administração',
    ],
    'install_success' => 'Instalado com sucesso!',
    'install_step_title' => 'Installation - Step :step: :title',
];
