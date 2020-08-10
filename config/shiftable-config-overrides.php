<?php

return [
    'app' => [
        'aliases' => [
            'Carbon' => 'Illuminate\\Support\\Carbon',
            'SurveyResponses' => 'App\\Support\\SurveyResponses',
        ],
    ],
    'mail' => [
        'mailers' => [
            'mailgun' => [
                'transport' => 'mailgun',
            ],
            'postmark' => [
                'transport' => 'postmark',
            ],
        ],
    ],
    'view' => [
        'expires' => null,
    ],
];
