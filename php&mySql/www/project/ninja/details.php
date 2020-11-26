<?php

// check the get request id parameter
include 'config/db_connect.php';

// -1
if ( isset( $_GET['id'] ) ) {
    // -2 check the dataBase hae this id
    $id = mysqli_real_escape_string( $conn, $_GET['id'] );

    //-3 make sql select
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    //-4 get query result
    $result = mysqli_query( $conn, $sql );

    //-5 fetch result in array format
    $pizza = mysqli_fetch_assoc( $result );

    // -6 make it free
    mysqli_free_result( $result );
    mysqli_close( $conn );

    // print_r( $pizza );

}

?>
<!DOCTYPE html>
<html lang="en">

    <?php include 'template/header.php';?>
    <div class="container center">
        <?php if ( $pizza ): ?>
            <h4><?php echo htmlspecialchars( $pizza['title'] ); ?></h4>
            <p> Created By: <?php echo htmlspecialchars( $pizza['email'] ); ?></p>
            <p><?php echo date($pizza['created_at']); ?></p>
            <h5>Ingredients: </h5>
            <p><?php echo htmlspecialchars( $pizza['ingredients'] ); ?></p>
        <?php else: ?>
            <h5>No such pizza exists </h5>

        <?php endif;?>

    </div>

    <?php include 'template/footer.php';?>

</html>