<?php
	define('DB_SERVER','localhost:3306');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD','');
	define('DB_DATABASE','tldm');
	$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	

?>