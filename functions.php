<?php
session_start();

$_SESSION["number"] = $_GET["number"];

if($_SESSION["number"] != null){
   header("Location: result.php");
};

function getPassword($number) {
	$characters = '';
   $_SESSION["letters"] = $_GET["letters"];
   $_SESSION["numbers"] = $_GET["numbers"];
   $_SESSION["characters"] = $_GET["characters"];

   if ($_SESSION["letters"] == "on") {
      $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
   }
   
   if ($_SESSION["numbers"] == "on") {
      $characters .= "0123456789";
   }
   if ($_SESSION["characters"] == "on") {
      $characters .= "?!@#$%^&*()";
   }

	$randomString = '';

	for ($i = 0; $i < $number; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}

$_SESSION["password"] = getPassword($_SESSION["number"]);

?>