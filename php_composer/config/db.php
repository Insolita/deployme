<?php

use yii\db\Connection as MysqlConnection;
use yii\redis\Connection as RedisConnection;

return [
    'db' => [
        'class' => MysqlConnection::class,
        'dsn' => getenv('DB_DSN'),
        'username' => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
        'charset' => 'utf8',
    ],
    'redis'=>[
        'class'=> RedisConnection::class,
        'database' => 0,
        'hostname' => getenv('REDIS_HOST'),
        'password' => getenv('REDIS_PASSWORD'),
        'port' => getenv('REDIS_PORT'),
    ]
];
