<?php

return [
    'enable' => env('EXCEPTION_NOTIFIER_ENABLE', false),
    'default' => 'feishu',
    'channels' => [
        'feishu' => [
            'webhook' => '',
        ]
    ]
];