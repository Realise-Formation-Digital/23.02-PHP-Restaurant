<?php

if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"]) { 

  //Get csv file messages.csv
  $messages = [];
  if (($messagesCSV = fopen("../data/messages.csv", "r")) !== FALSE){
      
      //Get CSV line until end
      while (($messageCSV = fgetcsv($messagesCSV, null, ";")) !== FALSE){  
        $messages[] = $messageCSV;
      }

      fclose($messagesCSV);
    } 
  
} else {
  header('HTTP/1.0 403 Forbidden');
  echo 'Access forbidden!';
  exit();
}
 
