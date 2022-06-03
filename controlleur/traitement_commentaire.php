<?php
 session_start();

      include('../Modele/bdd.php')   ;
   if(isset($_POST['Nom']) ){
          
        $Nom = htmlspecialchars($_POST['Nom']);
        $Profil = htmlspecialchars($_POST['Profil']);
        //$Prenom = htmlspecialchars($_POST['Prenom']);
        //$Telephone = htmlspecialchars($_POST['Telephone']);
       $message = htmlspecialchars($_POST['message']);
                            
                   $req=$bdd->prepare('INSERT INTO commentaires(Nom,Commentaire,Image) VALUES(:Nom,:message,:Profil)');
                   $req->execute(array(
                    'Nom'=>$Nom,
                    'message'=>$message,
                    'Profil'=>$Profil
                      
                    ));
                    header('Location:../vue/index.php'); die();
                }
    ?>