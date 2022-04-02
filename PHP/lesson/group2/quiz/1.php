<?php

// 1- Write a function that returns sum of 2 numbers
function sumOfInt( $first, $second ) {
    echo ( $first + $second );
}
sumOfInt( 3, 6 );
echo '<br> <br>';

// 2- Write a function that return biggest from 2 numbers
function biggest( $first, $second ) {
    $result = ( $first > $second ) ? $first : $second;

    echo ( $result );
}
biggest( 3, 6 );
echo '<br> <br>';

// 3- Write a function that return middle element of array
$someArray = [3, 5, 6, 9, 1, 11, 5, 3, 99, 5, 33];

function findElement( $myArray ) {
    $middle = round( count( $myArray ) / 2 ) - 1;
    echo $myArray[$middle];
}
findElement( $someArray );
echo '<br> <br>';

//4- Write a function that return true  if the first string starts with the second string
function checkWord( string $first, string $second ): bool {

    $firstWord = strstr( $first, ' ', true );
    $secondWord = strstr( $second, ' ', true );

    $result = $firstWord == $secondWord ? true : false;
    return $result;
}

if ( checkWord( 'hello ', 'hello world' ) ) {
    echo 'true';
} else {
    echo 'false';
}

echo '<br> <br>';
echo '<br> <br>';

// 5-Write a function that returns sum of array if all elements are odd and -1 if it has even elements
function sumOddElements( array $myArray ) {
    $result = 0;
    foreach ( $myArray as $item ) {

        if (  ( $item % 2 ) == 0 ) {
            return -1;
        } else {
            $result += $item;
        }
    }
    return $result;
}
print_r( sumOddElements( $someArray ) );
echo '<br> <br>';
echo '<br> <br>';

// 6-write a function that returns true array has sorted elements
$secondArray = [1, 2, 3, 4, 5, 6];

function checkIfGrow( array $myArray1 ): bool {

    $myArray2 = $myArray1;
    sort( $myArray1 );

    $result = ( $myArray2 === $myArray1 ) ? true : false;
    return $result;
}

if ( checkIfGrow( $secondArray ) ) {
    echo 'growing';
} else {
    echo 'not growing';
}

echo '<br> <br>';
echo '<br> <br>';

// 7-Write a function that return nth fibonacci element
function fib( $n ) {
    if ( $n <= 1 ) {
        return $n;
    }
    return fib( $n - 1 ) + fib( $n - 2 );
}

for ( $i = 0; $i < count( $secondArray ); $i++ ) {

    $result = $secondArray[$i];

    echo fib( $result );
    echo '<br>';
}
echo '<br> <br>';

//8- Write a function that return true if elements in array  in arithmetic progression

function checkIsAP( array $arr ) {
    $n = count( $arr );

    if ( $n <= 1 ) {
        return true;
    }

    $d = $arr[1] - $arr[0];
    for ( $i = 2; $i < $n; $i++ ) {
        if ( $arr[$i] - $arr[$i - 1] != $d ) {
            return false;
        }
    }
    return true;
}
// Driver Code
$arr = array( 20, 15, 10, 5, 0 );

if ( checkIsAP( $arr ) ) {
    echo "Yes";
} else {
    echo "No";
}
echo '<br> <br>';

$arr2 = array( 0, 10, 20, 30 );

if ( checkIsAP( $arr2 ) ) {
    echo "Yes";
} else {
    echo "No";
}

?>