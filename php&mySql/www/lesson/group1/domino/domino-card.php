<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domino card</title>
    <link rel="stylesheet" href="./domino-card.css">
</head>
<body>
    <script> document.writeln("<h1> Something</h1"); </script>
  <!--  <div class="domino vertical">
        <div class="one">
            
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            
        </div>
        <div class="divider"></div>
        <div class="two">
            
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            
        </div>
    </div>
    <br>
    <div class="domino horizontal">
        <div class="one">
            
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            
        </div>
        <div class="divider"></div>
        <div class="two">
            
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            
        </div>
    </div>
    <div class="domino horizontal">
        <div class="one">
            
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            
            
        </div>
        <div class="divider"></div>
        <div class="two">
            
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            
        </div>
    </div>
    <div class="domino horizontal">
        <div class="one">
            
            <div class="dot"></div>
            <div class="dot"></div>
            
            
        </div>
        <div class="divider"></div>
        <div class="two">
            
            <div class="dot"></div>
            
            
        </div>
    </div>
-->
<?php 



function printDots(int $numberOfDots)
{
    for($i=0;$i<$numberOfDots;$i++){
        
         echo '<div class="dot"></div>';
        

        
    }

}

function printDominoTile(int $first, int $second, string $direction = "horizontal"){
    ?> 
        <div class="domino <?= $direction ?>">
            <div class="one">
                <?php printDots($first); ?>  
            </div>
            <div class="divider"></div>
            <div class="two">
                <?php printDots($second); ?>    
            </div>
        </div>
    <?php
}
printDominoTile(1,3);
printDominoTile(2,5);
printDominoTile(0,6,"vertical");
printDominoTile(4,3);

?>
</body>
</html>