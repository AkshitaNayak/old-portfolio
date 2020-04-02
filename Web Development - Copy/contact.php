<?php
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    // $email_from = 'nayakakshita5@gmail.com'; yaha kya dalte hai? thik to likhi hai pakka?
    $email_subject = "New form Submission";
    $email_body = "User Email : $visitor_email.\n".
                  "User Message : $message.\n";

    $to = "nayakakshita5@gmail.com";
    $headers = "From : $email_from \r\n";
    $headers = "Reply-To : $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");         
?>    