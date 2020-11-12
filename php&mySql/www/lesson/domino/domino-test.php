<?php

require_once("domino.php");




$d = new Domino(1,3);
$d->logDomino();
$d->swap();
$d->logDomino();