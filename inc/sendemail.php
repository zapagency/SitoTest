<?php

    $to = "dywdgig@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $surname = $_REQUEST['surname'];
    $headers = "From: $from";
    $subject = "You have a message from your Template";

    $fields = array();
    $fields{"name"}    = "Name";
    $fields{"surname"}    = "Surname";
    $fields{"email"}    = "Email";
    $fields{"phone"}    = "Phone";
    $fields{"web"}    = "Website";
    $fields{"message"}   = "Message";
    

    $body = "Here is the message you got:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>