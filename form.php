<?php

include 'classes/db.php';
$form = connect();

$title = $_POST["title"];
$date = $_POST["day"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$adress= $_POST["adress"];
$e_mail = $_POST["e_mail"];
$phone = $_POST["telephone"];


$sql = "INSERT INTO customer (title, first_name, last_name, adress, e-mail, phone) VALUES (:title, :first_name, :last_name, :adress, :e-mail, :phone)";
if (mysqli ($form, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
//On renvoie l'utilisateur vers la page de remerciement
//  header("Location:validate.html");

mysqli_close($conn);




// try {
//     // cidessous permet d'insérer dans la base de donnée sakila
//     $sth = $form ->prepare("
//             INSERT INTO form(title, first_name, last_name, adress, e-mail, phone)
//             VALUES(:title, :first_name, :last_name, :adress, :e-mail, :phone)");
//         $sth->bindParam(':title',$title);
//         $sth->bindParam(':first_name',$first_name);
//         $sth->bindParam(':last_name',$last_name);
//         $sth->bindParam(':adress',$adress);
//         $sth->bindParam(':e-mail',$e_mail);
//         $sth->bindParam(':phone',$phone);
//         $sth->execute();

//     //On renvoie l'utilisateur vers la page de remerciement
//     header("Location:form-merci.html");
// }
// catch(PDOException $e){
//     echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
// }

// ci-dessous requête de formulaire de reservation faite par un personnel de SAKILA
// class Film { 
//     public $title;
//     public $rental_duration;

//     public $connection = null;

//     private function connect()
//     {
//        $this->connection = new form( $this->user_name, $this->user_pass);
//     }
// }