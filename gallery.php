<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dr.care - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/overlay.css">
		<link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/overlay.css">
		

  </head>
  <body>
	<?php echo file_get_contents("topbarlogo.php"); ?>
	<?php echo file_get_contents("menubar.php");?> 
    <!-- END nav -->



    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Gallery</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<section class="ftco-section">
	<div class="container">
  <div id="overlay" onclick="off()">
<img id="expandedImg" style="width:100%" >
<button class="close" onclick="off()">x</button>
</div>

	 
	<div class="row">

		<div class="gallery">
			<img src="images/DrAsif.jpg" onclick="myFunction(this);" alt="DrAsif">
		</div>
		<div class="gallery">
			 <img src="images/Dr.Naila.jpg" onclick="myFunction(this);" alt="DrNaila" >		 
		 </div>
		 <div class="gallery">
 			<img src="images/Dr.Naila3.jpg" onclick="myFunction(this);" alt="PRoom1" >
		 </div>
		 <div class="gallery">	 
			 <img src="images/Dr.jpg" onclick="myFunction(this);" alt="Dr" >
		 </div>
		 <div class="gallery">
			<img src="images/Gward1.jpg" onclick="myFunction(this);" alt="Gward1" >
		</div>
		<div class="gallery">
 			<img src="images/PRoom1.jpg" onclick="myFunction(this);" alt="PRoom1">
		 </div>
		 <div class="gallery">
			 <img src="images/PRoom2.jpg" onclick="myFunction(this);" alt="PRoom2" >	
		</div>
		

		<div class="gallery">
			<img src="images/reception3.jpg" onclick="myFunction(this);" alt="reception3" >
		</div>
		<div class="gallery">
			 <img src="images/reception.jpg" onclick="myFunction(this);" alt="reception" >		 
		 </div>
		 <div class="gallery">	 
			 <img src="images/Reception4.jpg" onclick="myFunction(this);" alt="Reception4"  >
		 </div>
		 <div class="gallery">
 			<img src="images/Machine2.jpg" onclick="myFunction(this);" alt="Machine2">
		 </div>
		<div class="gallery">
 			<img src="images/OT2.jpg" onclick="myFunction(this);" alt="OT2" >
		 </div>
		 <div class="gallery">
			 <img src="images/OT3.jpg" onclick="myFunction(this);" alt="OT3"  >	
		</div>
		<div class="gallery">
			<img src="images/OT1.jpg" onclick="myFunction(this);" alt="OT1"  >
		</div>
		<div class="gallery">
			<img src="images/Machine1.jpg" onclick="myFunction(this);" alt="Machine1" >
		</div>
		
		 <div class="gallery">
			 <img src="images/Machine3.jpg" onclick="myFunction(this);" alt="Machine3">	
		</div>
		<div class="gallery">
			<img src="images/Machine4.jpg" onclick="myFunction(this);" alt="Machine4"  >
		</div>
		<div class="gallery">
			 <img src="images/Gward2.jpg" onclick="myFunction(this);" alt="Gward2">	
		</div>
		 <div class="gallery">
			 <img src="images/medical.jpg" onclick="myFunction(this);" alt="Medical" >	
		</div>
		<div class="gallery">
			 <img src="images/Water.jpg" onclick="myFunction(this);" alt="Water Purifier" >	
		</div>

						
<script>
function on(imgs) {
  document.getElementById("overlay").style.display = "block";
  
}
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
   
	</div>
	</div>
  

</section>
		

		

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
				<?php echo file_get_contents("footbar.php");?>
        <?php echo file_get_contents("footerbar.php");?>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
	<script src="js/overlay.js"></script>
    
  </body>
</html>