

<?php   
session_start();
include '../Modele/bdd.php';
    $msge = '';  
    $req = $bdd->prepare('SELECT * FROM user WHERE Prenom = ?');
    $req->execute(array($_SESSION['Prenom']));
    $data = $req->fetch();
    if (!empty($_FILES['avatar'])) {
        $file_name = $_FILES['avatar']['name'];
        $file_extension= strrchr($file_name, ".");
        $file_tmp = $_FILES['avatar']['tmp_name'];
        $url = '../vue/images/'.$file_name;
        $ext_aut = array('.png','.PNG','.jpg','.JPG','.jpeg','.JPEG','.gif','.GIF');
        if (in_array($file_extension, $ext_aut)) {
            if (move_uploaded_file($file_tmp, $url)) {
                $rep = $bdd->prepare('UPDATE user SET Profil = ? WHERE Prenom = ?');
                $rep->execute(array($url , $_SESSION['Prenom']));
                header('Location: ../vue/profil.php'); die();
                
            }
            else{
                
               echo $msge = '<div class=" text-center alert alert-danger col-md-12">
                    Une erreur s\'est produite reprenez svp  !
                </div>';
            }
        }
        else{
            
           echo $msge = '<div class=" text-center alert alert-danger col-md-12">
                    Extension non valide 
                </div>';
         }
    }
     else{
            
           echo $msge = '<div class=" text-center alert alert-danger col-md-12">
                    Extension non valide  !
                </div>';
         }
?>    