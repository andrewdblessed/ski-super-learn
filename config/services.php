<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => Skilearn\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
        'facebook' => [
    'client_id' => '1596614877325128',
    'client_secret' => '4a005589e810f3104dc55dc0fcc7e250',
    'redirect' => 'http://localhost:8000/callback',
    ],
     'google' => [
    'client_id' => '309967739002-7uupfil1cm573lc2lk4i8sqkmugrd4fu.apps.googleusercontent.com',
    'client_secret' => '3VitxgDToW3yKAS9ot735i-6',
    'redirect' => 'http://localhost:8000/gooback',
    ],


];
