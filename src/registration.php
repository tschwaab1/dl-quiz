<?php
require_once("./includes/config.inc.php");


$error = NULL;

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];
    $email = $_POST['email'];

    if (strlen($username) < 2) {
        $error = "<p>Your username must be at least 2 characters</p>";
    } elseif ($password_repeat != $password) {
        $error .= "<p>Your passwords do not match</p>";
    } else {
        //Form valid

       

	   //Sanitize form data
        $username = $db->real_escape_string($username);
        $password = $db->real_escape_string($password);
        $password_repeat = $db->real_escape_string($password_repeat);
        $email = $db->real_escape_string($email);

        //Generate Vkey
        $vkey = md5(time().$username);

        //Insert account into the DB
        $password = md5($password);
        $insert = $db->query("INSERT INTO accounts (username, password, email, vkey)
        VALUES('$username', '$password', '$email', '$vkey')");

        if($insert){
            $to = $email;
            $subject = "Driving-quiz.it - Email Verification";
            $message = "Dear $username, <br> Welcome to Driving Licence Quiz website, <a href='https://driving-quiz.it/verify.php?vkey=$vkey'>click on the link</a> to confirm your account and start training now!<br><br>We wish you good luck with your Test!<br><br>Your Driving-quiz.it Team";
            $headers = "From: admin@driving-quiz.it \r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            mail($to,$subject,$message,$headers);

            header('location:thankyou.html');
        }else {
            echo $db->error;
        }
        
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/untitled.css">
</head>

<body id="regbody">

    <section>
        <div id="top-div">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="./index.php">BI01</a></div>
            </nav>
        </div>
        <h1 id="head" class="text-center">Registration page</h1>

    </section>
    <main>
        <section></section>
    </main>
    <div class="register-photo">
        <div class="form-container">
            <form name="reg" method="post" action="">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="User" required autofocus pattern="^[a-zA-Z0-9_.-]*$"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required autofocus=""></div>
                <div class="form-group"><input class="form-control" type="password" name="password" id="password" placeholder="Password" required minlength="6"></div>
                <div class="form-group"><input class="form-control" type="password" name="password_repeat" id="password_repeat" required placeholder="Password (repeat)" minlength="6" oninput='check_pass();'></div>
                <div class="form-group">
                    <p class="text-center" id='message'></p><button id="submit" name="submit" class="btn btn-primary btn-block" type="submit" disabled>Sign Up</button>
                </div><a class="already" href="login.php">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./assets/js/check-pass.js"></script>

    <?php
    echo $error;
    ?>
</body>

</html>