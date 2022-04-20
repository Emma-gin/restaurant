<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && (!empty($_POST)) && isset($_POST['submit'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = 'test subject';
    // $date = date("d-m-Y");

    $from = $email;

    //change email
    $to = "destinataire@gmail.com";
    $data = "<html><body><div><div>Name: $lastname</div><div>Prénom: $firstname</div><div>Email: $email</div><div>message: $message</div></div></body></html>";
    $headers  = "MIME-Version: 1.0 \n";
    $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
    $headers .= "From: $from  \n";
    // $headers .= "Disposition-Notification-To: $from  \n";



    if(mail($to, $subject, $data, $headers)) {
        header('Location: index.html'); 
    } else {
        echo 'Erreur lors de l\'envoi de mail';
    }
}

?>