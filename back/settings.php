<?php
require_once("./includes/config.inc.php");

session_start();

if (count($_POST) > 0) {
    $result = mysqli_query($db, "SELECT *from accounts WHERE username='" . $_SESSION["username"] . "'");
    $row = mysqli_fetch_array($result);
    if (md5($_POST["currentPassword"]) == $row["password"]) {
        mysqli_query($db, "UPDATE accounts set password='" . md5($_POST["newPassword"]) . "' WHERE username='" . $_SESSION["username"] . "'");
        $message = "Password Changed";
       
    } else
        $message = "Current Password is not correct";

}



?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Update password</title>
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/untitled.css">
	<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>


<body id="loginbody">
    <section>
        <div id="top-div">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#">BI01</a></div>
            </nav>
        </div>
        <h1 id="head" class="text-center">Change Password</h1>
    </section>
    <div class="text-center">
   
</div>

	
    <div class="login-clean">
	<form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
			<h2 class="sr-only">Change password</h2>
            <div class="illustration"><i class="fa fa-user-circle-o"></i></div>
			<div class="form-group"><input class="form-control" type="password" name="currentPassword" placeholder="Old Password" autofocus=""></div>
			<div class="form-group"><input class="form-control" type="password" name="newPassword" placeholder="New Password" autofocus=""></div>
            <div class="form-group"><input class="form-control" type="password" name="newPassword" placeholder="Confirm Password"></div>
			<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Update</button></div>
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        </form> 
    </div>

</body>

</html>