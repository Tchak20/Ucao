<?php
    include('menu.php'); 
  ?>
<div style="padding: 50px;" >
    <p class="meta d-flex">
	<span><h3 style="text-align:center;"> EGEI (Ecole de Génie Electrique et Informatique) </h3></span>
	</p>
<div>
    <p>La formation s’effectue directement après le bac. Elle s’adresse aux titulaires du bac général plutôt axé sur les spécialités numérique et sciences informatiques ou sciences de l’ingénieur par exemple, mais aussi mathématiques.</p>
</div>

<?php 
    $req=$bdd->query('SELECT * FROM egei');

    while($com = $req->fetch()) 
  {

  ?>
<div  style="display: flex;">
    	<img src=" <?php echo $com['Profil'];   ?>" alt=""  style="width: 400px;height: 350px; margin: 10px; float:left;">
  
    <div style="width: 500px; margin: 50px;"> <h3> <?php echo $com['Nom'] ; ?></h3>
     <br>  <p ><?php echo $com['Description'] ; ?> </p> </br>
    </div>
    
</div>
<?php
        }

  ?>
  </div>
  
  <?php include 'footer.php'; ?>
</body>
</html>
