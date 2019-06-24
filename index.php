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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/overlay.css">
		<link rel="stylesheet" href="css/topbar.css">

  </head>
  <body>
	<!-- Overlay-->
	<div id="overlay" onclick="off()">
 
	<div id="text">Al-Hayat</div>
	<div class="coupon">
	<?php include 'admin/connection.php';
		 $result_select_popup=mysqli_query($con,$sql_select_popup);
		 $row_select_popup = mysqli_fetch_assoc($result_select_popup);
	?>
	<div class="container" style="background-color:white">
    <h2><b><?php echo $row_select_popup['title'] ; ?></b></h2> 
    <p><?php echo $row_select_popup['content'] ; ?></p>
		<div class="container">
    <p class="expire"><?php echo $row_select_popup['footer'] ; ?></p>
  </div>
	</div>
 
	</div>
	<button class="close" onclick="off()">x</button>

</div>

<!--div style="padding:20px">
  <h2>Overlay with Text</h2>
  <button onclick="on()">Turn on overlay effect</button>
</div-->

<!--
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
	Overlay End-->

			<!--Start nav-->
	<?php include "topbarlogo.php"; ?>
	<?php include  "shayri.php";?>  
	<?php include  "menubar.php";?>  
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/outdoor3.jpg);" >   	
      </div>
      <div class="slider-item" style="background-image:url(images/reception.jpg);">		
      </div> 	
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-doctor"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Qualitfied Doctors</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-ambulance"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Emergency Care</h3>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stethoscope"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Outdoor Checkup</h3>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-24-hours"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">24 Hours Service</h3>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/DrAsif.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading">About Al-Hayat</span>
		            <h2 class="mb-4" style="font-size: 28px;">AL-HAYAT NURSING HOME founded by DR.MOHAMMED ASIF ANWAR ALI ANSARI in 
                        2006 with the intention of providing quality care at Affordable Cost.</h2>
	            </div>
	          </div>
			  <div class="heading-section mb-5">
	          <div class="pl-md-5 ml-md-5 mb-5">
							<span class="subheading">Why To Choose Al-Hayat Nursing Home</span>
							<ul>
								<li>Qualified,Experienced and Expert Doctor Team.</li>
								<li>DR.MOHAMMED ASIF ANSARI is Consulting Advanced Laparoscopic and Anorectal Surgeon</li>
								<li>DR.NAILA ASIF ANSARI is Consulting Gynaecologist and Obstetrician.Infertility Specialist and Laparoscopic Surgeon.</li>
								<li>DR.KHALID ANSARI is Consulting Physician and Intensivist.Expert in Clinical Care Management.</li>
								<li>Treatment For Planned and Emergency Cases.</li>
								<li>Highly Maintained Neet and Clean Premise.</li>
								<li>Qualified and Experienced Supporting Staff Team,Ready to Help Patient in Need Any Time.</li>
								<li>Easy to Reach and Easy to Communicate.</li>
								<li>Cost Effective Standard and Advance Treatment Facility.</li>
								<li>Fully Equipped Modern Operating Room with KARL STORZ LAPAROSCOPIC TROLLEY and KARL STORZ Hand Instrument.</li>
								<li>Fully Equipped Modern Labour Room with Trained Female Staff Members.</li>
								<li>DAY CARE SURGERY.</li>
								<li>MEDICLAIM and INSURANCE Facililty Available.</li>
								<li>Sound Proof GENSET 15KV  enough to provide Electricity to the Nursing Home.</li>
								<li>In House MEDICAL STORE and BLOOD COLLECTION CENTER for the Ease Of Treatment Process.</li>
							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				
					<div class="col-md-12">
						<h2>Your Health is Our Top Priority with Comprehensive, Affordable medical.</h2>
						
					</div>
					
				
			</div>
		</section>

    	
		<section class="ftco-section ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Doctors</span>
            <h2 class="mb-4">Our Qualified Doctors</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/DrAsif.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. MOHAMMED ASIF ANSARI</h3>
								<span class="position mb-2">Laparoscopic,Anorectal and General Surgeon</span>
								<div class="faded">
									<p>M.S(GEN.SURGERY);MBBS;
									FICS(USA);FAIS;FMAS;FIAGES;
									</p>
 <p>Associate Professor And Consultant Surgeon GRANT MEDICAL COLLEGE,DEPT OF GEN.SURGERY.J.J HOSPITAL MUMBAI.
</p>
<h5>Time:   5.30pm-8pm (Monday-Saturday)</h5>
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
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/Dr.Naila.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. NAILA ASIF ANSARI</h3>
								<span class="position mb-2">Infertility specialist,Laparoscopic surgeon,Gynaecologist and Obstetrician </span>
								<div class="faded">
									<p>DGO;CPS;FCPS;DFP;FMAS;MBBS.</p>
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
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-3.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. KHALID ANSARI</h3>
								<span class="position mb-2">PHYSICIAN AND INTENSIVIST</span>
								<div class="faded">
									<p>M.D(MEDICINE);DNB(CRITICAL CARE).</p>
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
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-4.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Dr. Alicia Henderson</h3>
								<span class="position mb-2">Pediatrician</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
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
				</div>
			</div>
		</section>

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
				<?php include "footbar.php";?>
        <?php include "footerbar.php";?>
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