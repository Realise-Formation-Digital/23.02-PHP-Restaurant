<?php

require_once("./services/testinput.php");

/*Quand le bouton submit activé  --
1) si il n'y a aucune erreurs - affiche le message de confirmation
2) si un champ ou plusieurs n'est pas rempli - affiche message d'erreur à chaque champ non-remplis*/   
if (isset($_POST['submit'])) {
    $hasError = false;
    $data = [];

    /*verifie si champ "name" a été rempli 
    et enregistre la donnée dans CSV*/ 
    if (isset($_POST['name'])) {
        $name = test_input($_POST['name']);
        $data[] = $name;
    
    /*si le champ n'est pas rempli, message d'erreur*/
        if(empty($name)) {
            $nameError = "Ce champ est obligatoire";
            $hasError = true;
        } 
    }

    /*si champ "email" rempli
    enregistre la donnée dans CSV*/
    if (isset($_POST['email'])) {
        $email = test_input($_POST['email']);
        $data[] = $email;

        /*validation de structure de l'e-mail*/
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "E-mail non valide";
        }


        /*si le champ n'est pas rempli, message d'erreur*/
        if(empty($email)) {
            $emailError = "Ce champ est obligatoire";
            $hasError = true;
        }
    }

    /*si champ "sujet" rempli
    enregistre la donnée dans CSV*/
    if (isset($_POST['sujet'])) {
        $sujet = test_input($_POST['sujet']);
        $data[] = $sujet;

        /*si le champ n'est pas rempli, message d'erreur*/
        if(empty($sujet)) {
            $sujetError = "Ce champ est obligatoire";
            $hasError = true;
        }
    }

    /*si champ "message" rempli
    enregistre la donnée dans CSV*/
    if (isset($_POST['message'])) {
        $message = test_input($_POST['message']);
        $data[] = $message;
        

        /*si le champ n'est pas rempli, message d'erreur*/
        if(empty($message)) {
            $messageError = "Ce champ est obligatoire";
            $hasError = true;
        }
    }

    /*si pas pas d'erreurs envoyer les datas dans le csv*/
    if (!$hasError) {
        $data = [$name, $email, $sujet, $message];
        $fp = fopen('./data/messages.csv','a');
        fputcsv($fp, $data,';');
        fclose($fp);
        $confirmation = "Merci de votre message";
    } 
}