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

    $item->id = isset($_GET['id']) ? $_GET['id'] : die();

    $item->getSingleGame();

    if ($item->playerX != null) {
        // create array
        $game_arr = array(
            "id" => $item->id,
            "playerX" => $item->playerX,
            "playerO" => $item->playerO,
            "current_player" => $item->current_player,
            "game_over" => $item->game_over
        );

        http_response_code(200);
        echo json_encode($game_arr);
    }

    else {
        http_response_code(404);
        echo json_encode("Game not found.");
    }

?>