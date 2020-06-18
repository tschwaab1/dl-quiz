<?php
/**
 * config.inc.php
 *
 * Database Config File
 *
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 by BI01
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 */

// Set how much Questions have to be answered until finished
// Keep in Mind, that it starts to Count from 0 ... 39 are already 40
define("NUM_OF_QUESTIONS", 9);


// Enter your Database Data
$dbhost = 'localhost';
$dbuser = 'c2_quiz';
$dbpass = '_ojYeeEYh8G';
$dbname = 'c2_quiz';

$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



?>