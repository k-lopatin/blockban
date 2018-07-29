<?php
require 'vendor/autoload.php'; // подключаем автоподгрузчик классов Composer

$client = new MongoDB\Client("mongodb://mongo:27017");

$collection = $client->blockban->users;

$result = $collection->insertOne(
    [ 'id' => 1, 'name' => 'kolya', 'surname' => 'test', 'eosname' => 'kolya' ],
    [ 'id' => 2, 'name' => 'andrey', 'surname' => 'test', 'eosname' => 'andrey' ]
);

echo $result;

// $method = 

$result = $collection->insertOne(
    [
        'time' => time(),
        'sender' => 1,
        'receiver' => 2,
        'message' => 'Hi',
        'status' => $STATUS_NEW
    ]
);
