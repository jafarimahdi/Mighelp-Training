<?php

// connect to dataBase
$conn = mysqli_connect( 'localhost', 'mahdi', 'Mahdi-1366', 'ninja_pizza' );

// check the connection
if ( !$conn ) {
    echo 'connection error:' . mysqli_connect_error();
}

?>