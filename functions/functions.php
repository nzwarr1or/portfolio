<?php

function connectDatabase($host, $database, $user, $pass) {
	
	try {
		$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $pass);
	
		return $dbh;

	} catch (PDOException $e) {
		print('Error! ' . $e->getMessage() . '<br>');
		die();
	}

}

Function getProjects($dbh) {

 	$sth = $dbh->prepare("SELECT * FROM projects");
 	$sth->execute();
 	
 	$result = $sth->fetchAll();
 	return $result;

}