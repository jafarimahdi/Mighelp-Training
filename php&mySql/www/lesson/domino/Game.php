<?php 

    require_once "User.php";
    require_once "TileSet.php";

    class Game{

        public $deck;
        public User $users;

        public function __construct(int $users= 2){

            $deck->generateSetOfTiles(7);
            $deck->shuffleSetOfTiles(4);

            for($i=0;$i <count($this->users); $i++ ){
                $this->users[$i]->getOntTiles($this->deckTiles, 7);
            }
        }

    }

        
?>