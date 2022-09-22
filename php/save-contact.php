<?php

if($_POST) {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    // $to = "";
    $to = "sumit@omlogic.com";
    $subject = "New Contact Query";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Bcc: pankaj.kumar@omlogic.co.in\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    

    // Admin Mail
    $message = "<p>Hello Admin,</p> <h3>We have received new query:</h3>";
    foreach ($_POST as $key => $value) {

        if(is_array($value)) {
            $message .= "<p>".str_replace("-", " ", ucfirst($key)).': '.implode(', ', $value)."</p>";
        } else {
            $message .= "<p>".str_replace("-", " ", ucfirst($key)).': '.$value."</p>";
        }

    }

    $message .= "<br><p>Thank You</p>";

    mail($to,$subject,$message, $headers);
    
    echo json_encode(['status' => 'success', 'message' => 'Thank you for contact us. We will get back to you soon!']);
    exit;
} else {
    die('invalid attempt');
}