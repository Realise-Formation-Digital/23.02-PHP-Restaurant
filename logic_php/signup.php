

<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Test Password quality
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
        $errpsw = 'the password does not meet the requirements!';
    }

    // Test email consistency
    else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $errmail = 'This is an invalid email.';
    }


    //Get csv file users.csv
    $List_CSV = fopen("../data/users.csv", "r");
    if (($List_CSV) !== FALSE) {
        //Read CSV file until the end

        $userCSV = fgetcsv($List_CSV, null, ";");

        while (($userCSV) !== FALSE) {


            //Test if email in users.csv already exists
            if ($userCSV[1] === $email) {
                $err_mail_exists = 'This email already has an account';
                echo ("email");
                $nok = true;
                fclose($List_SV);
                break;
            }

            //Test if username in users.csv already exists
            else if ($userCSV[0] === $username) {
                $err_usr_exists = 'This username already exists';
                echo ("username");
                $nok = true;
                fclose($List_CSV);
                break;
            }
        }
        

    } else {
        $data = [$username, $email, md5($password)];
        $fp = fopen('../data/users.csv', 'a');
        fputcsv($fp, $data, ';');
        fclose($fp);
    }
}
