<?php
require_once "tile-set.php";
require_once "domino-tile.php";

$d1 = new DominoTile(0,1);
$d2 = new DominoTile(2,3);
$ts = new TileSet;
$ts->addTile($d1);
$ts->addTile($d2);

var_dump_pre($ts);

?>