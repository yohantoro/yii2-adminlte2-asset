<?php

return [
    'defaultRoute' => 'test',
    'aliases' => [
        'repo' => '/repo',
        'tests/app' => '@repo/tests/_app',
        'dmstr' => '/repo',
        '@yohantoro/adminlte2/web' => '/repo/web',
        '@yohantoro/adminlte2/widgets' => '/repo/widgets',
        '@yohantoro/adminlte2/helpers' => '/repo/helpers',
    ],
    'controllerNamespace' => 'tests\app\controllers',
    'components' => [
        'urlManager' => [
            'rules' => [
                'param/<id>' => 'sub/action/param'
            ]
        ]
    ]
];