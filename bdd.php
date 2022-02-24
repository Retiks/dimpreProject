<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    $db_username = '246048';
    $db_password = 'U9au634HkNfE';
    $db_name     = 'portfolionavarrolucas_database';
    $db_host     = 'mysql-portfolionavarrolucas.alwaysdata.net';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM users where 
              usernames = '".$username."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0)
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: connexion.php?erreur=1');
        }
    }
    else
    {
       header('Location: connexion.php?erreur=2');
    }
}
else
{
   header('Location: connexion.php');
}
mysqli_close($db);
?>