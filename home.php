<?php 
/**
 * Start the session.
 */
session_start();
 
 
/**
 * Check if the user is logged in.
 */
//if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    /* header('Location: login.php'); */
    //exit;
//}
 
 
/**
 * Print out something that only logged in users can see.
 */
 
echo "<h1>". 'Hello, ' . $_SESSION['username']. "</h1>"


?>

<a href='account.php'>Edit account</a>;

<form action="auth.php" method="POST">
    <input type="submit" name="logout" value="logout">
</form>