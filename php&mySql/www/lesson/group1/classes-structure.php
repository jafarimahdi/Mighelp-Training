<?php
class Debug {
    public function printTile(Tile $tile){}
    public function printTileSet(TileSet $tileSet){}
}

class Tile(){
    public array $tile =[];
    public function __construct(int $first, int $second){}
    
    public swap(){};
    //$leftOrRight = true is comaper left, $leftOrRight = false  is compare right
    public compare(Tile $anotheTile, boolean $leftOrRight = true){}    
}
    
class TileSet{
    public array $tiles=[];
    public function push(Tile $newTile, boolean $startOrEnd = true){};
    // why we would like to write our oun push function? we can use standard function for arrays...

    // next function should return one tile or null, if $i=-1 we should return the last tile. 
    // returned tile should be deleted from the $data
    // function return null if index out of range
    public function getTileFrom(int $i = -1): Tile {}
    public function getCount(){}
    
}

class Deck extends TileSet{
    public function __construct(int $n = 0, int $numOfShuffle = 5){
        // generete Tiles if $n>0
        // and shuffle 
    }
    public function generateTiles(int $n){}
    public function shuffleTiles(int $numOfShuffle = 5){}
    public function getOneTile(): Tile{ return $this->getTileFrom(-1);}
    

    
}

class Table extends TileSet{
    public function checkIfTileCanBePutToTable(Tile $tile):boolean{}
    public function putTileToTheTable(Tile $tile, boolean $leftOrRight = true): boolean{}
}



class Hand extends TileSet{
    public function getTileFromDeck(Deck $deck){}
    public function findTiles(Table $table): array{}
    public function chooseTile(array $tiles):Tile{}
    public function putTileToTheTable(Table $table):boolean{}


}

class Player extends Hand{
    public string $name = "";
    public boolean $mainPlayer = false;
    public function __construct(string $name, boolean $mainPlayer = false){}
    public function isWinner(Deck $deck):boolean{}
    public function makeStep(Table $table, Deck $deck):boolean{};
    
}

class Game {
    public Deck $deck;
    public array $players;
    public Table $table;
    public View $view;
    public function __construct(){}
    public function gameLoop(){}

}

class View{
    public function getTileHTML(Tile $tile, string $direction="vertical", int $width = 500, int $height = 250){}
    public function getHandHTML( Hand $hand, bollean $isMainPlayer){}
    public function getTableHTML(Table $table){}
}

?>