<?php

$token = "";
if (isset($_GET['token'])) {
    $token = $_GET['token'];
}

    
if (isset($_POST['newPassword']) && isset($_POST['token'])) {

    //Recover new password and token
    $newPassword = $_POST['newPassword'];
    $token = $_POST['token'];
    $hasError = false;
    $changePassword = false;

    // Test Password quality
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $newPassword)) {
        $hasError = true;
        $errorMessage = 'The password does not meet the requirements!';
    }

    //Test if password empty
    if (empty($newPassword)) {
        $hasError = true;
        $errorMessage = "This password is empty";
    }

    if (!$hasError) {
        $newUsers = [];
        //Récupérer le fichier csv users.csv et vérifier qu'il existe (lecture seule)
        if (($usersCSV = fopen("../data/users.csv", "r")) !== FALSE) {
        
            //Get CSV line until end
            while (($userCSV = fgetcsv($usersCSV, null, ";", '"')) !== FALSE) {  
            
                //Test si token dans users.csv
                if (($userCSV[3] === $token)) {
                    $changePassword = true;
    
                    //Modifier le mot de passe
                    $userCSV[2] = md5($newPassword);
    
                    //Enlever le token dans users.csv
                    $userCSV[3] = "";
    
                    //ajouter à la nouvelle table des users
                    $newUsers[] = $userCSV;
                } else {
                    $newUsers[] = $userCSV;
                }
            }
            fclose($usersCSV);
        }
    
        if (!$changePassword) {
            $errorMessage = "Error, password not updated.";
        } else {
            //Récupérer le fichier csv users.csv et vérifier qu'il existe (lecture et écriture)
            if (($usersCSV = fopen("../data/users.csv", "w")) !== FALSE){
            
                //Boucler dans newUsers et ajouter au CSV
                foreach($newUsers as $user){
                    fputcsv($usersCSV, $user, ';');
                }
    
                fclose($usersCSV);
            }
            $confirmationMessage = "Password updated.";
        }
    }
}

