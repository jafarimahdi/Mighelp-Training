<?php

require_once "domino-tile.php";



class TileSet{
    public $tileArray = [];

    public function addTile(DominoTile $d){
        array_push($this->tileArray, $d);

    }

    public function generateSetOfTiles(int $n){

    }

}



?>