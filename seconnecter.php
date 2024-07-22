<?php
$connexion = new PDO('mysql:host=localhost:8888;dbname=zoo arcadia','root','') 
if ($connexion) {
  echo "Connexion valide."
}

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Arcadia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <a href="index.html"> <span>Zoo</span>Arcadia</a>
        </div>
        <ul class="menu">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="index.html">Habitats</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="seconnecter.php" class="btn-connecter">Se Connecter</a>

        <div class="responsive-menu"></div>
      </header>

    <!-- Se Connecter -->
    
    <div class="container">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>Login</header>
        <form method="POST" action="">
          <input type="text" placeholder="Enter your email">
          <input type="password" placeholder="Enter your password">
          <a href="#">Forgot password?</a>
          <input type="button" class="button" value="Login">
        </form>
        <div class="signup">
          <span class="signup">Don't have an account?
           <label for="check">Signup</label>
          </span>
        </div>
      </div>
      <div class="registration form">
        <header>Signup</header>
        <form action="#">
          <input type="text" placeholder="Enter your email">
          <input type="password" placeholder="Create a password">
          <input type="password" placeholder="Confirm your password">
          <input type="button" class="button" value="Signup">
        </form>
        <div class="signup">
          <span class="signup">Already have an account?
           <label for="check">Login</label>
          </span>
        </div>
      </div>
    </div>

    <script>
        var toggle_menu = document.querySelector('.responsive-menu');
        var menu = document.querySelector('.menu');
        toggle_menu.onclick= function(){
             toggle_menu.classList.toggle('active');
             menu.classList.toggle('responsive')
        }
    </script>


</body>
</html>