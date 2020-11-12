<?php
require_once "Domino-tile.php";

class TileSet {
 public $tileArray = [];

 public function addTile( DominoTile $d ) {
  array_push( $this->tileArray, $d );
 }

 public function generatorSetOfTiles( int $n ) {
  for ( $i = 0; $i < $n; $i++ ) {
   for ( $j = 0; $j < $n; $j++ ) {
    $t = new DominoTile( $i, $j );
    $this->addTile( $t );
   }
  }
 }

 public function shuffleSetOfTiles( int $noTime ) {
  for ( $i = 0; $i < $noTime; $i++ ) {
   shuffle( $this->tileArray );
  }
 }

}?>
