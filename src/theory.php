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
if(!isset($_SESSION["username"])){
header("Location: ./login.php");
exit(); }


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>driving licence - updated</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body class="bodytheory">
    <div id="quiztop-div-1">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><a class="navbar-brand" href="./index.php">BI01</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1" style="margin-left: 0px;">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Hello <?php echo $_SESSION['username']; ?></a>
                                <div class="dropdown-menu" role="menu" style="background-color: rgba(255,255,255,0.46);"><a class="dropdown-item" role="presentation" href="./stats.php">Stats</a><a class="dropdown-item" role="presentation" href="./settings.php">Settings</a><a class="dropdown-item" role="presentation" href="./logout.php">Logout</a></div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="text-center" id="quizhead" style="margin-top: 25px;font-size: 32px;">Theory Quiz page</h1>
        <h2 class="text-center" id="quizsubHead" style="font-size: 38px;">Take a mock test by selecting a specific topic<br></h2>
    </div>
    <div class="article-list">
        <div class="container">
            <div class="row articles" style="margin-top: 65px;">
                <div class="col-sm-6 col-md-4 item"><a href="./quiz.php?action=restart&cat=3""><img class="img-fluid" src="assets/img/12.png" style="width: 202px;"></a>
                    <h3 class="name">Precedence Quiz</h3>
                    <p class="description">Here you will find a series of exercises selected to train you on the order of precedence, found during the official examination.</p><a class="action" href="./quiz.php?action=restart&cat=3"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="./quiz.php?action=restart&cat=1"><img class="img-fluid" src="assets/img/5.png" style="width: 162px;"></a>
                    <h3 class="name">Compulsory Sign Quiz</h3>
                    <p class="description">Here you will find a series of mandatory signs selected to train you on the meaning, found during the official examination.</p><a class="action" href="./quiz.php?action=restart&cat=1"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="./quiz.php?action=restart&cat=2"><img class="img-fluid" src="assets/img/8.png" style="width: 181px;"></a>
                    <h3 class="name">Precedence Sign Quiz</h3>
                    <p class="description">Here you will find a series of precedence signs selected to train you on the meaning, found during the official examination.</p><a class="action" href="./quiz.php?action=restart&cat=2"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="./quiz.php?action=restart&cat=5"><img class="img-fluid" src="assets/img/117.png" style="width: 181px;"></a>
                    <h3 class="name">Danger Sign Quiz</h3>
                    <p class="description">Here you will find a series of danger signs selected to train you on the meaning, found during the official examination.</p><a class="action" href="./quiz.php?action=restart&cat=5"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="./quiz.php?action=restart&cat=4"><img class="img-fluid" src="assets/img/107.png" style="width: 161px;"></a>
                    <h3 class="name">Indication Sign Quiz</h3>
                    <p class="description">Here you will find a series of indication signs selected to train you on the meaning, found during the official examination.</p><a class="action" href="./quiz.php?action=restart&cat=4"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="./quiz.php?action=restart&cat=6"><img class="img-fluid" src="assets/img/123.png" style="width: 161px;"></a>
                    <h3 class="name">Integration Sign Quiz</h3>
                    <p class="description">Here you will find a series of integration signs selected to train you on the meaning, found during the official examination.</p><a class="action" href="./quiz.php?action=restart&cat=6"><i class="fa fa-arrow-circle-right"></i></a></div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>