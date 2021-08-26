<?php

class DB { 
    $servername = 'localhost';
    $bdd = 'sakila';
    $username = 'root';
    $password = '';

   public function __construct($s, $n, $p){
      $this->servername = $s;
      $this->username = $n;
      $this->userword = $w;
   }
            
   /*-------------------------Connexion à la base de donnée "sakila"---------------------------*/
   $conn = new mysqli($servername, $username, $password); 
      
     
   if($conn->connect_error){
      die('Erreur : ' .$conn->connect_error);
   }       
   echo 'Successful connection ! <br><br><br>';

}



  

         
          
            