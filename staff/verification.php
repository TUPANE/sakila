	
<?php

include 'classes/db.php';

// ci-dessous permet de créer un nouveau objet(3) enfant de la classe Datase ()
$laBase= new Database;

// $first_name = $_POST['first_name '];
// $last_name = $_POST['last_name'];
 $username = $_POST['username'];
 $password = $_POST['password'];
// $email = $_POST['email'];


// ci-dessous le code qui permet de se vérifier si le personnel existe dans la base de donnée sakila et qu'il a le bon mot de passe
if (isset($_POST['username'])){
    // $username = stripslashes($_REQUEST['username']);
    // $username = mysqli_real_escape_string($laBase, $username);
    // $password = stripslashes($_REQUEST['password']);
    // $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT username FROM `sakila.staff` WHERE username='$username' and password='".hash('sha256', $password)."'";
    // $result = mysqli($laBase,$query) or die(mysql_error());
    // $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['username'] = $username;
        header("Location: films.php");
    }else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }

