<?php
	$host = 'localhost';
	$dbName = 'id_card_generator';
	$userName = 'root';
	$pwd = '';
	/*Connection*/
$dbCon = mysqli_connect($host, $userName, $pwd, $dbName);
@define("BASE", "http://localhost/id_card_generator/index.php");
?>