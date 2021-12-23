<?php

return [
    'database' => [
        'dbname' => 'todos',
        'username' => 'root',
        'password' => 'root',
        'connection' => 'mysql:host=localhost',
        'exception' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]

    ]
];
