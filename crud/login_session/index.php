<?php session_start(); /* Starts the session */

if(isset($_SESSION['userData']['username'])){
	header("location:index.php");
	exit;
}
 

?>
<br>
<?php echo ' Welcome Back :'.$_SESSION['userData']['username'];?>
<br>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="username">username : </label>
    <input name="email" type="email" value="<?php echo $_SESSION['userData']['username']?>" required>
    <br>
    <br>
 </form>
 <a href="logout.php">Logout </a>