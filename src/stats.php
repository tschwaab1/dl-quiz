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
header("Location: ./home.php");
exit(); }


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Under construction</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <section class="d-flex flex-column justify-content-between" id="hero">
        <div id="top-div">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="./index.php">BI01</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
				
				<span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1" style="margin-left: 0px;">
                      
                      
                    </div>
                </div>
            </nav>
            <h1 class="text-center" id="head">Temporary unavailable</h1>
            <h2 class="text-center" id="subHead">Page under construction</h2>
        </div>
        <div id="bottom-div">

            <div>
                <footer id="copyrightfooter">
                    <p>© BI01&nbsp;2020&nbsp;-&nbsp;All&nbsp;right&nbsp;reserved<br></p>
                </footer>
            </div>
        </div>
    </section>
</body>

</html>