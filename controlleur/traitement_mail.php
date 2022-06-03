<?php 
 session_start();
  include '../Modele/bdd.php' ;
if (isset($_POST['email'])) {
 
         $req = $bdd->prepare('SELECT * FROM user WHERE Prenom = ?');
        $req->execute(array($_SESSION['Prenom']));
        $rep = $bdd->prepare('UPDATE user SET Email= ? WHERE Prenom = ?');
        $rep->execute(array($_POST['email'] , $_SESSION['Prenom']));
        header('Location: ../vue/profil.php'); die();
        }
?>