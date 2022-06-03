<?php
session_start();
include('../Modele/bdd.php');

    if(isset($_POST['Prenom']) && isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['Telephone']))
    {
        
        
        $Prenom = htmlspecialchars($_POST['Prenom']);
        $Email = htmlspecialchars($_POST['Email']);
        $Password = htmlspecialchars($_POST['Password']);
        $check = $bdd->prepare('SELECT * FROM user WHERE Prenom=:Prenom and Email=:Email ');
        $check->execute(array('Prenom'=> $Prenom,'Email'=>$Email));
        $data = $check->fetch();    
       }

       $_SESSION['Prenom']=$_POST['Prenom'];
       $_SESSION['Status']=$data['Status'];
         if ($data) {
         
               if ($Password==$data['Password']){
                    header('Location:../vue/index.php'); die();
               }else{  header('Location:../vue/connexion.php'); die();}
         }else{  header('Location:../vue/connexion.php'); die();} 
    
?>