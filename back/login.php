<?php
/**
 * login.php
 *
 * Login
 *
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 by BI01
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 */
 
require_once("./includes/config.inc.php");


	session_start();
	
    // If form submitted
    if (isset($_POST['username']) && isset($_POST['pass'])){
		
		$username = stripslashes($_POST['username']); //slashes
		$password = stripslashes($_POST['pass']);
		
		$username = mysqli_real_escape_string($db,$username); //escape
		$password = mysqli_real_escape_string($db,$password);
		
	// Check if account exists
        $query = "SELECT * FROM `users` WHERE uname='$username' and pass='".md5($password)."'";
		
		$result = mysqli_query($db,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
		// No form sumitted
		// show this HTML 
		
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="User" required />
<input type="password" name="pass" placeholder="Pass" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='reg.php'>Register Here</a></p>
</div>
<?php } ?>


</body>
</html>