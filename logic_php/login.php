<?php

if (isset($_POST['username']) && isset($_POST['password'])){

    //Recover username and password
    $username = $_POST['username'];
    $password = md5($_POST['username'], false);

    //set isConnected as false to begin
    $isConnected = false;

    //Get csv file users.csv
    if (($usersCSV = fopen("../data/users.csv", "r")) !== FALSE){
    
      //Get CSV line until end
      while (($userCSV = fgetcsv($usersCSV, null, ";")) !== FALSE){  
        
        //Test if username and password in users.csv
        if(($userCSV[0] === $username) && ($userCSV[2] === $password)){
            $_SESSION["isConnected"] = true;
            $isConnected = true;
            break;
        }  
      }
      fclose($usersCSV);
    }

    //If not connected, unset session variable isConnected et initialiser un message d'erreur
    if (!$isConnected) {
        unset($_SESSION["isConnected"]);
        $errorMessage = "<strong>Login error !</strong> The username or the password are incorrect.";
    
    //If connected, redirect to page private
    } else {
        echo("<script>window.location.replace('../templates/private.php')</script>");
        exit();
    }

}
