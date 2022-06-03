<?php 
 session_start();
 include '../Modele/bdd.php';
if (isset($_POST['Tel'])) {
 
         $req = $bdd->prepare('SELECT * FROM user WHERE Prenom = ?');
        $req->execute(array($_SESSION['Prenom']));
        $rep = $bdd->prepare('UPDATE user SET Contact= ? WHERE Prenom = ?');
        $rep->execute(array($_POST['Tel'] , $_SESSION['Prenom']));
        header('Location: ../vue/profil.php'); die();
        }
?>