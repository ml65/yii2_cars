<?php
// Настройка базы данных
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=mysql;dbname=cars',
    'username' => 'cars',
    'password' => 'cars2021',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
