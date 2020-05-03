<?php
$username="your username";
$servername="your server";
$dbname="your databasename";
$password="your password";
try {
	
	$bdd= new PDO("mysql:host=servername;dbname=databasename",'username',''
			,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo $e->getMessage();
}

?>
