<?php
    class Moves{
        
        // Connection
        private $conn;

        // Table
        private $db_table = 'Moves';

        // Columns
        public $id;
        public $squareX;
        public $squareY;
        public $player;
        public $game_id;
        public $made_at;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getMoves(){
            $sqlQuery = "SELECT id, squareX, squareY, player, game_id, made_at FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // GET ALL MATCHING GAME ID
        public function getMovesMatchingGame(int $game_id){
            $sqlQuery = "SELECT 
                        id,
                        squareX,
                        squareY,
                        player,
                        game_id,
                        made_at 
                      FROM
                        " . $this->db_table . "
                      WHERE
                        game_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $game_id);
            $stmt->execute();
            $movesArr = array();
            $movesArr["body"] = array();
            $movesArr["itemCount"] = $itemCount;

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                $e = array(
                    "id" => $id,
                    "squareX" => $squareX,
                    "squareY" => $squareY,
                    "player" => $player,
                    "made_at" => $made_at
                );

                array_push($movesArr["body"], $e);
            }

            return $movesArr["body"];
        }

        // CREATE
        public function createMove(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        squareX = :squareX,
                        squareY = :squareY,
                        player = :player,
                        game_id = :game_id,
                        made_at = :made_at";
            
            $stmt = $this->conn->prepare($sqlQuery);

            // sanitize
            $this->squareX=htmlspecialchars(strip_tags($this->squareX));
            $this->squareY=htmlspecialchars(strip_tags($this->squareY));
            $this->player=htmlspecialchars(strip_tags($this->player));
            $this->game_id=htmlspecialchars(strip_tags($this->game_id));
            $this->made_at=htmlspecialchars(strip_tags($this->made_at));

            // bind data
            $stmt->bindParam(":squareX", $this->squareX);
            $stmt->bindParam(":squareY", $this->squareY);
            $stmt->bindParam(":player", $this->player);
            $stmt->bindParam(":game_id", $this->game_id);
            $stmt->bindParam(":made_at", $this->made_at);

            if($stmt->execute()){
                return true;
            }
            return false;
        }

        // READ single
        public function getSingleMove(){
            $sqlQuery = "SELECT
                        id,
                        squareX,
                        squareY,
                        player,
                        game_id,
                        made_at
                      FROM
                        ". $this->db_table ."
                    WHERE
                        id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->squareX = $dataRow['squareX'];
            $this->squareY = $dataRow['squareY'];
            $this->player = $dataRow['player'];
            $this->game_id = $dataRow['game_id'];
            $this->made_at = $dataRow['made_at'];
        }

        // UPDATE
        // not needed

        // DELETE
        // probably not needed but here just incase
        function deleteMove(){
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