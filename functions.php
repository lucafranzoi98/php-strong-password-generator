<?php
session_start();

$_SESSION["number"] = $_GET["number"];

if($_SESSION["number"] != null){
   header("Location: result.php");
};

function getPassword($number) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ?!@#$%^&*()';
	$randomString = '';

	for ($i = 0; $i < $number; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}

$_SESSION["password"] = getPassword($_SESSION["number"]);

?>