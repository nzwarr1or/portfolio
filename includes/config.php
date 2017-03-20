<?php

require 'functions/functions.php';

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'portfolio';

$dbh = connectDatabase($host, $database, $user, $pass);
$project = getProjects($dbh);

//die(var_dump($portfolio));