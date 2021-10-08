<?php

    // Headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once '../config/database.php';
    include_once '../class/games.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new Game($db);

    $stmt = $items->getGames();
    $itemCount = $stmt->rowCount();

    echo json_encode($itemCount);

    if($itemCount > 0){

        $gameArr = array();
        $gameArr["body"] = array();
        $gameArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $e = array(
                "id" => $id,
                "playerX" => $playerX,
                "playerO" => $playerO,
                "current_player" => $current_player,
                "game_over" => $game_over
            );

            array_push($gameArr["body"], $e);
        }
        echo json_encode($gameArr);
    }

    else{
        http_response_code(404);
        echo json_encode(
            array("message" => "No record found.")
        );
    }

?>