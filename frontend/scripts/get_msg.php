<?php
require 'vendor/autoload.php'; // подключаем автоподгрузчик классов Composer

$client = new MongoDB\Client("mongodb://mongo:27017");

$collection = $client->blockban->chat;

$STATUS_NEW = 0;
$STATUS_READED = 1;

$receiver = isset($_GET['receiver']) ? $_GET['receiver'] : '';
$sender = isset($_GET['sender']) ? $_GET['sender'] : '';

$result = $collection->find(
    [
        '$or' => [
                [
                    'receiver' => $receiver,
                    'sender' => $sender
                ],
                [
                    'receiver' => $sender,
                    'sender' => $receiver
                ]
        ]
    ]
);
$js_res = [];
foreach ($result as $entry) {
    $js_res[] = $entry;
    // echo json_encode($entry);
    // print_r($entry->message);
}

echo json_encode($js_res);
