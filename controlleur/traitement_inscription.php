<?php
 session_start();

      include('../Modele/bdd.php')   ;
   if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['Email']) && isset($_POST['Telephone']) && isset($_POST['Password']) && isset($_POST['Passwordd'])){
          
        $Nom = htmlspecialchars($_POST['Nom']);
        $Prenom = htmlspecialchars($_POST['Prenom']);
        $Email = htmlspecialchars($_POST['Email']);
        $Telephone = htmlspecialchars($_POST['Telephone']);
        $Password = htmlspecialchars($_POST['Password']);
        $Passwordd = htmlspecialchars($_POST['Passwordd']);
        
        $check = $bdd->prepare('SELECT * FROM user WHERE Email = ?');
        $check->execute(array($Email));
        $data = $check->fetch();
        if($_POST['admin']=="pass"){
            $statut=1;
        }else{$statut=0;}
        

        $Email = strtolower($Email);  
        if(!$data){ 
            if(filter_var($Email, FILTER_VALIDATE_EMAIL)){ 
                if($Password == $Passwordd){
                            
                   $req=$bdd->prepare('INSERT INTO user(Nom,Prenom,Email,Contact,Password,Status) VALUES(:Nom,:Prenom,:Email,:Contact,:Password,:Status)');
                   $req->execute(array(
                    'Nom'=>$Nom,
                    'Prenom'=>$Prenom,
                    'Email'=>$Email,
                    'Contact'=>$Telephone,
                    'Password'=>$Password,
                    'Status'=>$statut
                      
                    ));
                   header('Location:../vue/connexion.php');      
                }else{ header('Location:../vue/inscription.php');}
            }else{ header('Location:../vue/inscription.php');}

        }else{ echo "bastu";}
    }else{ echo "bastou";}
    ?>