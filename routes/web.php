<?php declare(strict_types = 1);

return [
    [
        'GET',
        '/',
        'App\Http\Controllers\FrontPageController#show'
    ],
    [
        'GET',
        '/submit',
        'App\Http\Controllers\SubmissionController#show'
    ]
];