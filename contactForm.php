<?php 



$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "mohamedinfath99@gmail.com";
$subject = 'Mail from website';

$headers = "Form: ".$name. "\r\n" ;
$txt = "You have recived an e-mail from ".$name ."\r\n Email: " .$email ."\r\n Message: ". $message;


if($email!= NULL){
    mail($to, $subject, $txt, $headers);
}


header("Location: index.html");

?>