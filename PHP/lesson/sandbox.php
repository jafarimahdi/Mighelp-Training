<?php
// session

if ( isset( $_POST['submit'] ) ) {
    // cookie for gender
    setcookie( 'gender', $_POST['gender'], time() + 5835738393 );

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header( 'location: index.php' );

    $file = 'quotes.txt';
    $handle = fopen($file, 'r');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>

<input type="text" name='name'>
<select name="gender" id="">
    <option value="man">man</option>
    <option value="woman">woman</option>
</select>
<input type="submit" name='submit' value='submit'>
</form>

</body>
</html>