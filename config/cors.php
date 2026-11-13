<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173', 'http://127.0.0.1:5173', 'https://benji-prog.github.io'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Fontos, hogy minden fejlécet engedjen
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // Ez kell az Axios-szal való együttműködéshez
];

