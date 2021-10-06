<?php
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initialize api
include_once('../core/initialize.php');

//instantiate games

$game = new Games($db);

//get games
$result = $game->read();
//get row count
$num = $result->rowCount();

if($num > 0){
    $game_arr = array();
    $game_arr['data'] = array();
}else{

}

?>