<?php
    class Game{
        
        // Connection
        private $conn;

        // Table
        private $db_table = 'Game';

        // Columns
        public $id;
        public $playerX;
        public $playerO;
        public $current_player;
        public $game_over;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getGames(){
            $sqlQuery = "SELECT id, playerX, playerO, current_player, game_over FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createGame(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        playerX = :playerX,
                        playerO = :playerO,
                        current_player = :playerX,
                        game_over = false";
            
            $stmt = $this->conn->prepare($sqlQuery);

            // sanitize
            $this->playerX=htmlspecialchars(strip_tags($this->playerX));
            $this->playerO=htmlspecialchars(strip_tags($this->playerO));
            $this->current_player=htmlspecialchars(strip_tags($this->current_player));

            // bind data
            $stmt->bindParam(":playerX", $this->playerX);
            $stmt->bindParam(":playerO", $this->playerO);

            if($stmt->execute()){
                return true;
            }
            return false;
        }

        // READ single
        public function getSingleGame(){
            $sqlQuery = "SELECT
                        id,
                        playerX,
                        playerO,
                        current_player,
                        game_over
                      FROM
                        ". $this->db_table ."
                    WHERE
                        id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->playerX = $dataRow['playerX'];
            $this->playerO = $dataRow['playerO'];
            $this->current_player = $dataRow['current_player'];
            $this->game_over = $dataRow['game_over'];
        }

        // UPDATE
        public function updateGame(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        playerX = :playerX,
                        playerO = :playerO,
                        current_player = :current_player,
                        game_over = :game_over
                    WHERE
                        id = :id";
            
            $stmt = $this->conn->prepare($sqlQuery);

            // sanitize
            $this->playerX=htmlspecialchars(strip_tags($this->playerX));
            $this->playerO=htmlspecialchars(strip_tags($this->playerO));
            $this->current_player=htmlspecialchars(strip_tags($this->current_player));
            $this->game_over=htmlspecialchars(strip_tags($this->game_over));

            // bind data
            $stmt->bindParam(":playerX", $this->playerX);
            $stmt->bindParam(":playerO", $this->playerO);
            $stmt->bindParam(":current_player", $this->current_player);
            $stmt->bindParam(":game_over", $this->game_over);
            $stmt->bindParam(":id", $this->id);

            if($stmt->execute()){
                return true;
            }
            return false;
        }

        // DELETE
        function deleteGame(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);

            $this->id=htmlspecialchars(strip_tags($this->id));

            $stmt->bindParam(1, $this->id);

            if($stmt->execute()){
                return true;
            }
            return false;
        }
        
    }

?>