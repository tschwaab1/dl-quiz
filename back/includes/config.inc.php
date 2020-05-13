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


// Enter your Database Data
$dbhost = 'localhost';
$dbuser = 'tschwaab_dl';
$dbpass = 'Of45J3NHBZSI04y5';
$dbname = 'dl';

$db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



?>