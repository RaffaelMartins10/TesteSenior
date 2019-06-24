<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/TesteSenior-Painel/");
	define("BASE_URL_SITE", "http://localhost/TesteSenior-Sistema/");
	define("PATH_SITE", "../TesteSenior-Sistema/");
	$config['dbname'] = 'testesenior';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://localhost/TesteSenior-Painel/");
	define("BASE_URL_SITE", "http://localhost/TesteSenior-Sistema/");
	define("PATH_SITE", "../TesteSenior-Sistema/");
	$config['dbname'] = 'testesenior';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}