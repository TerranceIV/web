<?php
// define variables and set to empty values
$username_Err = $password_Err= "";
$email=$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["username"])) {
     $username_Err = "Email is required";
   }
   if (empty($_POST["password"])) {
     $password_Err = "Password is required";
   }
 }

?>
