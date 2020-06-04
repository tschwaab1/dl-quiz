<?php
$error = NULL;

if (isset($_POST['submit'])){
    
    $mysqli = new mysqli('localhost', 'root', '', 'dltest');


    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $password = md5($password);


    $resultSet = $mysqli->query("SELECT * FROM accounts WHERE username = '$username' AND
     password = '$password' LIMIT 1");

     if($resultSet->num_rows != 0){
        //Process Login
        $row = $resultSet->fetch_assoc();
        $verified = $row['verified'];
        $email = $row['email'];
        $date = $row['createdate'];
        $date = strtotime($date);
        $date = date('M d Y', $date);

        if($verified == 1){
            //Continue Processing (here put header with logged page)
            header('Location: http://www.example.com/');
        }else{
            $error = "This account has not yet been verified. An email was sent to $email on $date";
        }

     }else{
        //Invalid credentials
        $error = "The username or password you entered is incorrect";
     }
}
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body id="loginbody">
    <section>
        <div id="top-div">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#">WIE BI01</a></div>
            </nav>
        </div>
        <h1 id="head" class="text-center">Login page</h1>
    </section>
    <div class="text-center">
    <?php echo $error; ?>
</div>
    <!-- <main>
        <section></section>
    </main> -->

    <div class="login-clean">
        <form method="post" name="login">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fa fa-car"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="User" autofocus=""></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Log In</button></div><a class="forgot" href="registration.php">You dont have an account? Register here.</a>
        </form> 
    </div>

</body>

</html>