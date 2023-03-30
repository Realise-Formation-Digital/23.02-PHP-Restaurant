

<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];


    // Test Password quality
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        $hasError = true;
        $errpsw = 'the password does not meet the requirements!';
    }

    // Test email consistency
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $hasError = true;
        $errmail = 'This is an invalid email.';
    }


    $hasError = false;
    //Get csv file users.csv
    if (($List_CSV = fopen("../data/users.csv", "r")) !== FALSE) {
        //Read CSV file until the end
        while (($userCSV = fgetcsv($List_CSV, null, ";")) !== FALSE) {

            //Test if email in users.csv already exists
            if ($userCSV[1] === $email) {
                $hasError = true;
                $err_mail_exists = 'This email already has an account';
                fclose($List_CSV);
                break;
            }

            //Test if username in users.csv already exists
            if ($userCSV[0] === $username) {
                $hasError = true;
                $err_usr_exists = 'This username already exists';
                fclose($List_CSV);
                break;
            }
        } 
    }

    if (!$hasError) {
        $data = [$username, $email, md5($password), ""];
        $fp = fopen('../data/users.csv', 'a');
        fputcsv($fp, $data, ';');
        fclose($fp);
    }
}
