<?php
/**
 * index.php
 *
 * index.php
 *
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 by BI01
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 */

session_start();
if(isset($_SESSION["username"])){
header("Location: ./home.php");
exit(); }


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>driving licence quiz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <section class="d-flex flex-column justify-content-between" id="hero">
        <div id="top-div">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="./index.php">BI01</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1" style="margin-left: 0px;">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="./quiz.php">Quiz</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="./theory.php">Theory</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="./map.php">Driving School</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="./login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-center" id="head">Driving Licence Quiz</h1>
            <h2 class="text-center" id="subHead">Train to get your driving Licence</h2>
        </div>
        <div id="bottom-div">
            <div class="container" style="margin-bottom: 45px;">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-8 col-xl-6 offset-sm-1 offset-md-1 offset-lg-2 offset-xl-3 text-center align-self-center">
                        <p style="font-family: Montserrat, sans-serif;"></p><a class="nounderline" href="./login.php"><button class="btn btn-primary btn-block text-center flex-grow-0 flex-shrink-0 start-button" type="button" style="background-color: rgba(204,122,0,0.51);">Take mock theory test</button></a></div>
                </div>
            </div>
            <div>
                <footer id="copyrightfooter">
                    <p>© BI01&nbsp;2020&nbsp;-&nbsp;All&nbsp;right&nbsp;reserved<br></p>
                </footer>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>

</body>

</html>