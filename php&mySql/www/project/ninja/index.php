<?php
include ('config/db_connect.php');

// write query for SELECT data from our TABLE
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// make query & get result
$result = mysqli_query( $conn, $sql );

// fetch the resulting rows as an array
$pizzas = mysqli_fetch_all( $result, MYSQLI_ASSOC );


// free result from memory  *- good practice -*
mysqli_free_result( $result );

// close connection
mysqli_close( $conn );

?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'template/header.php';?>

    <h4 class="center gray-text">Pizzas!</h4>

    <div class="container">
        <div class="row">

            <?php foreach ( $pizzas as $pizza ){ ?>

                <div class="col s6 m4">
                    <div class="card z-depth-0">
                        <div class="card-content center">

                            <h6> <?php echo htmlspecialchars( $pizza['title'] ); ?> </h6>

                            <ul class="grey-text">
                                <?php foreach ( explode( ',', $pizza['ingredients'] ) as $ing ) { ?>
                                    <li> <?php echo htmlspecialchars( $ing ); ?> </li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                             <a href="details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">More Info</a>
                        </div>
                    </div>
               </div>
             <?php }?>
        </div>
    </div>


    <?php include 'template/footer.php';?>


</html>



