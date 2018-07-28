<?php
require 'vendor/autoload.php'; // подключаем автоподгрузчик классов Composer

$client = new MongoDB\Client("mongodb://mongo:27017");

$collection = $client->blockban->chat;

$STATUS_NEW = 0;
$STATUS_READED = 1;

$sender = $_POST['sender'];
$receiver = $_POST['receiver'];
$message = $_POST['message'];

$result = $collection->insertOne(
    [
        'time' => time(),
        'sender' => $sender,
        'receiver' => $receiver,
        'message' => $message,
        'status' => $STATUS_NEW
    ]
);
