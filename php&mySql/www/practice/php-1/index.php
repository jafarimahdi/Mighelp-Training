<?php
echo "hello world from mahdi";
// variables => var.const.let ==> $ the only different each time call variables use the ' $ ' again.

$myName = 'mahdi';
$a = 3;
$b = 4.5;
$c = true;
$d = 'mahdi';
$e = 'jafari';
// console.log()  ==> 1-echo() just for string & HTML Tag || 2-print_r() for anything || make your function for output

// number $a+$b => 7.5   | string  $d.$e  => mahdijafari   ( for the string use the ' . ' to concoction )

// Array in Php in 2 way
echo "<br>";
$myArray = array( 1, 2, 3, 4, 5 );
print_r( $myArray );

echo "<br>";
$myArray2 = [2, 4, 'mahdi', 98];
print_r( $myArray2 );
echo "<br>";
echo ( $myArray2 );

function printArrayAsList( $something ) {
 echo "<ol>";
 foreach ( $something as $el ) {
  echo "<li>" . $el . "</li>";
 }
 echo "</ol>";
}
printArrayAsList( $myArray2 );

// other part

$array3 = [3, 4, 5, 7, 8, 9, 12, 11, 45];

function maxOfArray( $anyArray ) {
 $maxNumber = $anyArray[0];
 $m = count( $anyArray );

 for ( $x = 1; $x <= $m - 1; $x++ ) {
  if ( is_numeric( $anyArray[$x] ) ) {
   if ( $anyArray[$x] > $maxNumber ) {
    $maxNumber = $anyArray[$x];
   }
  }
 }
 return $maxNumber;
}
print_r( maxOfArray( $array3 ) );
?>