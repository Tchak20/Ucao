<?php
 //session_start();
  include 'menu.php' ?>
    <?php 
  $req=$bdd->prepare('SELECT * FROM user where Prenom=?');
  $req->execute(array($_SESSION['Prenom'] ));
  while ($prof=$req->fetch()) { 
  ?>
   <div class="w-75 p-3 bg-body" style="margin:auto;">
        <div class="w-75 p-3 h-100 " style="margin-left: 350px;">
            <img class="rounded-pill "  src="<?php echo $prof['Profil']; ?>" height="100" width="100" >
             <p style="margin-left: 30px;">
               <?php echo "<h3>". 
                $prof['Nom']."</h3>  <h3>".$prof['Prenom'] ."</h3>"; ?>  
             </p>
            

        </div><br>
             
        <div class="w-75 p-3">
             <p>  <strong> Telephone:</strong>
               <?php echo $prof['Contact']." "; ?>
               </p>
               <p>  <strong> Email:</strong>
               <?php echo $prof['Email']." "; ?>
               </p>
             
        </div>
        <h3>Modification</h3>
        <form class="col-md-4" method="post" action="../controlleur/traitement_Nom.php">
            <input type="text" class="form-control" name="Nom" placeholder="Nom" required><br>
            <button type="submit" class="btn btn-primary" name="N_mod"> Modifier</button><br>
        </form><br>
        <form  class="col-md-4" method="post" action="../controlleur/traitement_pre.php">
            <input type="text" class="form-control" name="prenom" placeholder="Prenom" required><br>
            <button type="submit" class="btn btn-primary" name="P_mod"> Modifier</button><br>
        </form><br>
       
        <form  class="col-md-4" method="post" action="../controlleur/traitement_Tel.php" >
            <input type="text" class="form-control" name="Tel" placeholder="Telephone" required><br>
            <button type="submit" class="btn btn-primary" name="T_mod"> Modifier</button><br>
        </form><br>
        <form  class="col-md-4" method="post" action="../controlleur/traitement_mail.php">
            <input type="text" class="form-control" name="email" placeholder="Email" required><br>
            <button type="submit" class="btn btn-primary" name="E_mod"> Modifier</button>
        </form><br>
        <form class="col-md-4" method="post" action="../controlleur/traitement_fil.php" enctype="multipart/form-data"> 
           
             <input type="file" class="form-control" name="avatar"> <br>
              <button type="submit" class="btn btn-primary" name="P_mod"> Modifier</button><br>
        </form> 
        
   </div>
  <?php 
}
  ?>
  <?php include 'footer.php'; ?>
  </body>
 </html>

