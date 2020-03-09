<?php

return [
    'hostname' => 'https://webservice.tecalliance.services',
    'endpoint' => '/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint',

    'auth' => [
        'provider_id' => env('TECDOC_PROVIDER_ID'),
        'api_key' => env('TECDOC_API_KEY'),
        'language_code' => env('TECDOC_LANGUAGE_CODE'),
    ]
];