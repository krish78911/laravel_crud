<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Allow api routes
    'allowed_methods' => ['*'], // Allow all HTTP methods
    'allowed_origins' => ['http://localhost:8100'], // Allow frontend domain
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];

