<?php

return [
    'name' => 'Accounts',
    'create' => 'New account',
    'confirmation_subject' => 'Подтверждение Email',
    'confirmation_subject_title' => 'Подтвердите Ваш email',
    'not_confirmed' => 'Введенный email не подтвержден. <a href=":resend_link">Выслать новое подтверждение</a>',
    'confirmation_successful' => 'Ваш email адрес подтвержден.',
    'confirmation_info' => 'Мы отправили Вам письмо. Проверьте почтовый ящик и подтвердите ваш Email',
    'confirmation_resent' => 'Мы отправили Вам еще одно подтверждение. Проверьте почтовый ящик.',
    'form' => [
        'first_name' => 'Имя',
        'last_name' => 'Фамилия',
        'email' => 'Email',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'change_password' => 'Изменить пароль?',
        'is_public_profile' => 'Публичный профиль?',
        'hide_cv' => 'Скрыть резюме?',
        'avatar_image' => 'Аватар',
        'gender' => 'Пол',
        'resume' => 'Резюме',
        'available_for_hiring' => 'В активном поиске?',
        'company' => 'Компания',
        'position' => 'Вакансия',
        'school' => 'Учебное заведение',
        'specialized' => 'Specialized',
        'started_at' => 'Started At',
        'ended_at' => 'Ended At',
        'description' => 'Описание',
        'company_placeholder' => 'Название компании',
        'position_placeholder' => 'Название должности',
        'school_placeholder' => 'Enter school',
        'specialized_placeholder' => 'Enter specialized',
        'number_of_credits' => 'Number of credits',
        'address' => 'Адрес',
        'phone' => 'Телефон',
        'date_of_birth' => 'Дата рождения',
    ],
    'confirm_delete' => 'Вы уверены, что хотите удалить этот объект?',
    'forgot_password' => 'Забыл пароль',
    'login' => 'Войти',
    'type' => 'Тип',
    'types' => [
        'job-seeker' => 'Соискатель',
        'employer' => 'Работодатель',
    ],
    'buy_credits' => 'Купить кредиты',
    'credits' => 'кредиты',
    'emails' => [
        'title' => 'Профиль',
        'description' => 'Email профиля',
    ],
    'enums' => [
        'genders' => [
            'male' => 'Мужчина',
            'female' => 'Женщина',
            'other' => 'Другое',
        ],
    ],
    'table' => [
        'educations' => [
            'school' => 'Учебное заведение',
            'specialized' => 'Specialized',
        ],
        'experiences' => [
            'company' => 'Компания',
            'position' => 'Вакансия',
        ],
        'languages' => [
            'name' => 'Язык',
            'code' => 'Code',
            'level' => 'Уровень',
            'is_native' => 'Родной?',
        ],
        'started_at' => 'Начало',
        'ended_at' => 'Окончание',
        'action' => 'Действие',
    ],
    'action_table' => [
        'edit' => 'Редактировать',
        'delete' => 'Удалить',
        'add' => 'Добавить',
    ],
    'edit_education' => 'Редактировать образование',
    'add_education' => 'Добавить образование',
    'edit_experience' => 'Редактировать опыт',
    'add_experience' => 'Добавить опыт',
    'add_language' => 'Добавить язык',
    'no_education' => 'Нет образования',
    'no_experience' => 'Нет опыта',
    'no_languages' => 'Нет языков',
    'now' => 'сейчас',
    'add_credit_to_account' => 'Add credit to account',
    'no_transactions' => 'No transactions',
    'transactions' => 'Transactions',
    'add_credit' => 'Add credit',
    'added' => 'Added',
    'educations' => [
        'store' => 'Запись об образовании создана!',
        'update' => 'Запись об образовании обновлена!',
        'delete' => 'Запись об образовании удалена!',
    ],
    'experiences' => [
        'store' => 'Место работы создано!',
        'update' => 'Запись о месте работы обновлена!',
        'delete' => 'Запись о месте работы удалена!',
    ],
    'import' => [
        'name' => 'Import Accounts',
    ],
    'export' => [
        'name' => 'Export Accounts',
        'total' => 'Total Accounts',
    ],
    'email_verified' => 'Email verified?',
];
