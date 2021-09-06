<?php

include 'classes/db.php';

// ci-dessous permet de créer un nouveau objet(2) enfant de la classe Datase
$laBase= new Database;

$title = $_POST["title"];
$date = $_POST["date"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$adress= $_POST["adress"];
$e_mail = $_POST["e_mail"];
$phone = $_POST["telephone"];

// ci-dessous permet de récupérer les donnée d'un formulaire reservation et rajouter dans la base de donnée Sakila
 try {
     $sth = $laBase->prepare("
             INSERT INTO sakila.customer (first_name, last_name, email)
             VALUES (?, ?, ?)");
         $sth->bind_param('sss', $first_name, $last_name, $e_mail);
         $sth->execute();
    //On renvoie l'utilisateur vers la page de films et cela vaut aussi que le formulaire à bien été prit en compte
     header("Location:films.php");
 }
 catch(PDOException $e){
     echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
 }
