<?php
require_once("./includes/config.inc.php");

if(isset($_GET['vkey'])){
    $vkey = $_GET['vkey'];



    $resultSet = $db->query("SELECT verified,vkey FROM accounts WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");

    if($resultSet->num_rows ==1){
        
        $update = $db->query("UPDATE ACCOUNTS SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");

        if($update){
            echo "Your account has been verified. You must now login";
        }else {
            echo $db->error;
        }

    }else {
        echo "This account invalid or alredy verified <a href='./index.php'>Click here to Login</a>";
    }

}else{
    die("Something went wrong");
}
?>

<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />   
</head>

<body>
<center>  
    
</center>
</body>
</html>