<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="domino-card.css">
    <title>Domino card</title>
</head>
<body>
<?php

function printDots( int $numberOfDots ) {
    for ( $i = 0; $i < $numberOfDots; $i++ ) {
        ?>
         <div class="dot"></div>
        <?php
}
}

function printDominoTile( int $first, int $second, string $direction = "horizontal" ) {
    ?>
        <div class="domino <?=$direction?>">
            <div class="one">
                <?php printDots( $first );?>
            </div>
            <div class="divider"></div>
            <div class="two">
                <?php printDots( $second );?>
            </div>
        </div>
    <?php
}

printDominoTile( 1, 3 );
printDominoTile( 2, 5 );
printDominoTile( 0, 6, "vertical" );
printDominoTile( 4, 3 );

?>
</body>
</html>