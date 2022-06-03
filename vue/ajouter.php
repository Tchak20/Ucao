<?php 
	require_once 'menu.php';
	
	if (!isset($_SESSION['Prenom'])) {
		header('Location: connexion.php');
        die();
	}
	
 ?>
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/page.css">
		<link href="../css/style.css" rel="stylesheet" />
		<link href="../css/responsive.css" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>admin</title>
    
 	</head>
 	<body>
<?php 
	
   // require_once 'menu_root.php';
?>
		<div class="container" style="margin-top: 5%;">
			<?php  

  				$user = $bdd->prepare('SELECT * FROM user WHERE Prenom = ?');
  				$user->execute(array($_SESSION['Prenom']));
  				$donne = $user->fetch();

  			?>
			<div class="row">

				<div class="col-md-4 card shadow-sm p-3 mb-5 bg-body rounded">  
			        <img style="height: 200px ; width: 200px; border-radius: 100%;" class="card-img-top mx-auto d-block" src="<?= $donne['Profil'] ; ?>">
			        <div class="card-body text-center">
			            <h5 class="text-center" >Admin</h5>
			        </div>
			        <div class="btn-group">
			        	<button type="button" class="btn btn-sm btn-outline-secondary">
		          			<a href="" data-toggle="modal" data-target="#avatar" style="text-decoration: none; color: #000;">modifier</a>
		          		</button>
			        </div>
			        <div class="row" style="margin-top:20px;">
			        	<div class="card-body ">
			            	<ul class="list-group ">
			            		<li style="margin-bottom:20px;" class="text-center list-group-item"><?= $donne['Prenom'].' '.$donne['Nom'] ; ?></li>
				        		<li style="margin-bottom:20px;" class="list-group-item">Email :   <?= $donne['Email'] ; ?></li>
				        		<li style="margin-bottom:20px;" class="list-group-item"><a href="#">Modifier le mot de passe</a></li>
			        		</ul>
			        	</div>
			        	
			        </div>
			    </div>
				
				<div class="col-md-8 shadow-sm p-3 mb-5 bg-body rounded">
					<div class=" col-md-12 container shadow-sm p-3 mb-5 bg-body rounded">
					    <ul class="nav nav-tabs justify-content-center">
					      <li class="nav-item ">
					        <a class="nav-link active" aria-current="page" href="ajouter.php">Ajouter un Professeur</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link " aria-current="page" href="liste.php">Enrégistrement</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" aria-current="page" href="liste.php">Liste complète</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link " aria-current="page" href="science.php">Status de l'Année</a>
					      </li>
					    </ul>
  					</div>
  					<div class="row">
  						<div class="col-md-4 ">
  							<?php  

  							 	$star = $bdd->prepare('SELECT count(id) AS fille FROM etudiants WHERE sexe =\'F\'');
  							 	$star->execute();
  							 	$b_start = $star->fetch();

  							?>
  							<ul class="list-group">
  								<li class="list-group-item active" style="margin-bottom: 20px;">
  									Féminin
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Total : <span style="position: absolute; right: 5px;" class="badge bg-info"><?= $b_start['fille'] ?></span>
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Admises :
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Recalé :
  								</li>
  							</ul>
  						</div>
  						<div class="col-md-4">
  							<ul class="list-group">
  								<li class="list-group-item active" style="margin-bottom: 20px;">
  									Status
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Reprises
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Admises :
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Recalés :
  								</li>
  							</ul>	
  						</div>
  						<div class="col-md-4">
  							<?php  

  							 	$start = $bdd->prepare('SELECT count(id) AS gar FROM etudiants WHERE sexe =\'M\'');
  							 	$start->execute();
  							 	$b_star = $start->fetch();

  							?>
  							<ul class="list-group">
  								<li class="list-group-item active" style="margin-bottom: 20px;">
  									Masculin
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Total :<span style="position: absolute; right: 5px;" class="badge bg-info"><?= $b_star['gar'] ; ?></span> 
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Admis :
  								</li>
  								<li class="list-group-item" style="margin-bottom: 8px;">
  									Recalé :
  								</li>
  							</ul>
  						</div>
  					</div>
  					<div class="row">
  						<div class="col-md-4 ">
  							<?php  

  							 	$star = $bdd->prepare('SELECT count(id) AS fille FROM etudiants WHERE sexe =\'F\'');
  							 	$star->execute();
  							 	$b_start = $star->fetch();

  							?>
  							<ul class="list-group">
  								<?php  

  							 	$st = $bdd->prepare('SELECT count(id) AS ins FROM etudiants WHERE valide = 1');
  							 	$st->execute();
  							 	$bt = $st->fetch();
  							 	$st1 = $bdd->prepare('SELECT count(id) AS ins FROM etudiants WHERE valide = 0');
  							 	$st1->execute();
  							 	$t1 = $st1->fetch();
  							 	$st2 = $bdd->prepare('SELECT count(id) AS ins FROM etudiants');
  							 	$st2->execute();
  							 	$t2 = $st2->fetch();

  								?>
  								<li class="list-group-item active" style="margin-bottom: 28px;">
  									Demande d'incriptions
  								</li>
  								<li class="list-group-item" style="margin-bottom: 15px;">
  									Total : <span style="position: absolute; right: 5px;" class="badge bg-info"><?= $t2['ins'] ?></span>
  								</li>
  								<li class="list-group-item" style="margin-bottom: 15px;">
  									Validé : <span style="position: absolute; right: 5px;" class="badge bg-success"><?= $bt['ins'] ?></span>
  								</li>
  								<li class="list-group-item" style="margin-bottom: 15px;">
  									Nom validé : <button class="btn"> <span style="position: absolute; right: 5px; top: 10px;" class="badge bg-danger"><a style="color: #fff; text-decoration: none;" href="confirm.php"><?= $t1['ins'] ?></a></span></button>
  								</li>
  							</ul>
  						</div>
  					
  						
  					</div>
				</div>
			</div>
		
			<div class="modal fade" id="avatar" tabindex="-1" aria-labelledby="EpicModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h5 class="modal-title" id="EpicModalLabel">Modifier votre photo</h5>                                    
		          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		          </button>
		        </div>                                
		        <div class="modal-body">
		         <form method="post"  action="" autocomplete="off" enctype="multipart/form-data">
		           <div class="form-group">
		              <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo<span class="text-danger">*</span></label>
		              <input type="file" name="avatar" class="form-control" required="required">
		            </div>
		            <div class="" style="margin-top:20px;">
		              <button class="btn col-12" type="submit" name="avatar" style="background-color:#7915ab; color: #fff;">Modifier</button>
		            </div>
		         </form>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        </div>
		      </div>
		    </div>
	  </div>
		</div>	
  		
<?php  
 		require('footer.php');
?>

			<script src="../js/bootstrap.js"></script>
		</body>
	</html>
