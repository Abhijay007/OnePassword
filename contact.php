<?php
$name = $_REQUEST['form-name'];
$email = $_REQUEST['form-email'];
$subject = $_REQUEST['form-subject'];
$message = $_REQUEST['form-message'];

$message = "Name: $name \r\n";
$message .= "Email: $email \r\n";
$message .= "Subject: $subject \r\n";
$message .= "Message: $message \r\n";

if (empty($name) || empty($email) || empty($message)) {

   echo "<script type='text/javascript'> alert('Please Fill all the fields');window.history.go(-1);</script>";
}
 else {
    mail("aventures.tech@gmail.com", "new form submission", $message , "From:$name <$email>");
    
    echo "<script type='text/javascript'> alert('your message is sent');window.history.go(-1);</script>";
}
?>
