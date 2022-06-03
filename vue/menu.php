<?php  include('../Modele/bdd.php');
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>UCAO Université</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.php"> <img src="images/logo.jpg" width="100px" height=100px></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center "><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>contact@ucaobenin.org</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Contact</span>
						    	<span>Tel: +229 21305117</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4" style="background-color: #0f099c;">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Recherche">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
		  <ul class="navbar-nav mr-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link pl-0">Acceuil</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">A propos</a></li>
				<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Formation</a>
				  <ul class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuButton1" >
						<li> <a class="dropdown-item"  href="egei.php">EGEI</a></li>
                        <li> <a class="dropdown-item"  href="esmea.php">ESMEA</a></li>
						<li> <a class="dropdown-item"  href="fde.php">FDE</a></li>
						<li> <a class="dropdown-item"  href="fsae.php">FSAE</a></li>
				 </ul>
				</li>
	        	<li class="nav-item"><a href="teacher.php" class="nav-link">Staff</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Profils</a>
				  <ul class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuButton1" >
                        <li><?php if (!isset($_SESSION['Prenom'])) { ?> <a class="dropdown-item"  href="inscription.php">Inscription</a></li>
                        <li> <a class="dropdown-item"  href="connexion.php">Connexion</a></li>
					  <?php }else{?>
						<li> <a class="dropdown-item"  href="profil.php">Vous</a></li>
                        <li> <a class="dropdown-item"  href="deconnexion.php">Deconnexion</a></li>
                	<?php
                	}
                	?>
				</li>
				
             </ul>
			 <?php
			 if (isset($_SESSION['Status'])) {
			  if ($_SESSION['Status']==1) {?>
				<li class="nav-item "><a href="admin.php" class="nav-link pl-0">Admin</a></li>
				<?php }} ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
	       