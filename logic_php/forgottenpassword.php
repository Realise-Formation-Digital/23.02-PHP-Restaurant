<?php

use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

function sendEmail($email, $username) {  
    $mail = new PHPMailer();
    $mail->isSendmail();
    $mail->addAddress($email, $username);
    $mail->setFrom('info@resto-realise.ch', 'Resto-Réalise');
    $mail->addReplyTo('info@resto-realise.ch', 'Resto-Réalise');
    $mail->isHTML(true);
    $mail->Subject = "New password in Resto-Réalise";
    $mail->Body = 'Mail body in HTML<br>';
    $mail->AltBody = 'This is the plain text version of the email content';
    if (!$mail->send()) {
        echo("Email coudn't be sent $mail->ErrorInfo");
    }
}

if (isset($_POST['usernameEmail'])) {

    //Recover username or email
    $usernameEmail = $_POST['usernameEmail'];
    $userExist = false;

    $newUsers = [];
    //Récupérer le fichier csv users.csv et vérifier qu'il existe (lecture seule)
    if (($usersCSV = fopen("../data/users.csv", "r")) !== FALSE) {
    
        //Get CSV line until end
        while (($userCSV = fgetcsv($usersCSV, null, ";", '"')) !== FALSE) {  
        
            //Test si username ou e-mail dans users.csv
            if (($userCSV[0] === $usernameEmail) || ($userCSV[1] === $usernameEmail)) {
                $userExist = true;

                //Ajouter dans la colonne forgotten_password_token un token
                $token = bin2hex(random_bytes(20));
                $userCSV[3] = $token;

                //ajouter à la nouvelle table des users
                $newUsers[] = $userCSV;

                //envoyer un email avec l'adresse: http://127.0.0.1:8999/templates/newpassword.php?token=$token
                sendEmail($userCSV[1], $userCSV[0]);
            } else {
                $newUsers[] = $userCSV;
            }
      }
      fclose($usersCSV);
    }

    if (!$userExist) {
        $errorMessage = "User does not exist.";
    } else {
        //Récupérer le fichier csv users.csv et vérifier qu'il existe (lecture et écriture)
        if (($usersCSV = fopen("../data/users.csv", "r+")) !== FALSE){
        
            //Boucler dans newUsers et ajouter au CSV
            foreach($newUsers as $user){
                fputcsv($usersCSV, $user, ';', '"');
            }

            fclose($usersCSV);
        }

        //ajouter un message de confirmation
        $confirmationMessage = "An e-mail has been sent for a new password.";

    }
}
