<?php
$name = $_REQUEST['form-name'];
$email = $_REQUEST['form-email'];
$subject = $_REQUEST['form-subject'];
$message = $_REQUEST['form-message'];

if (empty($name) || empty($email) || empty($message)) {
    echo "<script type='text/javacript> alert('please Fill all the Fields');
    </script>";
} else {
    mail("aventures.tech@gmail.com", $subject, $message, "From:$name <$email>");

    echo "<script type='text/javascript>
    alert('Your message is sent successfully');
    window.history.log(-1);
    </script>";
}
