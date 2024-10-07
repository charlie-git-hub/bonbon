<?php
if (isset($_POST['valid'])){
    $error=0;
    if (empty($_POST['fname'] || $_POST['name'] || $_POST['mail'] || $_POST['password'])){
        $error=1;
        $affichage_erreur .='Tous les champs sont obligatoires<br>';
    } else{
        $nom=$_POST['fname'];
        $prenom=$_POST['name'];
        $mail=$_POST['mail'];
        $mdp=$_POST['password'];
        $date=date('Y-m-d-H');
    }
}