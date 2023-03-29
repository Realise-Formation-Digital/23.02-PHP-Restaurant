

<?php
    
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


// check if email or username already exists in ../data/users.csv

    //Get csv file users.csv
    if (($usersCSV = fopen("../data/users.csv", "r")) !== FALSE){
    
        //Get CSV line until end
        while (($userCSV = fgetcsv($usersCSV, null, ";")) !== FALSE){  
          
          //Test if username and password in users.csv
          if(($userCSV[0] === $username) || ($userCSV[1] === $email)){
              $err_usr_exists = 'You already have an account';
              break;
          }  
        }
        fclose($usersCSV);
    }


// Test Password quality
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
            $errpsw = 'the password does not meet the requirements!';
        
        } 
// Test email consistency
        else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            $errmail = 'This is an invalid email.';
            
        } else {
            $data = [$username, $email, md5($password), time()];
            $fp = fopen('../data/users.csv', 'a');
            fputcsv($fp, $data, ';');
            fclose($fp);        
        }  
    }

?>