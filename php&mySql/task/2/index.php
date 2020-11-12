<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>domino</title>
  </head>
  <body>
    <div class="container">
      <!-- play Ground  -->

      <div id="box1"></div>
      <hr />
      <div id="box2"></div>
    </div>

    <!-- add the domino numbers  -->

    <!-- 1  -->
    <div class="domino" id="one"    >
      <div class="dot"></div>
    </div>
    <br />
    <!-- 2  -->
    <div class="domino" id="two">
      <div class="dot" id="two-1"></div>
      <div class="dot" id="two-2"></div>
    </div>
    <br />
    <!-- 3  -->
    <div class="domino" id="tree">
      <div class="dot" id="tree-1"></div>
      <div class="dot" id="tree-2"></div>
      <div class="dot" id="tree-3"></div>
    </div>
    <br />
    <!-- 4  -->
    <div class="domino" id="four">
      <div class="dot" id="four-1"></div>
      <div class="dot" id="four-2"></div>
      <div class="dot" id="four-3"></div>
      <div class="dot" id="four-4"></div>
    </div>
    <br />
    <!-- 5  -->
    <div class="domino" id="five">
      <div class="dot" id="five-1"></div>
      <div class="dot" id="five-2"></div>
      <div class="dot" id="five-3"></div>
      <div class="dot" id="five-4"></div>
      <div class="dot" id="five-5"></div>
    </div>
    <br />
    <!-- 6  -->
    <div class="domino" id="six">
      <div>
        <div class="dot" id="six-1"></div>
        <div class="dot" id="six-2"></div>
        <div class="dot" id="six-3"></div>
      </div>
      <div>
        <div class="dot" id="six-4"></div>
        <div class="dot" id="six-5"></div>
        <div class="dot" id="six-6"></div>
      </div>
    </div>
<?php

function printDots( int $numberOfDots ) {
 for ( $i = 0; $i < $numberOfDots; $i++ ) {
  ?>
      <div class="dot"></div>
  <?php
}
}
function printDots2( int $first, int $second ) {
 ?>
    <div class=""></div>
  <?php
}
?>
</body>
</html>
