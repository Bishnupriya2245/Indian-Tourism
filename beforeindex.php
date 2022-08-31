
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
 //function hideURLbar(){ window.scrollTo(0,1); }


 </script>
<!--js-->
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>Tourism which is ethical, fair and a positive experience for both travellers and the people and places they visit</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure tourism always benefits local people by challenging bad practice and promoting better tourism</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Safety Information</h4>
			 <p>Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call 911 from any phone... in your hotel, dial 9-911.</p>
             <div align="right"><a href="aboutus.php"><input type="button" value="Read More" name="sbmt" /></a></div>
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>

		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Domestic Travel</span></li>
			<li><span class="filter" data-filter="card">Tribe Tour</span></li>
			<li><span class="filter" data-filter="icon">Short Date Tour</span></li>
			<li><span class="filter" data-filter="fun">Long Date Tour</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/z1.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/z2.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/z3.jpg" class="img-responsive" alt=""/></a>

					</div>
					</div>
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/z4.jpg" class="img-responsive" alt=""/></a>

						</div>
					</div>
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/z5.jpg" class="img-responsive" alt=""/></a>

						</div>
					</div>
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/z6.jpg" class="img-responsive" alt=""/></a>

						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/z7.jpg" class="img-responsive" alt=""/></a>

						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/z8.jpg" class="img-responsive" alt=""/></a>

					   </div>
			      </div>
		   <div class="clearfix"></div>
	  </div>
</div>
</div>
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
			}
		);
	}
};
// Run the show!
		filterList.init();
	});
</script>



<div  class="section" id="section-4">
        
<div class="client-say">
<div class="client-say-layer">
    <div class="client-say-head text-center">
 <h3>CLIENT SAY</h3>
 <span></span><img src="images/face.png" alt=""><span></span>
 <!-- requried-jsfiles-for owl -->
<link href="css/owl.carousel.css" rel="stylesheet">
   <script src="js/owl.carousel.js"></script>
       <script>
   $(document).ready(function() {
     $("#owl-demo1").owlCarousel({
       items : 1,
       lazyLoad : true,
       autoPlay : true,
       navigation : false,
       navigationText :  false,
       pagination : true,
     });
   });
   </script>


<div id="owl-demo1" class="owl-carousel">
				<div class="item">
					<div class="client-say-info">
							<p><imgsrc="images/dots1.png" alt="#">A must place to visit if you are near my Madurai...temple is located in the heart of the city, darshan timings are from 0430 to 1230 hrs then 1630 to 2130 hrs, you are not allowed to take your shoes n mobiles n cameras which you can submit outside the temple counter after paying some minimum fee which is safe. No dress code as such. For Darshana, there are three queues... ordinary, rupees 50 and rupees 100.<imgsrc="images/dots2.png" alt="#"></p>
							<h4>BirenAmanta-Hyderabad</h4>
						<h6><span></span></h6>
					</div>
				</div>
				<div class="item">
					<div class="client-say-info">
							<p><imgsrc="images/dots1.png" alt="#">Blessings of Maa Samaleswari is a must if you are in Sambalpur.The approach road to the temple is horrible,but once inside the temple, you feel the spirituality.have darshan in queue and the after looking at the face of Maa you really feel blessed. Prasad counters are there both inside and outside the temple.If possible, visit the temple during aarti time.<imgsrc="images/dots2.png" alt="#"></p>
							<h4>Smital Nair-Mysore</h4>
						<h6><span></span></h6>
					</div>
				</div>
				<div class="item">
					<div class="client-say-info">
							<p><imgsrc="images/dots1.png" alt="#">Just visited wonderla amusement park.Very nice place to enjoy with your family,friends,spouse.The dry rides are adrenaline rush giving,while the water rides were relaxing.Must visit during holidays.At the end you will definitely cherish some memorable memories.And do look for laser and fountain show at the end of the day.<imgsrc="images/dots2.png" alt="#"></p>
							<h4>Somyaranjan Rout-Nasik</h4>
						<h6><span></span></h6>
					</div>
				</div>
				<div class="item">
					<div class="client-say-info">
							<p><imgsrc="images/dots1.png" alt="#">The temple of Goddess Ghanteswri is on the bank of river Mahanadi. A nice picnic spot with panoramic views. The walk through narrow passage across the power channel flooded with water is indeed very thrilling experience.<imgsrc="images/dots2.png" alt="#"></p>
						<h4>Goyal Mehta-Kolkata</h4>
						<h6><span></span></h6>
					</div>
				</div>
				<div class="item">
					<div class="client-say-info">
							<p><imgsrc="images/dots1.png" alt="#">Just visited Gudgudawaterfalls.Awesome place for picnic, Full of with beautiful nature. Three number of water fall with attractive natural water. Another attraction is the fish available there.<imgsrc="images/dots2.png" alt="#"></p>
							<h4>Ajay Nagar-Delhi</h4>
						<h6><span></span></h6>
					</div>
				</div>
			</div>
</div>
        <h5 style="color: white; padding-bottom: 6px;">Liked our site?</h5>
    <form action="feedback.php" target="_blank"> <input type="submit" name="give feedback" value="Give feedback" style="background-color: #4caf50; color: white;padding: 12px 20px;border: none; border-radius: 4px;cursor: pointer ;text-align: right;"></form>
</div>
</div>
<!--/client-say-->
<div  class="section" id="section-5">
<h5 style="word-spacing: 4px; padding-bottom: 7px; padding-top: 10px; margin-left: 30%"><b>Explore India by map!</b> Optimise your visit and don't miss out on a destination near you.</h5>
	<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703620.672472216!2d64.41390989859407!3d20.050418843029927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1593590556861!5m2!1sen!2sin" frameborder="0" style="border:0"></iframe>
		<span></span>
			</div>



<div id="section-6" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan Your Trip
Our travel experts can help you.</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#09F">Need an Expert?</h4>
						<p style="color:#000">You are more than welcome to leave your contact info and we will be in reach shortly.</p>
						<h5 style="color:#000"><span class="img1"></span>(+91) 9876543210&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;9874561230</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">info@maketrips.com&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;support@maketrips.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>IGIT,SARARG,DHENKANAL</h5>
                        <br/>
                       <img src="images/contac.jpg" />
                      </div>
				  <div class="col-md-8 contact">

                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" value=" Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td></tr>
					 <tr><td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onBlur="if(this.value == '') this.value='Enter Message Here';" required/ >Message</textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>




<?php include('bottom.php'); ?>
</body>
</html>
