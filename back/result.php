<?php
session_start();

require_once("./includes/QuizFunc.php");

//	var_dump($_SESSION);

	
if(!isset($_SESSION['qid'])){
	die('You are currently not doing a Quiz! <a href="./index.php">Go back</a>');
}
if(!isset($_SESSION['username'])){
	die ('You are not logged in, <a href="./login.php">click here</a> to login!');
}

		$qid = $_SESSION['qid'];

		$query = "SELECT uid, qid, qList, data FROM tries WHERE qid ='$qid'";
		
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($result);
	
		$qList = $row['qList'];
		$qAnsw = $row['data'];

		$json_qData = json_decode($qAnsw,true);

//		var_dump($json_qData); // array with data in pattern of q0, ... , q39
	
		//var_dump($json_qData['q0']);
		
	//	var_dump($qList);
	
//	var_dump($_SESSION);
		
		$qList = explode(";",$qList);
		
	//	var_dump($qList); // array with syntax 0 , ... , 39
		

//var_dump($_SESSION);

	unset($_SESSION["qid"]);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body style="font-family: Montserrat;">

<div class="container">
  <h2 class="text-center" style="color:black;">Questions review</h2>
  <div class="panel-group" id="accordion">
  
  
  <?php for($i=1; $i <= NUM_OF_QUESTIONS; $i++){ 
  
	$countt = $i - 1;
  
  $questionText = print_question($qList[$countt]);
  
  if($json_qData['q'.$countt] != $questionText[1]){
	
		$pane = "panel-success";
		$answ = "<a color='green'><b>correct</b></a>";
  }
  else{
	  $pane = "panel-danger";
	  $answ = "<a color='red'><b>wrong</b></a>";
  }
  ?>
	 <div class="panel <?php echo $pane; ?>">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">Question <?php echo $i; ?> - Your Answer is: <?php echo $answ; ?></a>
			</h4>
		</div>
		<div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
			<div style="color:black;" class="panel-body"><img src="./<?php echo $questionText[2];?>" width="10%" height="auto"> <?php echo $questionText[0]; ?></div>
		</div>
    </div>
    
<?php } ?>
 
</div>




      <div class="row">
          <div class="col-sm-10 col-md-10 col-lg-8 col-xl-6 offset-sm-1 offset-md-1 offset-lg-2 offset-xl-3 text-center align-self-center">
                  <a
                      class="nounderline" href="./quiz.php?action=restart"><button class="btn btn-primary btn-block text-center flex-grow-0 flex-shrink-0 newquizbutton" data-bs-hover-animate="pulse" type="button" style="background-color: rgba(0,82,204,0.51);">Restart&nbsp;<i class="fa fa-repeat"></i></button></a>
          </div>
      </div>
  </div>
</body>
</html>

