<?php session_start(); /* Starts the session */
	
	 require __DIR__ . 'users.php';


$user = [
    'id' => '',
     'username' => '',
    'email' => '',
  ];

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
 ];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

     


		
		/* Check and assign submitted Username and Password to new variable */
		$username = isset($_POST['username']) ? $_POST['username'] : '';
				$email = isset($_POST['email']) ? $_POST['email'] : '';

		
		/* Check Username and Email existence in defined  in json */	



 			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['userData']['username']=$username;
			header("location:index.php");
			exit;
		} else {
	          	echo "Unsuccessful attempt: Set error message"; 
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
    <label for="username">username : </label>
      <input name="username" type="username">
      <br>
      <br>
    <label for="email">email : </label>
    <input name="email" type="email">
     <br>
     <br>
        <input name="Submit" type="submit" value="login">
  
</form>
</body>
</html>