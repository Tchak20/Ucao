<?php include 'menu.php'; ?>

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/carousel_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Professeur certifiés</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>Teacher <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
	      
			<div class="container-fluid px-4">
			
				<div class="row">
				<?php 
				$req=$bdd->query('SELECT * FROM professeur');
				while ($com=$req->fetch()) { 
			?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
					
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(<?php echo $com['image'] ; ?>);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3><?php echo $com['Nom'] ; ?> <?php echo $com['Prenom'] ; ?></h3>
								<span class="position mb-2"><?php echo $com['Diplome'] ; ?></span>
								<div class="faded">
									<p><?php echo $com['Description'] ; ?></p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<?php
				}
			   ?>
				</div>
				
			</div>
			
		</section>


		
		<?php include 'footer.php'; ?>
    
  </body>
</html>