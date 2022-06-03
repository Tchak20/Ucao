<?php
    include('menu.php');
    
  ?>

<div style="padding: 50px;">
    <p class="meta d-flex">
    	<span><h3 style="text-align:center;"> FSAE (Faculté des Sciences de l'Agronomie et de l'Environnement) </h3></span>
  	</p>
<div>
    <p>Le département droit et économie se charge de proposer de nouvelles grilles de formation originales, dont l'objet est de ménager le plus d'issues possibles aux étudiants inscrits pour suivre les enseignements, propose aussi une capacité en droit, deux licences:dont une licence en droit et une en economie.</p>
</div>

  <?php 
    $req=$bdd->query('SELECT * FROM fsae');

    while($com = $req->fetch()) 
  {

  ?>
<div  style="display: flex;">
   
    	<img src=" <?php echo $com['Profil'];   ?>" alt=""  style="width: 400px; height: 350px; margin: 10px; float:left;">
  
    
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