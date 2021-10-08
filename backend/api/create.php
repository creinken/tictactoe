<?php

    // headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-headers, Authorization, X-Requested-With");

    include_once '../config/database.php';
    include_once '../class/games.php';

    $database = new Database();
    $db = $database->getConnection();

    $item = new Game($db);

    $data = json_decode(file_get_contents("php://input"));

    $item->playerX = $data->playerX;
    $item->playerO = $data->playerO;
    $item->current_player = $data->current_player;
    $item->game_over = $data->game_over;

    if ($item->createGame()) {
        echo 'Game created successfully.';
    } else {
        echo 'Game could not be created.';
    }

?>