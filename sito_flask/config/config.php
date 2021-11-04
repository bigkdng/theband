<?php
	//dati connessione server
	$dbhost = "localhost";
	$dbname = "band";
	$dbuser = "root";
	$dbpassword = "SC89H#;A9-7b";

	//file gestione sql
	require 'config/classes/sql.class.php';
	//collegamento server
	$db = new DB($dbhost, $dbname, $dbuser, $dbpassword);

	//file gestione tabella tours
	require 'config/classes/tours.class.php';
?>