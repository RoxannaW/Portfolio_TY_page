<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'roxanna_wijtsma@outlook.com';
    $email_subject = 'new form submission';
    $email_body = 'user name: $name.\n'.
                    'user email: $visitor_email.\n'.
                    'user message $message.\n';


    $to = 'roxanna_wijtsma@outlook.com';

    $headers = 'from: $email_from \r\n';

    mail($to, $email_subject, $email_body, $headers);

    header('location: index.html');
