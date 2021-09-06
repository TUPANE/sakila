<?php
  // ligne 3 à 4 création d'un nouveau objet(1) enfant de la classe Datase et connection vers la base de donnée
require 'classes/db.php';
$laBase = new Database;

// ligne 9 à 10 requête vers la base de donné sakila
$query = "SELECT title, description, (select return_date from sakila.rental where film_id = inventory_id order by rental_date desc limit 1)
as return_date FROM sakila.film";

// ligne 12 à 31 afficher dans la bare de recherche les titre de film 
if (isset($_GET["title"]))
{
  $aSearch = $_GET["title"];
  $query .= " where title like '%".$aSearch."%'"; 
}


$result = $laBase->query($query);
 
// ligne 21 à 46 permet d'afficher le tableau
echo "<h1>Liste des films";

echo  "</h1>

<form action='films.php'>
  <label for=site-search>Search:</label>
  <input name='title' 
       aria-label=Search through site content>

  <button>Ok</button><br><br>
</form>


<table border=2>
  <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Return_date</th>
          <th></th>

          
                         
      </tr>
  </thead>
";
// ligne 46 à 60 permet de rechercher dans la base de donnée et afficher sur le tableau designer ci-dessus
foreach( $result->fetch_all(MYSQLI_ASSOC) as $obj)
{
   echo "
        
          <tbody>
              <tr>
                <td>".$obj["title"]."</td> 
                <td>".$obj["description"]."</td>
                <td>".$obj["return_date"]." </td>
                <td><button href='reserv.php' class='button'>Reserve</button> <button>Amended</button></td>
           
              </tr>
          </tbody>
  ";
}

echo "
</table> 
";
