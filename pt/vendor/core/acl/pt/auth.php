<?php

return [
    'login' => [
        'username' => 'E-mail/Nome de usuário',
        'email' => 'E-mail',
        'password' => 'Senha',
        'title' => 'Login do usuário',
        'remember' => 'Lembre de mim?',
        'login' => 'Entrar',
        'placeholder' => [
            'username' => 'Digite seu nome de usuário ou endereço de e-mail',
            'email' => 'Digite seu endereço de e-mail',
            'password' => 'Digite sua senha',
        ],
        'success' => 'Login com sucesso!',
        'fail' => 'Nome de usuário ou senha incorretos.',
        'not_active' => 'Sua conta ainda não foi ativada!',
        'banned' => 'Esta conta foi banida.',
        'logout_success' => 'Sair com sucesso!',
        'dont_have_account' => 'Você não possui conta neste sistema, entre em contato com o administrador para obter mais informações!',
    ],
    'forgot_password' => [
        'title' => 'Esqueceu sua senha',
        'message' => '<p>Você esqueceu sua senha?</p><p>Insira sua conta de e-mail. O sistema enviará um e-mail com link ativo para redefinir sua senha.</p>',
        'submit' => 'Enviar',
    ],
    'reset' => [
        'new_password' => 'Nova Senha',
        'password_confirmation' => 'Confirme a nova senha',
        'email' => 'E-mail',
        'title' => 'Redefinir sua senha',
        'update' => 'Atualizar',
        'wrong_token' => 'Este link é inválido ou expirou. Tente usar o formulário de redefinição novamente.',
        'user_not_found' => 'Este nome de usuário não existe.',
        'success' => 'Redefinir senha com sucesso!',
        'fail' => 'O token é inválido, o link de redefinição de senha expirou!',
        'reset' => [
            'title' => 'E-mail redefinir senha',
        ],
        'send' => [
            'success' => 'Um e-mail foi enviado para sua conta de e-mail. Verifique e conclua esta ação.',
            'fail' => 'Não é possível enviar e-mail neste momento. Por favor, tente novamente mais tarde.',
        ],
        'new-password' => 'Nova Senha',
        'placeholder' => [
            'new_password' => 'Digite sua nova senha',
            'new_password_confirmation' => 'Confirme sua nova senha',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'E-mail redefinir senha',
        ],
    ],
    'password_confirmation' => 'Confirmação de senha',
    'failed' => 'Fracassado',
    'throttle' => 'Acelerador',
    'not_member' => 'Ainda não é membro?',
    'register_now' => 'Registre-se agora',
    'lost_your_password' => 'Perdeu sua senha?',
    'login_title' => 'Administrador',
    'login_via_social' => 'Faça login com redes sociais',
    'back_to_login' => 'Voltar à página de login',
    'sign_in_below' => 'Faça login abaixo',
    'languages' => 'Idiomas',
    'reset_password' => 'Redefinir senha',
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
