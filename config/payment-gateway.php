<?php

return [
    'default' => env('PAYMENT_GATEWAY_DRIVER', 'mercadopago'),

    'gateways' => [

        'mercadopago' => [
            'access_token' => env('PG_MERCADOPAGO_ACCESS_TOKEN'),
            'public_key' => env('PG_MERCADOPAGO_PUBLIC_KEY'),
        ],

        'payu' => [
            'api_key' => env('PG_PAYU_API_KEY'),
            'api_login' => env('PG_PAYU_API_LOGIN'),
            'merchant_id' => env('PG_PAYU_MERCHANT_ID'),
            'lenguage' => 'es',
            'test' => env('PG_PAYU_TEST', true),
        ],
    ],
];