<?php

session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Authenticated</title>
</head>

<body>
<div>
<p>Hello <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>

<a href="logout.php">Logout</a>
</div>
</body>
</html>


