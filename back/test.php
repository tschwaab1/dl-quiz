<?php
/**
 * test.php
 *
 * Database Class File
 *
 * @author     Thomas Michael Schwaab
 * @email  	   thomas@schwaab.bayern
 * @copyright  (C) 2020 Thomas Michael Schwaab
 * @license    https://directory.fsf.org/wiki/License:X11  MIT/X11/X - Licence
 * @version    0.1a
 */


 
 
 require_once("./includes/mysqli.class.php");

$account = $db->query('SELECT * FROM users WHERE uname = ? AND pass = ?', array('tschwaab', '1811d2606ceb8a3511844d2dd6fe045e'))->fetchArray();


echo $account['id'];
?>
<br>
<?php
echo $account['email'];




?>