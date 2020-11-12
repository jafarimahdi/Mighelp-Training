<?php

require_once "user.php";

$newUser = new User( 'migHelp', 'human' );
$user2 = new User( 'mohammad', 'human' );

var_dump_pre( $newUser );
var_dump_pre( $user2 );
?>