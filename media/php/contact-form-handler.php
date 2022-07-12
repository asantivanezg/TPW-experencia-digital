<?php 
    $name= $_POST['name'];
    $visitor_email = $_POST['email'];
    $message= $_POST['message'];

    $email_from = 'EasyTurorials@avinashk.com';

    $email_subject= "Nuevo Mensaje";

    $email_body= "User Name: $name. \n".

             "User Email: $visitor_email. \n".

             "User message: $message. \n";

    $to = "peterpacheco234@hotmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $visitor_from \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: /contacto.html");
  
?>