<?php

//Get csv file messages.csv
$messages = [];
if (($messagesCSV = fopen("../data/messages.csv", "r")) !== FALSE){
    
    //Get CSV line until end
    while (($messageCSV = fgetcsv($messagesCSV, null, ";")) !== FALSE){  
      $messages[] = $messageCSV;
    }

    fclose($messagesCSV);
  } 
  
 
