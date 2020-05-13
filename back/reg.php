<?php
/**
 * reg.php
 *
 * Registration
 *
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 by BI01
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 */


require_once("./includes/config.inc.php");

$ip = $_SERVER['REMOTE_ADDR'];
$time = time();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>

</head>
<body>

<?php

    // If form submitted
    
    if (isset($_POST['username'])){
		$username = stripslashes($_POST['username']); // removes slash
		$email = stripslashes($_POST['email']);
        $password = stripslashes($_POST['pass']);

        $username = mysqli_real_escape_string($db,$username); //escape 
		$email = mysqli_real_escape_string($db,$email);
		$password = mysqli_real_escape_string($db,$password);


        $query = "INSERT into `users` (uname, pass, email, ip, timestamp) VALUES ('$username', '".md5($password)."', '$email', '$ip', '$time')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>

<div class="form">
	<h1>Sign Up</h1>
		<form name="reg" action="" method="post">
			<input type="text" name="username" placeholder="User" required />
			<input type="email" name="email" placeholder="Email" required />
			<input type="password" name="pass" placeholder="Password" required />
			<input type="submit" name="submit" value="Sign Up" />
		</form>
</div>

<?php } ?>
</body>
</html>
