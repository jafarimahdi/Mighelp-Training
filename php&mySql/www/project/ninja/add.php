<?php
include 'config/db_connect.php';

 $email = $title = $ingredients = '';
$errors = array( 'email' => '', 'title' => '', 'ingredients' => '' );

if ( isset( $_POST['submit'] ) ) {

    // check email
    if ( empty( $_POST['email'] ) ) {
        $errors['email'] = 'An Email is required <br />';
    } else {
        $email = $_POST['email'];
        if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $errors['email'] = 'email must be a valid email address';
        }
    }

    // check title
    if ( empty( $_POST['title'] ) ) {
        $errors['title'] = 'A title is required <br />';
    } else {
        $title = $_POST['title'];
        if ( !preg_match( '/^[a-zA-Z\s]+$/', $title ) ) {
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = 'At least one ingredient is required';
    } else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list';
        }
    }


    if ( array_filter( $errors ) ) {
        // echo 'Errors in the form';

    } else {
        // get the data from the FORM
        $email = mysqli_real_escape_string( $conn, $_POST['email'] );
        $title = mysqli_real_escape_string( $conn, $_POST['title'] );
        $ingredients = mysqli_real_escape_string( $conn,$_POST['ingredients'] );

        // create the sql and send to dataBase and each column  with VALUES column
        $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES ('$title','$email', '$ingredients') ";

        // save to dataBase and check
        if ( mysqli_query( $conn, $sql ) ) {
            // success 
            header( 'location:index.php' );
        } else {
            echo 'query error' . mysqli_error( $conn );
        }

    }
} // end POST check

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'template/header.php';?>

<section class='container grey-text'>

    <h4 class='center'>Add a pizza</h4>

    <form action="add.php" method="POST" class="white">

        <label>Your Email:</label>
        <input type="text" name='email' value="<?php echo htmlspecialchars( $email ) ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Pizza Title:</label>
        <input type="text" name='title' value="<?php echo htmlspecialchars( $title ) ?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>


        <label>Ingredients (comma separated):</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars( $ingredients ) ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>


        <div class="center">
            <input type="submit" name='submit' value='submit' class='btn brand z-depth-0'>
        </div>

    </form>
</section>
<?php include 'template/footer.php';?>


</html>


