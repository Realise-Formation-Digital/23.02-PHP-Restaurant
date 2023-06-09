<?php

use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

/**
 * Fonction pour envoyer un e-mail sur maildev (http://127.0.0.1:1080)
 */
function sendEmail($email, $username, $token) {  
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "maildev";
    $mail->Port = 1025;
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->addAddress($email, $username);
    $mail->setFrom('info@resto-realise.ch', 'Resto-Réalise');
    $mail->addReplyTo('info@resto-realise.ch', 'Resto-Réalise');
    $mail->isHTML(true);
    $mail->Subject = "New password in Resto-Réalise";
    $mail->Body =   "<strong>Hello $username,</strong><br><br>
                    If you want a new password, go to <a href=\"http://127.0.0.1:8999/templates/newpassword.php?token=$token\">http://127.0.0.1:8999/templates/newpassword.php?token=$token</a><br><br>
                    Your Resto-Réalise...";
    $mail->AltBody = "Hello $username, if you want a new password, go to http://127.0.0.1:8999/templates/newpassword?token=$token";
    if (!$mail->send()) {
        return $mail->ErrorInfo;
    }

    return "";
}

if (isset($_POST['usernameEmail'])) {

    //Recover username or email
    $usernameEmail = $_POST['usernameEmail'];
    $userExist = false;
    $emailError = "";

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
                $emailError = sendEmail($userCSV[1], $userCSV[0], $token);
            } else {
                $newUsers[] = $userCSV;
            }
      }
      fclose($usersCSV);
    }

    if (!$userExist) {
        $errorMessage = "User does not exist.";
    } elseif($emailError !== "") {
        $errorMessage = "<strong>Email coudn't be sent</strong> $emailError";
    } else {

        file_put_contents("../data/users.csv", "");
        //Récupérer le fichier csv users.csv et vérifier qu'il existe (lecture et écriture)
        if (($usersCSV = fopen("../data/users.csv", "w")) !== FALSE){
        
            //Boucler dans newUsers et ajouter au CSV
            foreach($newUsers as $user){
                fputcsv($usersCSV, $user, ';');
            }

            fclose($usersCSV);
        }

        //ajouter un message de confirmation
        $confirmationMessage = "An e-mail has been sent for a new password.";

    }
}
