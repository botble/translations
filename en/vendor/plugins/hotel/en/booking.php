<?php

return [
    'name' => 'Bookings',
    'create' => 'New booking',
    'edit' => 'Edit booking',
    'statuses' => [
        'pending' => 'Pending',
        'processing' => 'Processing',
        'completed' => 'Completed',
        'cancelled' => 'Cancelled',
    ],
    'amount' => 'Amount',
    'customer' => 'Customer',
    'room' => 'Room',
    'booking_information' => 'Booking Information',
    'time' => 'Time',
    'full_name' => 'Full Name',
    'email' => 'Email',
    'phone' => 'Phone',
    'address' => 'Address',
    'arrival_time' => 'Arrival Time',
    'start_date' => 'Start Date',
    'end_date' => 'End Date',
    'settings' => [
        'email' => [
            'title' => 'Booking',
            'description' => 'Booking email configuration',
            'templates' => [
                'notice_title' => 'Send notice to administrator',
                'notice_description' => 'Email template to send notice to administrator when system get new booking',
                'booking_success_title' => 'Send email to guest',
                'booking_success_description' => 'Email template to send email to guest to confirm booking',
            ],
        ],
    ],
    'new_booking_notice' => 'You have <span class="bold">:count</span> new booking(s)',
    'view_all' => 'View all',
    'payment_method' => 'Payment method',
    'payment_status_label' => 'Payment status',
    'booking_period' => 'Booking period',
];
