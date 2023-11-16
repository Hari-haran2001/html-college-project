<?php 

$fname = $_post['fname'];
$lname = $_post['lname'];
$email = $_post['email'];
$message = $_post['message'];



$from ='harishaadvik2001@gmail.com';
$to = 'harishaadvik2001@gmail.com';
$body ="First Name : $fname.\n".
       "Last Name : $lname.\n".
       "Email : $email.\n".
       "Message : $message.\n";

$header ="From :".$from.
          "Reply-to":".$email";

mail($to,$subject,$body,$header);
header("Location:contact.html");

?>