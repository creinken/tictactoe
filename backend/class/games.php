<?php

    class Games{
        //db stuff
        private $conn;
        private $table = 'games';

        //games properties
        public $id;
        public $playerX;
        public $playerO;
        public $current_player;
        public $game_over;

        //constructor with db connection
        public function __construct($db){
            $this->conn = $db;
        }

        //getting games from the database
        public function read(){
            //create query
            $query = 'SELECT
                g.id,
                g.X as playerX,
                g.O as playerY,
                g.current_player,
                g.game_over
                FROM
                '.$this->table . ' g
            ';

            //prepare statement
            $stmt = $this->conn->prepare($query);
            //execute query
            $stmt->execute();
        }
    }

?>