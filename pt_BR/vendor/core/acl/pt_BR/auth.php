<?php

return [
    'login' => [
        'email' => 'E-mail',
        'banned' => 'Sua conta foi banida.',
        'password' => 'Senha',
        'success' => 'Login feito com sucesso!',
        'placeholder' => [
            'email' => 'Entre com seu email, por favor!',
            'username' => 'Entre com seu usuário, por favor!',
            'password' => 'Digite sua senha',
        ],
        'not_active' => 'Sua conta ainda não foi ativada!',
        'username' => 'Email/Usuário',
        'fail' => 'Usuário ou senha errado',
        'remember' => 'Lembrar?',
        'dont_have_account' => 'Voçê nao tem uma conta válida, favor entrar em contato com o administrador para mais informações!',
        'login' => 'Entrar',
        'title' => 'Usuário',
        'logout_success' => 'Sair',
    ],
    'forgot_password' => [
        'title' => 'Esqueceu senha',
        'submit' => 'Enviar',
        'message' => '<p>Voçê esqueceu sua senha?</p><p>Favor informar seu email e enviaremos um link para alteração de senha.</p>',
    ],
    'reset' => [
        'email' => 'E-mail',
        'new_password' => 'Nova senha',
        'new-password' => 'Nova senha',
        'password_confirmation' => 'Confirmar nova senha',
        'user_not_found' => 'Este usuário não existe.',
        'send' => [
            'fail' => 'Não é possivel enviar email neste momento.',
            'success' => 'Um email foi enviado a sua conta! Verifique para completar esta ação.',
        ],
        'fail' => 'Token inválido, o link para nova senha expirou!',
        'wrong_token' => 'Este link é invalido ou expirou. Solicite nova senha.',
        'update' => 'Atualizar',
        'success' => 'Senha alterada com sucesso!',
        'title' => 'Alterar sua senha',
        'reset' => [
            'title' => 'Email do reset da senha',
        ],
        'placeholder' => [
            'new_password' => 'Digite sua nova senha',
            'new_password_confirmation' => 'Confirme sua nova senha',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email do reset de senha',
        ],
    ],
    'password_confirmation' => 'Senha confirmada',
    'failed' => 'Falhou',
    'throttle' => 'Acelerador',
    'not_member' => 'Ainda não é membro?',
    'register_now' => 'Registre agora',
    'lost_your_password' => 'Esqueceu a senha?',
    'login_title' => 'Administrador',
    'login_via_social' => 'Entrar com redes sociais',
    'back_to_login' => 'Voltar para a pagina de login',
    'sign_in_below' => 'Entre abaixo',
    'languages' => 'Idiomas',
    'reset_password' => 'Nova senha',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Configuração de e-mail ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Redefinir senha',
                    'description' => 'Enviar e-mail ao usuário ao solicitar redefinição de senha',
                    'subject' => 'Redefinir senha',
                    'reset_link' => 'Link para redefinir senha',
                ],
            ],
        ],
    ],
];
