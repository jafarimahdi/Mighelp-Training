<?php

// 1- Write a program where create variables of all primitive types and print their type using build-in function gettype

function typeOfIt( $item ) {
    print_r( gettype( $item ) );
}
typeOfIt( 2 );
echo ( '<br><br>' );

// 2- Write a program where create array of the strings. Concatenate all elements of array in one value
$myArray = ['hello', 'world', 'welcome', 'mahdi'];

function concatArray( $myArray ) {
    $newItem = '';
    foreach ( $myArray as $item ) {
        $newItem = $newItem . $item . ' ';
    }
    echo $newItem;
}
concatArray( $myArray );
echo ( '<br><br>' );

// 3- Create a numeric array. Write a function that return the sum elements of given array.
$numericArray = [1, 3, 4, 5, 6, 7, 8, 6, 9, 4, 4, 4, 5, 6];

function sumElements( $myArray ) {
    $result = 0;

    foreach ( $myArray as $item ) {
        $result += $item;
    }
    echo $result;
}
sumElements( $numericArray );
echo ( '<br><br>' );
// 4- Modify the sum function that it returns only sum of odd or even numbers in array

function sumOdd( $myArray ) {
    $result = 0;

    foreach ( $myArray as $item ) {
        if ( !( $item % 2 ) == 0 ) {
            echo $item;
            $result += $item;
        }
    }
    echo ( '  :   ' );
    echo $result;
}
sumOdd( $numericArray );
echo ( '<br><br>' );

// 5- Write a function that check if the given string a palindrome

function isPalindrome( $myText ) {
    $reverse = strrev( $myText );
    ( $reverse === $myText ) ? print_r( 'is palindrome ' ) : print_r( 'is not palindrome' );
}
isPalindrome( 'madam' );
?>