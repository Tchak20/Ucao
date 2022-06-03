<?php include 'menu.php'; ?>
 
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/carousel_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Teacher <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
          	<?php 
              $req=$bdd->query('SELECT * FROM events');
              while ($com=$req->fetch()) { 
            ?>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="" class="block-20 d-flex align-items-end" style="background-image: url(<?php echo $com['Image'] ; ?>);">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?php echo $com['Nom'] ; ?></a></h3>
                <p><?php echo $com['Description'] ; ?></p>
                
              </div>
             
            </div>
          </div>
          <?php
                  }
               ?>
		</section>
		
    <?php include 'footer.php'; ?>
    
  </body>
</html>