<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="assets/css/Article-List.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css"> -->
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <!-- <link rel="stylesheet" href="assets/css/Map-Clean.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css"> -->
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body id="loginbody">
    <section>
        <div id="top-div">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#">Logo</a></div>
            </nav>
        </div>
        <h1 id="head" class="text-center">Login page</h1>
    </section>
    <main>
        <section></section>
    </main>
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
    if (isset($_POST['username']) && isset($_POST['pass'])) {

        $username = stripslashes($_POST['username']); //slashes
        $password = stripslashes($_POST['pass']);

        $username = mysqli_real_escape_string($db, $username); //escape
        $password = mysqli_real_escape_string($db, $password);

        // Check if account exists
        $query = "SELECT * FROM `users` WHERE uname='$username' and pass='" . md5($password) . "'";

        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect user to index.php
        } else {
            echo "<div class='text-center'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    } else {
        // No form sumitted
        // show this HTML 

    ?>
        <div class="login-clean">
            <form method="post" name="login">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="fa fa-car"></i></div>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="User" autofocus=""></div>
                <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="registration.php">You dont have an account? Register here.<br></a><a class="forgot" href="#" style="padding-top: 8px;">Forgot your email or password?</a>
            </form>
        </div>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/timerscript.js"></script> -->
    <?php } ?>
</body>

</html>