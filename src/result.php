<?php
session_start();

require_once("./includes/QuizFunc.php");


//	var_dump
	
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
		unset($_SESSION["currentq"]);
		unset($_SESSION["questPos"]);
		unset($_SESSION["qList"]);

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
  <link rel="stylesheet" href="./assets/css/untitled.css">
  
</head>
<body style="font-family: Montserrat;">

            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="./index.php" style="color:black;">BI01</a>
                    <div class="collapse navbar-collapse" id="navcol-1">


                    </div>
                </div>
            </nav>

<div class="container">



  <h2 class="text-center" style="color:black;">Questions review</h2>
  <div class="panel-group" id="accordion">
  
  
  <?php for($i=1; $i <= NUM_OF_QUESTIONS+1; $i++){ 
  
	$countt = $i - 1;
  
  $questionText = print_question($qList[$countt]);
  
  if($questionText[1] == 1){
	  	  $answer = "true";
  }
  else {
	  	  $answer = "false";
  }
  

  
  if($json_qData['q'.$countt] == 0 and $questionText[1] == 0){
	 $pane = "panel-success";
	 $answ = "<a color='green'><b>correct</b></a>";
  }
  elseif($json_qData['q'.$countt] == 1 and $questionText[1] == 1){
	 $pane = "panel-success";
	 $answ = "<a color='green'><b>correct</b></a>";
  } 
    elseif($json_qData['q'.$countt] == 1 and $questionText[1] == 0){
	$pane = "panel-danger";
	$answ = "<a color='red'><b>wrong</b></a>";
  } 
    elseif($json_qData['q'.$countt] == 0 and $questionText[1] == 1){
	$pane = "panel-danger";
	$answ = "<a color='red'><b>wrong</b></a>";
  }
else{
	die("Fucking freaking special error!");
}  

  
//  	var_dump($_SESSION);
//	var_dump($questionText);
  
  ?>
	 <div class="panel <?php echo $pane; ?>">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">Question <?php echo $i; ?> - Your Answer is: <?php echo $answ; ?></a>
			</h4>
		</div>
		<div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
			<div style="color:black;" class="panel-body"><img src="./<?php echo $questionText[2];?>" width="10%" height="auto"> The answer of the Question is: <?php echo $answer;// echo $answer; echo "TEST json:"; echo $json_qData['q'.$countt]; echo "Test DB:"; echo $questionText[1];?> <br><?php echo $questionText[0]; ?></div>
		</div>
    </div>
    
<?php } ?>
 
</div>




      <div class="row">
          <div class="text-center align-self-center">
                  <a class="nounderline" href="./quiz.php?action=restart"><button class="btn btn-primary btn-block text-center flex-grow-0 flex-shrink-0 newquizbutton" data-bs-hover-animate="pulse" type="button" style="background-color: rgba(0,82,204,0.51);">Restart&nbsp;<i class="fa fa-repeat"></i></button></a>
          </div>
      </div>
  </div>
</body>
</html>

