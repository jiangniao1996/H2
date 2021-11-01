<?php

declare(strict_types=1);


return [

    'mini_program' => [

        'user' => [
            'app_id'  => env('WECHAT_MINI_USER_APPID', ''),
            'secret'  => env('WECHAT_MINI_USER_SECRET', ''),
            'token'   => env('WECHAT_MINI_PROGRAM_TOKEN', ''),
            'aes_key' => env('WECHAT_MINI_PROGRAM_AES_KEY', ''),
        ],

        'coach' => [
            'app_id'  => env('WECHAT_MINI_COACH_APPID', ''),
            'secret'  => env('WECHAT_MINI_COACH_SECRET', ''),
            'token'   => env('WECHAT_MINI_PROGRAM_TOKEN', ''),
            'aes_key' => env('WECHAT_MINI_PROGRAM_AES_KEY', ''),
        ],

    ]


];
