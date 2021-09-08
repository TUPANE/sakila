	
<?php

// permet de se connecter à la BD sakila (ligne 5 à 35)
class Database { 
  public $servername = 'localhost';
  public $bdd = 'sakila';
  public $username = 'root';
  public $password = '';

  public $connection = null;

 
  private function connect()
  {
     $this->connection = new mysqli($this->servername, $this->username, $this->password);
  }

  public function query($aQuery)
  { 
     if( $this->connection == null )
       $this->connect();

     return $this->connection->query($aQuery);
  }

  public function prepare($aQuery)
  {
     if( $this->connection == null )
       $this->connect();

     return $this->connection->prepare($aQuery);
  }
  
}

// ci-dessous permet de créer un nouveau objet(3) enfant de la classe Datase ()
$laBase= new Database;

 $username = $_POST['username'];
 $password = $_POST['password'];
 $username = $_POST['username'];



// ci-dessous le code qui permet de  vérifier si le personnel existe dans la base de donnée sakila et qu'il a le bon mot de passe
if (isset($_POST['username'])){
     $username = stripslashes($_REQUEST['username']);
     $username = mysqli_real_escape_string($laBase, $username);
     $password = stripslashes($_REQUEST['password']);
     $password = mysqli_real_escape_string($conn, $password);
     $query = "SELECT username FROM `sakila.staff` WHERE username='$username' and password='".hash('sha256', $password)."'";
     $result = mysqli($laBase,$query) or die(mysql_error());
     $rows = mysqli_num_rows($result);
     if($rows==1){
         $_SESSION['username'] = $username;
         header("Location: films.php");
     }else{
       $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
     }
   }


