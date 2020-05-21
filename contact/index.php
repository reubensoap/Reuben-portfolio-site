<?php

require_once('../model/database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if ($action == 'home') {
    include('contact.php');
} else if ($action == 'form-submit') {
    $firstName = filter_input(INPUT_POST, 'FirstName');
    $lastName = filter_input(INPUT_POST, 'LastName');
    $email = filter_input(INPUT_POST, 'Email');
    $graphics = filter_input(INPUT_POST, 'graphics');
    $websites = filter_input(INPUT_POST, 'websites');

    if ($graphics == TRUE) {
        $graphics = "Graphics";
    } else {
        $graphics = "";
    }

    if ($websites == TRUE) {
        $websites = "Websites";
    } else {
        $websites = "";
    }
    

    $body = '<html><body>';
    $body .= '<div style="text-align: center;">';
    $body .= '<h2 style="padding-bottom: 10px;">Thank You '. strip_tags($_POST['FirstName']) . ', I Will Get Back With You Shortly</h2>';
    $body .= '<p style="padding-bottom: 10px;">In the mean time, check out my previous work to see what ideas come to mind when
                we collaborate. I look forward to working with you.</p>';
    $body .= '<a href="www.reubenpena.com" style="padding: 5px 10px; background: #6b6dff; text-decoration: none; color: white;">Back To Site</a>';
    $body .= '</div></body></html>';

    $headers = "From: reubencode117@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $subject = "Thank You! - Reuben Pena";
    $to_email = $email;


/* --------------------------------------------------------------- */

    $meBody = '<html><body>';
    $meBody .= '<h2>Contact Information From Requester</h2></br>';
    $meBody .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $meBody .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['FirstName']) . " " . strip_tags($_POST['LastName']) . "</td></tr>";
    $meBody .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['Email']) . "</td></tr>";
    $meBody .= "<tr><td><strong>Products:</strong></td><td>" . $graphics . " " . $websites . "</td></tr>";
    $meBody .= "</table>";
    $meBody .= "</body></html>";


    $meHeaders = "From: reubensoapy@gmail.com\r\n";
    $meHeaders .= "MIME-Version: 1.0\r\n";
    $meHeaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $meSubject = "New Message From Website";
    $meTo_email = 'rpena@adviceinteractive.com';

    if (mail($to_email, $subject, $body, $headers)) {
        
        mail($meTo_email, $meSubject, $meBody, $meHeaders);
        $notification = 'Email Sent Successfully.';
        include('contact.php');

    } else {
        $notification = 'Email Sent Unsuccessfully.';
        include('contact.php');
    }

}

?>