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

if(isset($_SESSION['username'])){

	$vare = "Hello ".$_SESSION['username'];
	}
	else{
	$vare = "Login";
	}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Driving Licence near Bolzano</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <section class="d-flex flex-column justify-content-between" id="">
        <div id="top-div">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="https://www.driving-quiz.it/">BI01</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1" style="margin-left: 0px;">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="./quiz.php">Quiz</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="./theory.php">Theory</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="./map.php">Driving School</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="./login.php"><?php echo $vare;?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-center mb-4" id="head" style="color:black">Driving School near Bolzano</h1>

        </div>
    </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d43951.9613877535!2d11.315129575304052!3d46.488360212454424!3m2!1i1024!2i768!4f13.1!2m1!1sautoscuola%20vicino%20a%20Bolzano%2C%20BZ!5e0!3m2!1sit!2sit!4v1591529816879!5m2!1sit!2sit" width="100%" height="450"></iframe></div>  
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>

</body>

</html>