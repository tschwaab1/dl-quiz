<?php
/**
 * config.inc.php
 *
 * Database Config File
 *
 * @author     Thomas Michael Schwaab
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 Thomas Michael Schwaab
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 * @version    0.1a
 */


// Enter your Database Data
$dbhost = 'localhost';
$dbuser = 'tschwaab_dl';
$dbpass = 'Of45J3NHBZSI04y5';
$dbname = 'dl';

$db = new db($dbhost, $dbuser, $dbpass, $dbname);



?>