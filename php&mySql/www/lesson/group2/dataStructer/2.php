<?php

// 1- Create any array and add new element in the middle of array

function addInMiddle( array $array, $x ) {
    $findMiddle = round( count( $array ) / 2 );
    // use index to add new x
    array_splice( $array, $findMiddle, 0, $x );

    return $array;
}
$myArray = [2, 1, 3, 4, 56, 7, 9];

print_r( addInMiddle( $myArray, 3 ) );

echo ( '<br><br>' );

// 2- Create a function that takes array and return a new array that has only elements that are  numbers
function checkNumber( array $myArray ) {
    $newArray = [];

    foreach ( $myArray as $x ) {
        if ( is_int( $x ) ) {
            array_push( $newArray, $x );
        }
    }
    return $newArray;
}
$checkArray = [1, 3, 4, 'test', false, '23', 7];
print_r( checkNumber( $checkArray ) );

echo ( '<br><br>' );

// 3- Create Associative array: shopping card, that has a name of the x and quantity.

$shopping = array( 'fruits' => 3, 'rice' => 1, 'vegetable' => 3, 'meat' => 2 );

// 4- Write a function that print associative array
function printArray( array $myArray ) {
    foreach ( $myArray as $key => $value ) {
        echo " $key : $value <br>";
    }
}
printArray( $shopping );
echo ( '<br><br>' );

// 5- Write a function that search element in associative array by key
function findByKey( array $myArray, $myKey ) {

    $result = isset( $myArray[$myKey] ) ? "value of the $myKey is " . $myArray[$myKey] : 'this key is not exist';
    return $result;

    echo ( '<br><br>' ); // second way

    $result2 = array_key_exists( $myKey, $myArray ) ? "the value of $myKey is " . $myArray[$myKey] : " this $myKey not exists in this array";
    return $result2;
}

echo ( findByKey( $shopping, 'fruits' ) );

echo ( '<br><br>' );

// 6- Similar function but that search by value

function findByValue( array $myArray, $myValue ) {

    $result = array_keys( $myArray, $myValue );
    return $result;
}
print_r( findByValue( $shopping, 2 ) );

echo ( '<br><br>' );

// 7- Create multidimensional array matrix 5x6. Write a function that calculate max element

$matrixArray = [
    [2, 3, 4, 1, 8, 9],
    [4, 5, 6, 76, 43, 23],
    [27, 199, 6, 5, 4, 6],
    [97, 56, 3, 56, 78, 1],
    [90, 34, 23, 11, 76, 98],
];

function findTheMax( array $myArray ): int {

    $maxVariable = $myArray[0][0];

    for ( $i = 0; $i < count( $myArray ); $i++ ) {

        for ( $j = 0; $j < count( $myArray[$i] ); $j++ ) {

            if ( $myArray[$i][$j] > $maxVariable ) {
                $maxVariable = $myArray[$i][$j];
            }
        }
    }
    return $maxVariable;
}

echo ( findTheMax( $matrixArray ) );
echo ( '<br><br>' );

// 8- Create a function that search prime numbers in given matrix

function findPrimeNumber( array $myArray ) {

    function primeCheck( $number ): bool {

        for ( $i = 2; $i < $number; $i++ ) {
            if ( $number % $i == 0 ) {
                return false;
            }
        }
        return true;
    }

    // loop part
    $result = [];
    for ( $i = 0; $i < count( $myArray ); $i++ ) {

        for ( $j = 0; $j < count( $myArray[$i] ); $j++ ) {

            $myVariable = $myArray[$i][$j];

            $flag = primeCheck( $myVariable );
            if ( $flag ) {
                // echo "Prime , ";
                array_push( $result, $myVariable );
            }
        }
    }

    return $result;

}
print_r( findPrimeNumber( $matrixArray ) );

?>