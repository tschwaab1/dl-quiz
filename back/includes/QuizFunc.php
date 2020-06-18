<?php
/**
 * QuizFunc.php
 *
 * Quiz Functions
 *
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 by BI01
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 */
 
require_once("./includes/config.inc.php");

	global $safeAnsw;
	$safeAnsw = array(range(0,39));
	
	
	//session_start();
	
	function prep_quiz(){
		
		
		global $text,$db;

		  $query = "SELECT id FROM questions ORDER BY Rand() LIMIT 40";
		  $result = mysqli_query($db ,$query);
				
		  while($row = mysqli_fetch_assoc($result)){

				$temp = $row['id'];
				
					if($text == ""){
						
						$text = $temp;
					}else{
									
						$text = $text.";".$temp;
					}
					
		  }
		
		//echo $text;
		//Now $text contains 40 random id's of questions
		
		//Write to $_SESSION
		
		$_SESSION['qList'] = $text;
		$questionList = $text;
		
		//Write nr 1 Quest to SESSION
	
		$qList = explode(";",$text);
		$_SESSION['currentq'] = $qList[0];
		
				if(!isset($_SESSION['questPos'])){
					$_SESSION['questPos'] = 0;
			
				}else{
			
					$_SESSION['questPos'] = $_SESSION['questPos'] + 1;
		}
		
		$uid = $_SESSION['uid'];
		//Inizialise Quiz in DB
		$qid = rand(10000000,99999999); // Generate
		$_SESSION['qid'] = $qid;		// safe to session
		
			for($i = 0; $i <= NUM_OF_QUESTIONS; $i++){
		
				$jda["q".$i] = "1";
		
			}
	
		$newda = json_encode($jda);
		
		
		$query = "INSERT INTO `tries` (`id`, `uid`, `qid`, `data`, `qList`) VALUES (NULL, '$uid', '$qid', '$newda', '$questionList');";
		mysqli_query($db ,$query);
		
	}
		
	function print_question($nr){
		/**
		Select question Text from Database and write it to array $question[0]
		
		*/
		global $db;
		
		$query = "SELECT qText,qAnsw,qImg,qCat FROM questions WHERE id ='$nr'";
		
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($result);
	
		/**
		echo $row['qText'];
		echo "<br>";
		echo $row['qAnsw'];
		**/	
		
		$question[0] = $row['qText'];
		$question[1] = $row['qAnsw'];
		$question[2] = $row['qImg'];
		
		return $question;
	}
	
	function update_question(){

	/**
	Take qList and currentq from SESSION
	
	make qList from String to Array
		Remove first element
			make array to String
	
	Upddate qList and currentq to Session
		-> Set Session counter +1
	*/

	$qList = $_SESSION['qList'];
	$currentq = $_SESSION['currentq'].";";

	//Question List to Array	
	$qArr = explode (";",$qList);
	
	//Delete first element	
	$remove = array_shift($qArr);

	//Array to String	
	$newList = implode(";",$qArr);
		
	// Write new List and new current question to SESSION
	$_SESSION['qList'] 		= $newList;
	$_SESSION['currentq'] 	= $qArr[0];
	$_SESSION['questPos']   = $_SESSION['questPos'] + 1;
	
	/**

$string = "29;23;24;26;44;66;22;22;33;22;11;";		
		
		$trimmed = str_replace("29;", '', $string);
		
		$cun = explode(";",$string);
		
		
		
		$c = count($cun);
		
		echo "Full String: ".$string;
		echo "<br> Trimmed: ".$trimmed;
		echo "<br> Num of ele".$c;
		
		**/

	
	}
	
	function addAnswer($qid ,$nr, $answer){
		
	global $db;
	
	$query = "SELECT id,data FROM `tries` WHERE `qid` = $qid";
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

		$row = mysqli_fetch_array($result);
	
	$data = $row['data'];

	$ndata = json_decode($data,true);
		//retrieve json from db and write to array;
		
		$qus = "q".$nr;
		
	$ndata[$qus] = $answer;
		//set answer
		
	$newData = json_encode($ndata);
		//data back to json format
		
	$query = "UPDATE `tries` SET `data` = '$newData' WHERE `tries`.`qid` = $qid;";
	mysqli_query($db, $query) or die(mysqli_error($db));
		//back to database

	
	
	
	}

	
	function endQuiz($count){
		
		//if($_SESSION['questPos'] >= 39 OR ){
			
			
	//	}
	
	
	if($count >= NUM_OF_QUESTIONS){
		
		unset($_SESSION["qid"]);
		unset($_SESSION["currentq"]);
		unset($_SESSION["questPos"]);
		unset($_SESSION["qList"]);
		
		header('location: result.php');
	}
		
		
	}
	
	function abortQuiz(){
		
	}
	
	function getqList(){
		
		global $db;
		
		
		
	}
		
				
?>