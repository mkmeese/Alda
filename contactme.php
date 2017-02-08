<?php
// Get data
$user_name = test_input($_POST["user_name"]);
$user_email = test_input($_POST["user_email"]);
$subject = test_input($_POST["subject"]);
$message = test_input($_POST ["message"]);

//Concat subject and email, send the message
$fullsubject =  $subject." from ".$user_email;
mail("webmaster@mkmeese.com", $fullsubject, $message);

// Redirection to the success page
header("Location:http://dev.mkmeese.com/thanks");

//Strip out space, slashes and special characters
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>