<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $hasError = false;

    // Test username quality
    if (!preg_match('/^()[0-9A-Za-z]{5,12}$/', $username)) {
        $hasError = true;
        $errusername = 'Username without Accents, spécial caraters and spaces please!';
    }

    //Test if username empty
    if (empty($username)) {
        $hasError = true;
        $errusername = "This username is empty";
    }

    // Test Password quality
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        $hasError = true;
        $errpsw = 'the password does not meet the requirements!';
    }

    //Test if password empty
    if (empty($password)) {
        $hasError = true;
        $errpsw = "This password is empty";
    }

    // Test email consistency
    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $hasError = true;
        $errmail = 'This is an invalid email.';
    }

    //Test if email empty
    if (empty($email)) {
        $hasError = true;
        $errmail = "This e-mail is empty";
    }

    //Get csv file users.csv
    if (($List_CSV = fopen("../data/users.csv", "r")) !== FALSE) {
        //Read CSV file until the end
        while (($userCSV = fgetcsv($List_CSV, null, ";")) !== FALSE) {

            //Test if email in users.csv already exists
            if ($userCSV[1] === $email) {
                $hasError = true;
                $err_mail_exists = 'This email already has an account, please go to login';
                fclose($List_CSV);
                break;
            }

            //Test if username in users.csv already exists
            if ($userCSV[0] === $username) {
                $hasError = true;
                $err_usr_exists = 'This username already exists, please go to login';
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

        //Redirection to login
        header("Location: ../templates/login.php");
        exit();
    }
}
