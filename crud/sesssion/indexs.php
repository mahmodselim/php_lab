<?php session_start(); /* Starts the session */

session_start(); /* Starts the session */
    if (!isset($_SESSION['Username']))
    {
        header('location:login.php');
        exit;

 
}
 
}
?>
<br>
<?php echo ' Welcome Back :'.$_SESSION['Username'];?>
<br>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="email">Email : </label>
    <input name="email" type="email" value="<?php echo $_SESSION['Username']?>" required>
    <br>
    <br>
 </form>
 <a href="logout.php">Logout </a>