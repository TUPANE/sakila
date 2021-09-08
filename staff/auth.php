
<html>
    <head>
       <meta charset="utf-8">
        
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

                    <button href="films.php" class="button">Login</button> 
                </form>
            </div>
    </body>
</html> 