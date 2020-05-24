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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>driving licence - updated</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body id="regbody">
    <?php

    // If form submitted

    if (isset($_POST['username'])) {
        $username = stripslashes($_POST['username']); // removes slash
        $email = stripslashes($_POST['email']);
        $password = stripslashes($_POST['pass']);

        $username = mysqli_real_escape_string($db, $username); //escape 
        $email = mysqli_real_escape_string($db, $email);
        $password = mysqli_real_escape_string($db, $password);


        $query = "INSERT into `users` (uname, pass, email, ip, timestamp) VALUES ('$username', '" . md5($password) . "', '$email', '$ip', '$time')";
        $result = mysqli_query($db, $query);
        if ($result) {
            echo "<div class='regtextsucc'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    } else {
    ?>
        <section>
            <div id="top-div">
                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><a class="navbar-brand" href="#">Logo</a></div>
                </nav>
            </div>
            <h1 id="head" class="text-center">Registration page</h1>
            
        </section>
        <main>
            <section></section>
        </main>
        <div class="register-photo">
            <div class="form-container">
                <form name="reg" method="post">
                    <h2 class="text-center"><strong>Create</strong> an account.</h2>
                    <div class="form-group"><input class="form-control" type="text" name="username" placeholder="User" required autofocus pattern="^[a-zA-Z0-9_.-]*$"></div>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required autofocus=""></div>
                    <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Password" required minlength="6" ></div>
                    <div class="form-group"><input class="form-control" type="password" name="password_repeat" id="password_repeat" required placeholder="Password (repeat)" minlength="6" oninput='check_pass();'></div>
                    <div class="form-group"><p class="text-center" id='message'></p><button id="submit" name="submit" class="btn btn-primary btn-block" type="submit" disabled>Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="..\\assets/js/check-pass.js"></script>
    <?php } ?>
</body>

</html>