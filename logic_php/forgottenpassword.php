<?php

if (isset($_POST['usernameEmail'])){

    //Recover username or email
    $usernameEmail = $_POST['usernameEmail'];
    $userExist = false;

    $newUsers = [];
    //Récupérer le fichier csv users.csv et vérifier qu'il existe
    if (($usersCSV = fopen("../data/users.csv", "r")) !== FALSE){
    
        //Get CSV line until end
        while (($userCSV = fgetcsv($usersCSV, null, ";", '"')) !== FALSE){  
        
            //Test if username or e-mail users.csv
            if(($userCSV[0] === $usernameEmail) || ($userCSV[1] === $usernameEmail)){
                $userExist = true;

                //Ajouter dans la colonne forgotten_password_token un token
                $token = bin2hex(random_bytes(20));
                $userCSV[3] = $token;
                $newUsers[] = $userCSV;

                //envoyer un email avec l'adresse: http://127.0.0.1:8999/templates/newpassword.php?token=$token
                $isEmailSent = mail(
                    $userCSV[1],
                    "Create new password in Resto-Réalise",
                    "https://127.0.0.1:8999/templates/newpassword.php?token=".$token,
                );
            } else {
                $newUsers[] = $userCSV;
            }
      }
      fclose($usersCSV);
    }

    

    if(!$userExist) {
        $errorMessage = "User does not exist.";
    } 
    
    /*
    elseif(!$isEmailSent) {
        $errorMessage = "Email coudn't be sent";
    } 
    */
    
    else {
        //Récupérer le fichier csv users.csv et vérifier qu'il existe
        if (($usersCSV = fopen("../data/users.csv", "r+")) !== FALSE){
        
            foreach($newUsers as $user){
                fputcsv($usersCSV, $user, ';', '"');
            }

            fclose($usersCSV);
        }
    }


}
