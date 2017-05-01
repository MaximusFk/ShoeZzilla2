<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME,
    'username' => DB_USER,
    'password' => DB_PASS,
    'charset' => 'utf8',
];

