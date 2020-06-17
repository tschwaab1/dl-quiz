<?php
/**
 * logout.php
 *
 * logout.php
 *
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 by BI01
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 */

session_start();

if(session_destroy())
{
header("Location: ./login.php"); // Redirecting
}
?>