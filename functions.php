<?php
session_start();
$_SESSION["number"] = $_GET["number"];
$_SESSION["letters"] = $_GET["letters"];
$_SESSION["numbers"] = $_GET["numbers"];
$_SESSION["characters"] = $_GET["characters"];

if($_SESSION["number"] != null & ($_SESSION["letters"] != null || $_SESSION["numbers"] != null || $_SESSION["characters"] != null)){
   header("Location: result.php");  
}

function getPassword() {
	$characters = '';
   $_SESSION["number"] = $_GET["number"];
   $_SESSION["letters"] = $_GET["letters"];
   $_SESSION["numbers"] = $_GET["numbers"];
   $_SESSION["characters"] = $_GET["characters"];
   $_SESSION["repetitions"] = $_GET["repetitions"];

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

   // Check if repetition is true or false
   if ($_SESSION["repetitions"] == "false") {

      // Check if the number in the input is longer than the avaiable characters
      // if longer is not possible to print a string so the number is at max the length of the characters
      if ($_SESSION["number"] > strlen($characters)){
         $_SESSION["number"] = strlen($characters);         
      }

      // Check the unicity of random characters
      while(strlen($randomString) < $_SESSION["number"]) {
         $index = rand(0, strlen($characters) - 1);
         if(str_contains($randomString, $index) == false) {
            $randomString .= $characters[$index];
         }
      }
      

      
   } else{

      for ($i = 0; $i < $_SESSION["number"]; $i++) {
         $index = rand(0, strlen($characters) - 1);
         $randomString .= $characters[$index];
      }
   }





	return $randomString;
}

$_SESSION["password"] = getPassword();
?>