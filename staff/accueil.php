<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <h1>Sakila staf</h1>
        <div id="container">
                <!-- zone de connexion -->
                
                <form action="verification.php" method="POST">
                    
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br><br>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required><br><br>

                    <input type="submit" id='submit' value='LOGIN' >
                    <?php
                    // rajouter le code qui permet de se diriger vers la page films dés connexion
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    ?>
                </form>
            </div>
    </body>
</html> 