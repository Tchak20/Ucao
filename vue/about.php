<?php include 'menu.php'; ?>
 
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/carousel_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">A propos de nous </h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span>A propos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/uc_1.jpg); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          <h2 class="mb-4">UCAO-UUC</h2>
            <p>La création de l'Université Catholique de l'Afrique de l'Ouest (UCAO) constitue une extension et un approfondissement de l'expérience issue de la création de l'Institut Catholique de l'Afrique de l'Ouest (ICAO). Historiquement, c'est en 1969 que la Conférence Episcopale Régionale de l'Afrique de l'Ouest(CERAO) a créé, sous l'instigation du futur Cardinal Bernandin GANTIN, alors responsable de la commission épiscopale régionale de la Cathéchèse, l'institut Supérieur de Culture Religieuse (ISCR) qui en 1976, sera transformé en l'Institut Catholique de l'Afrique de l'Ouest (ICAO).  </p>
            <p>Il serait souhaitable qu'à l'occasion de son jubilé d'argent en 2026, l'UCAO-UUC rende un bel hommage à toutes ces personnalités. D'où l'urgence de fédérer, dans les six ans à venir,toutes les forces de l'Eglise Famille de Dieu au Bénin, en vue de la construction d'un siège propre à l'UCAO-UUC et digne d'elle.</p>
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_com.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/about.JPEG);">
    					<div class="video justify-content-center">
								
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">UCAO-UUC</h2>
            <p>La création de l'Université Catholique de l'Afrique de l'Ouest (UCAO) constitue une extension et un approfondissement de l'expérience issue de la création de l'Institut Catholique de l'Afrique de l'Ouest (ICAO). Historiquement, c'est en 1969 que la Conférence Episcopale Régionale de l'Afrique de l'Ouest(CERAO) a créé, sous l'instigation du futur Cardinal Bernandin GANTIN, alors responsable de la commission épiscopale régionale de la Cathéchèse, l'institut Supérieur de Culture Religieuse (ISCR) qui en 1976, sera transformé en l'Institut Catholique de l'Afrique de l'Ouest (ICAO).  </p>
            <p>Il serait souhaitable qu'à l'occasion de son jubilé d'argent en 2026, l'UCAO-UUC rende un bel hommage à toutes ces personnalités. D'où l'urgence de fédérer, dans les six ans à venir,toutes les forces de l'Eglise Famille de Dieu au Bénin, en vue de la construction d'un siège propre à l'UCAO-UUC et digne d'elle.</p>
          </div>
        </div>	
		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
					  <?php $total=$bdd->query('SELECT count(Id_prof) AS nombrep FROM professeur');
						$Total=$total->fetch();?>
		                <strong class="number" data-number="<?php
						echo $Total['nombrep']; ?>">0</strong>
		                <span>Enseignants certifiés</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
					  <?php $total_etu=$bdd->query('SELECT count(Id_user) AS nombre_etu FROM user WHERE Status=0 ');
						$Total_etu=$total_etu->fetch();?>
		                <strong class="number" data-number="<?php
						echo $Total_etu['nombre_etu']; ?>">0</strong>
		                <span>Etudiants</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
					  <?php
					   $total_fil1=$bdd->query('SELECT count(Id_filiere) AS nombre_fil1 FROM egei');
						$Total_fil1=$total_fil1->fetch();

						$total_fil2=$bdd->query('SELECT count(Id_filiere) AS nombre_fil2 FROM esmea');
						$Total_fil2=$total_fil2->fetch();
						
					$total_fil3=$bdd->query('SELECT count(Id_filiere) AS nombre_fil3 FROM fde');
					$Total_fil3=$total_fil3->fetch();
						
						$total_fil4=$bdd->query('SELECT count(Id_filiere) AS nombre_fil4 FROM fsae');
						$Total_fil4=$total_fil4->fetch();

						$somme= $Total_fil1['nombre_fil1'] + $Total_fil2['nombre_fil2'] + $Total_fil3['nombre_fil3']+ $Total_fil4['nombre_fil4'];
						?>
						
		                <strong class="number" data-number="<?php
						echo $somme; ?>">0</strong>
		                <span>Filières</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="<?php //nombre prix remporter ?>">0</strong>
		                <span>Prix remporté</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Les avis sur notre université</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
		
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
			<?php 
			$req=$bdd->query('SELECT * FROM commentaires');
			while ($com=$req->fetch()) { 
		?>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(<?php echo $com['Image'] ; ?>)">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p><?php echo $com['Commentaire'] ; ?></p>
                    <p class="name"><?php echo $com['Nom'] ; ?></p>
                  </div>
                </div>
              </div>
			  <?php
				}
			   ?>
              </div>
            </div>
          </div>
        </div>
		
      </div>
	 
    </section>
    <?php include 'footer.php'; ?>
    
  </body>
</html>