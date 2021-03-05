<?php

return[
    'CASH_DOMAIN'     =>  env('CASH_DOMAIN','pay.roskassa.net'),
    'CASH_PUBLIC_KEY' =>  env('CASH_PUBLIC_KEY',''),
    'CASH_SECRET_KEY' =>  env('CASH_SECRET_KEY',''),
    'locale'          =>  'ru',  // ru || en
    'searchOrderFilter' => null, //  'App\Http\Controllers\ExampleController::searchOrderFilter'
    'paidOrderFilter' => null, //  'App\Http\Controllers\ExampleController::paidOrderFilter'
    'allowed_ips' => [
        
    ],
    
    /*
        * Уведомление, которое будет отправлено при получении запроса на оплату.
        */

    'notification' => \ActionM\UnitPay\UnitPayNotification::class,
    
    /*
    *Уведомляемый объект, которому будет отправлено уведомление. По умолчанию
    *notifiable будет использовать указанную конфигурацию почты и резервной копии
    *в этом файле конфигурации.
    */

    'notifiable' => \ActionM\UnitPay\UnitPayNotifiable::class,  

    /*
    *По умолчанию уведомления отправляются всегда. Вы можете передать вызываемый объект для фильтрации
    *из определенных уведомлений. Данный вызываемый объект получит уведомление. Если вызываемый
    *вернуть false, уведомление не будет отправлено.
    */

    'notificationFilter' => null,

    /*
    *Каналы, на которые будет отправлено уведомление.
    */
    'channels' => ['mail', 'slack'],

    'mail' => [
        'to' => '',  // your email
    ],

    'slack' => [
        'webhook_url' => '', // slack web hook to send notifications
    ],
];
