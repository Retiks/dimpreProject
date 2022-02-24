<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <div id="container">
      <form action="bdd.php" method="POST">
        <h1>Connexion</h1>       
        <label><b>Nom d'utilisateur : </b></label>
        <input type="text" id="mon_input" onchange="check()" onkeypress="verifierCaracteres(event); return false;" placeholder="Entrer le nom d'utilisateur" name="username" required>
        <br>
        <br>
        <label><b>Mot de passe : </b></label>
        <input type="password" id="mon_input2" onchange="check2()" onkeypress="verifierCaracteres2(event); return false;" placeholder="Entrer le mot de passe" name="password" required>
        <br>
        <br>
        <input type="submit" id='submit' value='Login' >
        <?php
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