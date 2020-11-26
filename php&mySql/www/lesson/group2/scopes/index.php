<?php
// scope
// 1- Global
//  2- Functional

function myFunc( array $arr, int $d ) {
    $n = count( $arr );
    for ( $i = 0; $i < $n - $d; $i++ ) {
        if ( $arr[$i] == $arr[$i + $d + 1] ) {
            return true;
        }
    }
    return false;
}

$m = [1, 2, 3, 51, "some", 2, 76, "some"];

$c = myFunc( $m, 2 );
$c = myFunc( $m, 4 );
$c = myFunc( $m, 1 );

?>