<?php
echo "<h1>Hello word</h1>";
// variables
$a = "kjhkjhkj";
$b = 3;

$c = 3.5;
$a = 4;
$b = 90;
$b = $b + $c;
echo "<br>" . $b;
$s = "My name is ";
$s1 = "Andrey";

$s3 = $s . $s1;

echo "<br>" . $s3;

$myarray = array( 1, 2, 3, 4, 5 );

$a = [1, "khkjhkj", 4, 8, "dsses"];

function myprint( $a ) {
 echo "<br>";
 print_r( $a );
}
myprint( $a );
myprint( $myarray );
myprint( $s3 );

function print_array_as_list( array $some_array ) {
 ?>
         <ol>
        <?php
foreach ( $some_array as $el ) {
  ?>
        <li> <?php echo $el; ?> </li>
<?php
}
 ?>
         </ol>
 <?php

}
print_array_as_list( $a );

?>