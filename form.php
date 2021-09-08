<?php

//connection to the database (line 4)
include 'classes/db.php';

// below is used to create a new object (2) child of the Datase class
$laBase= new Database;

//below defines the variables of the customer table of the Sakila database
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$e_mail = $_POST['e_mail'];




// ci-dessous permet de récupérer les donnée d'un formulaire reservation et rajouter dans la base de donnée Sakila
 try {
     $sth = $laBase->prepare("
             INSERT INTO sakila.customer (first_name, last_name, email)
             VALUES (?, ?, ?)");
         $sth->bind_param('sss', $first_name, $last_name, $e_mail);
         $sth->execute();
    // On renvoie l'utilisateur vers la page de films et cela vaut aussi que le formulaire à bien été prit en compte
     header("Location:films.php");
 }
 catch(PDOException $e){
     echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
 }

