<?php

$host = 'localhost';
$name = 'ecom';
$user = 'root';
$password = 'trysomething';

try {
	$pdo = new PDO("mysql:host=$host;dbname=$name", $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}