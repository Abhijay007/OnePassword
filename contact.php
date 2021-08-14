<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

if (empty($name) || empty($email) || empty($message)) {
    echo "<script type='text/javacript> alert('please Fill all the Fields');
    </script>";
} else {
    mail("aventures.tech@gmail.com", "new form submission", $message, "From:$name <$email>");
    
    echo "<script type='text/javascript>
    alert('Your message is sent successfully');
    window.history.log(-1);
    </script>";
}
