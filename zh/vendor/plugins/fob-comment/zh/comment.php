<?php

return [
    'common' => [
        'name' => '姓名',
        'email' => '电子邮件',
        'website' => '网站',
        'comment' => '评论',
    ],
    'title' => '评论',
    'author' => '作者',
    'responsed_to' => '回应',
    'permalink' => '永久链接',
    'url' => '网址',
    'submitted_on' => '提交于',
    'edit_comment' => '编辑评论',
    'reply' => '回复',
    'in_reply_to' => 'In reply to :name',
    'reply_modal' => [
        'title' => 'Reply to :comment',
        'cancel' => '取消',
    ],
    'allow_comments' => '允许评论',
    'front' => [
        'admin_badge' => '行政',
        'list' => [
            'title' => ':count comment|:count comments',
            'reply' => '回复',
            'reply_to' => 'Reply to :name',
            'cancel_reply' => '取消回复',
            'waiting_for_approval_message' => '您的评论正在等待审核。这是预览版，您的评论将在获得批准后可见。',
        ],
        'form' => [
            'title' => '发表评论',
            'description' => '您的电子邮件地址不会被公开。必填字段已标记为 *',
            'cookie_consent' => '在此浏览器中保存我的姓名、电子邮件和网站，以便下次发表评论时使用。',
            'submit' => '发表评论',
        ],
        'comment_success_message' => '您的评论已成功发送。',
    ],
    'enums' => [
        'statuses' => [
            'pending' => '待办的',
            'approved' => '得到正式认可的',
            'spam' => '垃圾邮件',
            'trash' => '垃圾',
        ],
    ],
    'settings' => [
        'title' => '离岸价评论',
        'description' => '配置 FOB 注释设置',
        'form' => [
            'enable_recaptcha' => '启用验证码',
            'enable_recaptcha_help' => 'You need to enable reCAPTCHA in :url to use this feature.',
            'captcha_setting_label' => '验证码设置',
            'comment_moderation' => '评论必须手动批准',
            'comment_moderation_help' => '所有评论在显示在前端之前都必须由管理员手动批准。',
            'show_comment_cookie_consent' => '显示评论 cookie 复选框，允许访问者在浏览器中保存他们的信息',
            'auto_fill_comment_form' => '自动填写登录用户的评论数据',
            'auto_fill_comment_form_help' => '如果用户登录，评论表单将自动填写用户数据，例如全名、电子邮件等。',
            'comment_order' => '评论排序依据',
            'comment_order_help' => '选择在列表中显示评论的首选顺序。',
            'comment_order_choices' => [
                'asc' => '最古老的',
                'desc' => '最新',
            ],
            'display_admin_badge' => '显示管理员徽章以获取管理员评论',
            'show_admin_role_name_for_admin_badge' => '显示管理员徽章的管理员角色名称',
            'show_admin_role_name_for_admin_badge_helper' => '如果启用，管理员徽章将显示管理员角色名称，而不是默认的“管理员”文本。如果管理员角色名称为空，则将使用默认文本。如果用户有多个角色，则将使用第一个角色。',
        ],
    ],
];
