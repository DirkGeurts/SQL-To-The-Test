<?php include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' type='text/css' href='style.css' />
        <title>Login</title>
    </head>
    <body>


    <?php
    session_start();
    if(isset($_SESSION['message'])):
        ?>

    <div class="alert" <?= $_SESSION['msg_type']?>>

    <?php 

    echo $_SESSION['message'];
    unset($_SESSION['message']);
    
    ?>
</div>

<?php endif ?>;
        <h1>Login</h1>
        <div class="container">
        <form action="auth.php" method="POST">
            
            <input type="text" id="username" name="username" placeholder="Username" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input class="loginbtn" type="submit" name="login" value="Confirm"></button> 
            
        </form>
        <div>
    </body>
</html>

heder.php


<?php
try
{
	// We connect to MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=sql_ex;charset=utf8', 'root', 'Prosperè§76'); 


}
catch(Exception $e)
{
	// In case of error, we display a message and stop everything
	echo $e->getMessage();
	die();
}
?>
