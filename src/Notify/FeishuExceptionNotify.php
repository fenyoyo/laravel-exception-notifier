<?php

namespace Intop\Tools\Notify;

use Illuminate\Support\Facades\Http;

class FeishuExceptionNotify
{
    public static function send(\Throwable $exception)
    {
        $message = [
            'title' => config('app.name') . ' ' . config('app.url'),
            'content' => [
                [
                    [
                        'tag' => 'text',
                        'text' => $exception->getMessage()
                    ],
                ],
                [
                    [
                        'tag' => 'text',
                        'text' => "file: " . $exception->getFile()
                    ],
                ],
                [
                    [
                        'tag' => 'text',
                        'text' => "line: " . $exception->getLine()
                    ]
                ]
            ]
        ];

        $response = Http::post(config('exceptions.channels.feishu.webhook'), [
            'msg_type' => 'post',
            'content' => [
                'post' => [
                    'zh_cn' => $message
                ]
            ]
        ]);
    }
}
