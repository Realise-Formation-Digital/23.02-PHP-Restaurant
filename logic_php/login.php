<?php

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['username'], false);
    $isConnected = false;

    if (($usersCSV = fopen("../data/users.csv", "r")) !== FALSE){
    
      while (($userCSV = fgetcsv($usersCSV, 1000, ";")) !== FALSE){   
        if(($userCSV[0] === $username) && ($userCSV[2] === $password)){
            $_SESSION["isConnected"] = true;
            $isConnected = true;
            break;
        }  
      }
      fclose($usersCSV);
    }

    if (!$isConnected) {
        unset($_SESSION["isConnected"]);
        $errorMessage = "<strong>Login error !</strong> The username or the password are incorrect.";
    } else {
        echo("<script>window.location.replace('../templates/private.php')</script>");
        exit();
    }

}
