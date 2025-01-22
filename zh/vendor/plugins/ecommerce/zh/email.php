<?php

return [
    'name' => '电子商务',
    'description' => '配置电子商务的电子邮件模板',
    'welcome_title' => '欢迎',
    'welcome_description' => '当用户在我们的网站上注册账户时，发送电子邮件给他们',
    'welcome_subject' => '欢迎来到{{ site_title }}!',
    'customer_new_order_title' => '订单确认',
    'customer_new_order_description' => '当订单下达时，向客户发送电子邮件确认。',
    'order_cancellation_title' => '订单取消',
    'customer_order_cancellation_description' => '当客户取消订单时发送',
    'admin_order_cancellation_title' => '订单取消（由管理员）',
    'admin_order_cancellation_description' => '当管理员取消订单时发送给客户',
    'order_cancellation_to_admin_title' => '订单取消（将发送给管理员）',
    'order_cancellation_to_admin_description' => '当客户取消订单时发送给管理员',
    'order_cancellation_to_admin_subject' => '订单 :order_id 已被客户取消',
    'delivery_confirmation_title' => '交付确认',
    'delivery_confirmation_description' => '当订单配送时发送给客户',
    'order_delivered_title' => '订单已送达',
    'order_delivered_description' => '订单送达时发送给客户',
    'admin_new_order_title' => '关于新订单的通知',
    'admin_new_order_description' => '下单时发送给管理员',
    'order_confirmation_title' => '订单确认',
    'order_confirmation_description' => '当管理员确认他们的订单时发送给客户',
    'payment_confirmation_title' => '付款确认',
    'payment_confirmation_description' => '当客户的付款确认后发送给他们',
    'order_recover_title' => '未完成的订单',
    'order_recover_description' => '发送给客户以提醒他们未完成的订单',
    'view_order' => '查看订单',
    'link_go_to_our_shop' => '或 <a href=":link">前往我们的商店</a>',
    'order_number' => '订单编号：<strong>:order_id</strong>',
    'order_information' => '订单信息:',
    'order_return_request_title' => '订单退货请求',
    'order_return_request_description' => '发给客户当他们退货时',
    'confirm_email_title' => '确认电子邮件',
    'confirm_email_description' => '注册账户时向用户发送电子邮件以验证他们的电子邮件',
    'confirm_email_subject' => '确认您的电子邮件地址',
    'verify_link' => '验证电子邮件链接',
    'customer_name' => '客户姓名',
    'password_reminder_title' => '重置密码',
    'password_reminder_description' => '当用户请求重置密码时，发送电子邮件给他们',
    'password_reminder_subject' => '重置您的密码',
    'reset_link' => '重置密码链接',
    'customer_new_order_subject' => '新订单在{{ site_title }}',
    'customer_order_cancellation_subject' => '您的订单已被取消 {{ order_id }}',
    'admin_order_cancellation_subject' => '您的订单已被取消 {{ order_id }}',
    'delivery_confirmation_subject' => '您的订单正在配送 {{ order_id }}',
    'order_delivery_notes' => '订单交付说明',
    'order_delivered_subject' => '您的订单已送达 {{ order_id }}',
    'admin_new_order_subject' => '在{{ site_title }}的新订单',
    'order_confirmation_subject' => '您的订单已确认 {{ order_id }}',
    'payment_confirmation_subject' => '您的付款已确认 {{ order_id }}',
    'order_recover_subject' => '您在{{ site_title }}有未完成的订单。',
    'order_return_request_subject' => '您的订单退货请求 {{ order_id }}',
    'list_order_products' => '产品列表',
    'invoice_payment_created_title' => '发票付款已创建',
    'invoice_payment_created_description' => '当发票付款创建时发送给客户',
    'invoice_payment_created_subject' => '收到来自{{ customer_name }}的付款，来自{{ site_title }}',
    'invoice_code' => '发票代码',
    'invoice_link' => '发票链接',
    'review_products_title' => '审核产品',
    'review_products_description' => '在订单完成时向客户发送通知以审核产品',
    'review_products_subject' => '订单已完成，您现在可以查看产品。',
    'download_digital_products_title' => '下载数字产品',
    'download_digital_products_description' => '当客人购买时发送电子邮件数字产品下载',
    'download_digital_products_subject' => '下载您购买的数字产品',
    'digital_product_list' => '数字产品列表',
    'digital_products' => '数字产品',
    'customer_deletion_request_confirmation_title' => '账户删除确认',
    'customer_deletion_request_confirmation_description' => '当用户请求删除他们的账户时，发送确认电子邮件给他们',
    'customer_deletion_request_confirmation_subject' => '确认您的账户删除请求',
    'customer_deletion_request_completed_title' => '账户删除完成',
    'customer_deletion_request_completed_description' => '当用户的账户被删除时，发送电子邮件给他们',
    'customer_deletion_request_completed_subject' => '您的账户已被删除',
    'order_return_status_updated_title' => '订单退货请求状态已更新',
    'order_return_status_updated_description' => '当客户的订单退货请求状态更新时发送给客户',
    'order_return_status_updated_subject' => '您的订单退货请求 {{ order_id }} 状态已更改为 {{ status }}',
    'payment_proof_upload_notification_title' => '付款证明上传通知',
    'payment_proof_upload_notification_description' => '当客户上传付款证明时通知管理员',
    'payment_proof_upload_notification_subject' => '支付凭证由{{ customer_name }}上传，订单号{{ order_id }}',
    'product_file_updated_title' => '产品文件已更新',
    'product_file_updated_description' => '当产品文件更新时通知客户',
    'product_file_updated_subject' => '产品文件已更新，订单编号 {{ order_id }}',
];
