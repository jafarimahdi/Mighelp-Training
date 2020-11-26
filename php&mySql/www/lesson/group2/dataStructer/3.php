<?php
// ex2
$a = [1, 10, 76, 87];     // Global scope

function myName( array $a, int $s ) {
    $n = count( $a );    // size of array with int
    $res = []; 

    for ( $i = 0; $i < $n; $i++ ) {

        $b = $s - $a[$i];
        if ( isset( $res[$b] ) ) {
            return true;
        }
        $res[$b] = 1;
    }
    return false;
}

array_pop( $a ); 
$s = myName( $a, 86 );
$s = myName( $a, 97 );

//  --------------------

// function myName(array $a, int $e){
//     $b = count($a); 
//     $res =[];
//     for($i=0; $i < $n; $i++){
//         if($a[$i] > $e){
//             array_push($res, $e);
           
//         }
//         array_push($res,$a[$i]);
//     }
//     return $res;
//  }
 
//  $b=myName([1,4,5,8,10],6);
 
 
?>