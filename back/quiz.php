<?php
//error_reporting(0);
/**
Zweidimensionales Array ID, answer GLOBAL

*/

session_start();

include('./includes/QuizFunc.php');


	if(!isset($_GET['action'])){
		
		$_GET['action'] = "";
	
	}

	switch($_GET['action']){
	
		case "correct":
			
			header('location: result.php');
			
        break;
		
		case "next":
			
			if($_SESSION['questPos'] >= NUM_OF_QUESTIONS){
		
				
				unset($_SESSION["currentq"]);
				unset($_SESSION["questPos"]);
				unset($_SESSION["qList"]);
		
				header('location: result.php');
			}
			
			// Load new Question
			update_question();
			
			//new text to variable
			
			$question = print_question($_SESSION['currentq']);
			
			$value = $_GET['answ'];
			
			if($value == $question[1]){
				
			addAnswer($_SESSION['qid'], $_SESSION['questPos'],1);
					echo "<script> window.alert('True'); </script>";
			}else{
			addAnswer($_SESSION['qid'], $_SESSION['questPos'],0);
					echo "<script> window.alert('False;'); </script>";
					
					
					
			}
						
		//	$_SESSION['currentq']
		//print_r($safeAnsw);
			var_dump($_SESSION['qid']);
			var_dump($_SESSION['questPos']);
			
        break;
		
		case "restart":
		unset($_SESSION["qid"]);
		unset($_SESSION["currentq"]);
		unset($_SESSION["questPos"]);
		unset($_SESSION["qList"]);
		
		prep_quiz();

		$question = print_question($_SESSION['currentq']);
		
		break;
		
		default:
		
		prep_quiz();

		$question = print_question($_SESSION['currentq']);

		
		break;
	}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="./assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="./assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/untitled.css">
	

</head>

<body id="bodyquiz">
    <section class="d-flex flex-column justify-content-between">
        <div id="quiztop-div-1">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#">Logo</a>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Quiz</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Theory</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#">Driving School</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Hello <?php echo $_SESSION['username'];?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h1 class="text-center" id="quizhead" style="margin-top: 25px;font-size: 32px;">Quiz page</h1>
            <h2 class="text-center" id="quizsubHead" style="font-size: 38px;">Time Remaining</h2>
            <div class="col">
                <p id="countTime" class="countTime">Rimuovere</p>
            </div>
        </div>
    </section>
    <section class="text-center">
        <figure class="figure" id="signal"><img class="img-fluid figure-img" id="imgres" src="./<?php echo $question[2]; ?>" width="70%" height="auto">
            <figcaption class="figure-caption">Question Nr. <?php echo $_SESSION['questPos']; ?> out of <?php echo NUM_OF_QUESTIONS; ?></figcaption>
        </figure>
    </section>
    <section>
        <div>
            <div class="container" style="margin-bottom: 45px;">
                <div class="row">
                    <div class="col-sm-10 col-md-10 col-lg-8 col-xl-6 offset-sm-1 offset-md-1 offset-lg-2 offset-xl-3 text-center align-self-center">
                        <p id="quizp" style="font-family: Montserrat, sans-serif;"><?php echo $question[0]; ?></p>
                        <div style="margin-bottom: 10px;">
                            
						<form action="quiz.php" method="GET">
							
							<div class="form-check d-inline">
								<input class="form-check-input" type="radio" name="answ" value="1">
								<label class="form-check-label" id="checktrue" for="formCheck-1">T</label>
							</div>
                            
							<div class="form-check d-inline" style="margin-left: 45px;">
								<input class="form-check-input" type="radio" name="answ" value="0">
								<label class="form-check-label" id="checkfalse">F</label>
							</div>
							
                        </div>
						<a class="nounderline"><button class="btn btn-primary btn-block text-center flex-grow-0 flex-shrink-0 start-button" data-bs-hover-animate="pulse" type="submit" name="action" value="next" style="background-color: rgba(204,122,0,0.51);">Next&nbsp;<i class="fa fa-chevron-right"></i></button></a>
                        
						<a class="nounderline">
						
							<button class="btn btn-primary btn-block text-center flex-grow-0 flex-shrink-0 correct-button" data-bs-hover-animate="pulse" type="submit" name="action" value="correct" style="background-color: rgba(0,204,20,0.51);">Correct&nbsp;<i class="fa fa-check"></i></button>
							
						</a>
                        
						<a class="nounderline" ><button class="btn btn-primary btn-block text-center flex-grow-0 flex-shrink-0 newquizbutton" data-bs-hover-animate="pulse" type="submit" name="action" value="restart" style="background-color: rgba(0,82,204,0.51);">Restart&nbsp;<i class="fa fa-repeat"></i></button></a>
						</form>
					</div>
                </div>
            </div>
        </div>
    </section>
    <div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/timerscript.js"></script>
		<script>
    $(document).ready(function(){
        $(":button[type='submit']").click(function(){
            var radioValue = $("input[name='answ']:checked").val();
            if(!radioValue){

					 $("form").css({
						"border-style": "solid",  
						"border-color": "red"
					});

				alert("You didn't choose True or False!");
				event.preventDefault();
			}
        });
    });
	</script>
</body>

</html>