<?php 
 session_start();
 include '../Modele/bdd.php';
if (isset($_POST['prenom'])) {
 
         $req = $bdd->prepare('SELECT * FROM user WHERE Prenom = ?');
        $req->execute(array($_SESSION['Prenom']));
        $rep = $bdd->prepare('UPDATE user SET Prenom= ? WHERE Prenom = ?');
        $rep->execute(array($_POST['prenom'] , $_SESSION['Prenom']));
        $_SESSION['Prenom']=$_POST['prenom'];
        header('Location: ../vue/profil.php'); die();
        }
?>