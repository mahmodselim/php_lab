<?php session_start(); /* Starts the session */
	if (isset($_SESSION['Username']))
	{
		header('location:index.php');
		exit;
	}
	/* Check Login form submitted */	
 if ($_SERVER['REQUEST_METHOD'] == 'POST')	{

$username = $_POST['User'];
$email = $_POST['Email'];


      }	 
		  
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['Username'] = $Username;
			header("location:session/index.php");
			exit;
		} else {
	          	echo "Unsuccessful attempt: Set error message"; 
 	        	}
	}
?>
<!doctype html>
<html>
<head>
 
<title>PHP Login  session</title>
 </head>
<body>
 
 
<form action="" method="post" name="Login_Form">

  <?php  echo (isset($msg))?$msg:'';?>
    <label for="email">Username : </label>
      <input name="email" type="email">
      <br>
      <br>
    <label for="password">Email : </label>
    <input name="Password" type="password">
     <br>
     <br>
        <input name="Submit" type="submit" value="login">
  
</form>
</body>
</html>