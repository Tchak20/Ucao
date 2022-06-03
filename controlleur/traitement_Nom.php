<?php 
session_start();
include '../Modele/bdd.php';
if (isset($_POST['Nom'])) {
 
         $req = $bdd->prepare('SELECT * FROM user WHERE Prenom = ?');
        $req->execute(array($_SESSION['prenom']));
        $rep = $bdd->prepare('UPDATE user SET Nom= ? WHERE Prenom = ?');
        $rep->execute(array($_POST['Nom'] , $_SESSION['Prenom']));
        header('Location: ../vue/profil.php'); die();
        }
?>