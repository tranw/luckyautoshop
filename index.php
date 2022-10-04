<?php

$metadesc="Lucky's Speed Shop Auto Repair in Bellingham, WA - Your local, professional car care team.";

$pagetitle="Auto Repair Bellingham WA | Whatcom County | Lucky's Auto Shop";

$pagecss="
	#instagram-embed-0 {display:inline!important;border:5px solid #91BB8C!important;}
	#hourscol{padding:10px 15px 50px 15px;border-right:1px solid #999;border-left:1px solid #999;}
	#findusXS{display:none;}
	#aselogo{border-radius:10px;}
	.thin-banner-1, .thin-banner-2 {height: 150px;}

	/* Iphone 4 portrait*/
	@media only screen and (max-width : 550px) {
		#findusSM{display:none;}
		#findusXS{display:table-cell;}
	}
	@media only screen and (max-width : 500px) {
		/*contact section*/
		.col-xs-5,.col-xs-7 {
			width:auto;
			float:none;
		}
		#hourscol{border-right:0;border-left:0;border-bottom:1px solid #999;border-top:1px solid #999;}
	}

	/* Small */
	@media only screen and (min-width : 768px) {
		#hourscol{border-right:1px solid #999;border-left:0;}
		.thin-banner-1, .thin-banner-2 {height: 20em}
	}

	/* Medium */
	@media only screen and (min-width : 992px) {
		#hourscol{border-right:1px solid #999;border-left:1px solid #999;}

	}

	#featurestwo h2{
		line-height:50px;margin-top:0px;margin-bottom:20px;font-size:28px;
	}

	.couponholder, .testimonial{cursor:pointer;}
	.couponholder img{margin:0px auto;}
	.hrsopen{color:#555;}

	#small-carousel {
		background-color:#2b2b2b;
		border:5px solid #ccc;
	}

    #small-carousel .item {
		max-height: 504px;
	}

    #small-carousel .item img {
        max-width: 378px;
		max-height: 504px;
		margin: 0 auto;
		image-orientation: from-image;
	}

	.thin-banner-1, .thin-banner-2 {
		width: 100%;
		margin: 0;
		background-position: center;
		background-size: cover;

	}
	.thin-banner-1 {
		background-image: url('media/images/mechanic_working_on_car.jpg');
	}
	.thin-banner-2 {
		background-image: url('media/images/people_in_car.jpg');
	}

";

$pagescripts="<script>
$(document).ready(function () {
    $('#small-carousel').carousel({ interval: 4000 });
    $('#small-carouselButton').click(function () {
        if ($('#small-carouselButton').children('span').hasClass('glyphicon-pause')) {
            $('#small-carousel').carousel('pause');
            $('#small-carouselButton').children('span').removeClass('glyphicon-pause');
            $('#small-carouselButton').children('span').addClass('glyphicon-play');
        }
        else if ($('#small-carouselButton').children('span').hasClass('glyphicon-play')) {
            $('#small-carousel').carousel('cycle');
            $('#small-carouselButton').children('span').removeClass('glyphicon-play');
            $('#small-carouselButton').children('span').addClass('glyphicon-pause');
        }
	});
});
	$(function() {
		$( '.couponholder' ).click(function() {
				w=window.open();
				w.document.write($(this).html());
				w.print();
				w.close();
		});
		$( '.testimonial' ).click(function() {
				window.location='testimonials.php';
		});
	});
	</script>
";

$additionheadcontent="";

//===========================CALLBACK FUNCTION============================//
function callback($buffer){return ($buffer);}  // return complete page
ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
	<div id="slides" class="carousel slide" data-ride="carousel" data-interval="8000" data-pause="false">
		<ol class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
		</ol>
	  	<div class="carousel-inner" role="listbox">
	    	<div class="item active">
	    	  <img src="media/images/slides/slide1.jpg?v=20170807" alt="Mechanic working on car">
	    	</div>

	    	<div class="item">
	    	  <img src="media/images/slides/slide2.jpg?v=20170807" alt="Old Mustang in auto repair shop">
	    	</div>

	    	<div class="item">
	    	  <img src="media/images/slides/slide3.jpg?v=20170807" alt="Gear shifter and dashboard">
	    	</div>

	    	<div class="item">
	    	  <img src="media/images/slides/slide4.jpg?v=20170807" alt="Gear shifter and dashboard">
	    	</div>
	  	</div>
	  	<a class="left carousel-control" href="#slides" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
		<a class="right carousel-control" href="#slides" role="button" data-slide="next">
	    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	 	</a>
	</div><!--END SLIDESHOW-->

	<section id="contact">
	<div class="container">
		<div class="row text-center" style="padding:10px 0px 10px 0px;font-size:18px;">
			<div class="col-md-5 col-sm-12" style="padding:10px 15px 10px 15px;">
				<h2>Location</h2>
				<div style="background-color:#555;margin:0px;padding:0px;height:300px;margin-bottom:7px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.542127039441!2d-122.51076989676245!3d48.85508847596965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485bbaf89d645b3%3A0x342876a3c6bbaceb!2sLucky&#39;s+Speed+Shop+Auto+Repair!5e0!3m2!1sen!2sus!4v1466275942831&z=19" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
				<div style="margin:0px;padding:0px;" class='visible-md-block'>
					Directions: <a class="btn btn-info btn-xs" href="https://www.google.com/maps/dir/Meridian+Street,+Bellingham,+WA+98225/Lucky's+Speed+Shop+Auto+Repair,+West+Laurel+Road,+Bellingham,+WA/@48.8161186,-122.5512507,13z/am=t/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x5485a367586e96f5:0xeba5d8bd9ab78529!2m2!1d-122.4860874!2d48.7769122!1m5!1m1!1s0x5485bbaf89d645b3:0x342876a3c6bbaceb!2m2!1d-122.508479!2d48.854949!3e0" target="_blank" role="button">
						From Bellingham, WA
						</a>
						<a class="btn btn-info btn-xs" href="https://www.google.com/maps/dir/48.7818502,-122.478585/Lucky's+Speed+Shop+Auto+Repair,+West+Laurel+Road,+Bellingham,+WA/@48.8184689,-122.5469298,13z/am=t/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x5485bbaf89d645b3:0x342876a3c6bbaceb!2m2!1d-122.508479!2d48.854949!3e0" target="_blank" role="button">
						From I-5
						</a>
						<a class="btn btn-info btn-xs" href="https://www.google.com/maps/dir/Guide+Meridian+Road+%26+Front+Street,+Lynden,+WA+98264/Lucky's+Speed+Shop+Auto+Repair,+West+Laurel+Road,+Bellingham,+WA/@48.8970945,-122.5319519,13z/am=t/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x5485b77444dfa6f1:0x37bfe9b1912d2a46!2m2!1d-122.4854742!2d48.9391378!1m5!1m1!1s0x5485bbaf89d645b3:0x342876a3c6bbaceb!2m2!1d-122.508479!2d48.854949!3e0" target="_blank" role="button">
						From Lynden, WA
						</a>
				</div>
				<div style="margin:0px;padding:0px;" class='hidden-md'>
					Directions: <br id='directionbr'><a class="btn btn-info directions" href="https://www.google.com/maps/dir/Meridian+Street,+Bellingham,+WA+98225/Lucky's+Speed+Shop+Auto+Repair,+West+Laurel+Road,+Bellingham,+WA/@48.8161186,-122.5512507,13z/am=t/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x5485a367586e96f5:0xeba5d8bd9ab78529!2m2!1d-122.4860874!2d48.7769122!1m5!1m1!1s0x5485bbaf89d645b3:0x342876a3c6bbaceb!2m2!1d-122.508479!2d48.854949!3e0" target="_blank" role="button">
						From Bellingham, WA
						</a>
						<a class="btn btn-info directions" href="https://www.google.com/maps/dir/48.7818502,-122.478585/Lucky's+Speed+Shop+Auto+Repair,+West+Laurel+Road,+Bellingham,+WA/@48.8184689,-122.5469298,13z/am=t/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x5485bbaf89d645b3:0x342876a3c6bbaceb!2m2!1d-122.508479!2d48.854949!3e0" target="_blank" role="button">
						From I-5
						</a>
						<a class="btn btn-info directions" href="https://www.google.com/maps/dir/Guide+Meridian+Road+%26+Front+Street,+Lynden,+WA+98264/Lucky's+Speed+Shop+Auto+Repair,+West+Laurel+Road,+Bellingham,+WA/@48.8970945,-122.5319519,13z/am=t/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x5485b77444dfa6f1:0x37bfe9b1912d2a46!2m2!1d-122.4854742!2d48.9391378!1m5!1m1!1s0x5485bbaf89d645b3:0x342876a3c6bbaceb!2m2!1d-122.508479!2d48.854949!3e0" target="_blank" role="button">
						From Lynden, WA
						</a>
				</div>
			</div>
			<div class="col-md-3 col-xs-5" id="hourscol">
				<h2>Hours</h2>
				<p style="font-size:45px;"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></p>
				<div style="font-size:22px;">
					<p><b>Monday&ndash;Friday</b><br><span class='hrsopen'>8am-5pm</span></p>
					<p><b>Saturday&ndash;Sunday</b><br><span class='hrsopen'>Closed</span></p>
				</div>
				<div>

				<div style="vertical-align:top;padding-right:8px;padding-top:12px;">
					<!--SETMORE <script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script><a id="Setmore_button_iframe" style="float:none" href="https://my.setmore.com/bookingpage/94e4a019-1b43-494a-b4e7-87d46fd0036f"><img border="none" src="https://my.setmore.com/images/bookappt/SetMore-book-button.png" alt="Book an appointment with Lucky's Speed Shop Auto Repair using SetMore" /></a><br>-->
					<!--<a class="btn btn-lg btn-info" role="button" href="index.php#contact">Schedule Appointment</a>-->
				</div>

				</div>
			</div>
			<div class="col-md-4 col-xs-7" style="padding:10px 15px 10px 15px;">
				<h2>Contact</h2>
					<table class="text-left" style="font-size:22px;margin:20px auto 0px;">
						<tr>
							<td style="vertical-align:top;padding-right:8px;padding-top:4px;"><span class="glyphicon glyphicon-record" aria-hidden="true"></span></td>
							<td style="padding-bottom:10px;">
							503 W Laurel Rd<br>
							Bellingham, WA 98226
							</td>
						</tr>
						<tr>
							<td style="vertical-align:top;padding-right:8px;padding-top:2px;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></td>
							<td style="padding-bottom:10px;line-height:22px;">
							<a href="tel:13606566570">360-656-6570</a>
							<!--<span style="font-size:16px;">After Hours. 360.656.6570</span>-->
							</td>
						</tr>
						<tr>
							<td style="vertical-align:top;padding-right:8px;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></td>
							<td style="padding-bottom:10px;font-size:18px;">
							<a href="mailto:service@luckyautoshop.com">service@luckyautoshop.com</a>
							</td>
						</tr>
						<tr>
							<td style="vertical-align:top;padding-right:8px;padding-top:12px;"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></td>
							<td>
								<a class="btn btn-success" href="https://search.google.com/local/writereview?placeid=ChIJs0XWia-7hVQR66y7xqN2KDQ" role="button" target="_blank" style="font-size:20px;background-color:#974141;border:0;">Rate Us on Google&trade;</a>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="padding-bottom:20px;padding-top:0px;font-size:18px;text-align:center;">
							We speak Punjabi<br>
							<span style='font-size:16px;font-style:italic;font-color:#555;'>We Accept All Major Credit Cards</span>
							</td>
						</tr>
					</table>
					<table style="background-color:#c45151;text-align:center;margin:0px auto;width:100%;" id="darksocial">
						<tr>
							<td style="padding:10px;"><a href="https://www.facebook.com/Luckys-Speed-Shop-206552329536726/" target="_blank" style="outline:none;border:0;"><img src="media/logos/FB-f-Logo__white_50.png" class="img-responsive"></a></td>
							<td style="padding:10px;"><a href="https://www.linkedin.com/in/lucky-sing-aa5651123/" target="_blank" style="outline:none;border:0;"><img src="media/logos/In-White-50px-TM.png" class="img-responsive"></a></td>
							<td style="padding:10px;"><a href="https://www.instagram.com/luckys_speed_shop_/?hl=en" target="_blank" style="outline:none;border:0;"><img src="media/logos/insta_100.png" class="img-responsive"></a></td>
							<td style="padding:10px;"><a href="http://www.yelp.com/biz/lucky-speed-shop-bellingham" target="_blank" style="outline:none;border:0;"><img src="media/logos/yelp-55.png" class="img-responsive"></a></td>
						</tr>
					</table>
					
			
			</div>
		</div><!--row-->
	</div><!--container-->	
		</section>
	<div class="container-fluid">		
		<div class="row featurette" style="border-top:20px solid #ccc;border-bottom:20px solid #ccc;padding-bottom:15px;padding-top:15px;margin:20px;">
			<div class="col-md-12">
				<h2 class="featurette-heading">Take care of your vehicle with professional car mechanics in Bellingham</h2>
				<p class="lead">Lucky's Auto Shop is a reliable and affordable auto repair shop serving Bellingham, Ferndale, Lynden, Everson and greater Whatcom County. 
							Our experienced team has the skills and expertise to diagnose, fix, and improve your vehicle. We will make sure your car or truck is running well no matter the issue.
							From engine repairs, oil changes, and tire rotations, to tune-ups, pre-trip inspections and more, we have got you covered.
				<p class="lead"><a href="tel:13606566570">Give us a call at 360-656-6570</a> to make an appointment and we will do our best to make you another repeat customer!</p>
			</div>
			<!--<div class="col-md-5">
				<img class="featurette-image img-responsive center-block" src='media/graphics/botnw.jpg' alt="best of the northwest" title="Best Of the Northwest Appreciation">

			</div>-->
		</div><!--row-->
		
		
	</div><!--container-->
<!------------------------------------------------------------------------------------------------------------------- 	-->

	<div class="container-fluid" style="padding:0px;">
		<div class="row row-content">
			<div class="col">
				<div id="small-carousel" class="carousel slide" data-ride="carousel">
					
					<!-- <ol class="carousel-indicators">
						<li data-target="#small-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#small-carousel" data-slide-to="1"></li>
						<li data-target="#small-carousel" data-slide-to="2"></li>
					</ol>-->

					<div class="carousel-inner" role="listbox">
						<div class="item text-center active">
							<img src="media/images/bottomSLIDESHOW/bSLIDE_%20(1).jpg" alt="lucky auto shop slide 1">
						</div>
						<?php 
							$i = 2; 

							do {
								echo "<div class=\"item text-center\">
							<img src=\"media/images/bottomSLIDESHOW/bSLIDE_%20(".$i.").jpg\" alt=\"lucky auto shop slide ".$i."\">
						</div>
						";
								$i++;
							} while ($i <= 23);
						?>
						
						
					</div>
					<a class="left carousel-control" href="#small-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#small-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

	</div>

<!------------------------------------------------------------------------------------------------------------------- -->
	<!--<div class="thin-banner-1"></div>-->

	<div class="container-fluid" style="padding:0px;background-color:#769A72;color:white;">
		<div class="container">
			<h1 style="margin-bottom:20px;">Service &amp; Repair</h1>
		</div>
	</div>
	<div class="container" id="featurestwo">
		<div class="row" style="margin:25px 0px 25px 0px;">

			<div class="col-lg-4 col-sm-6 sbcol" style="padding-top:15px;padding-bottom:15px;">
				<div class="servicebox" style="background-image:url('media/images/oilpour.png');">
					<div style="margin:0px auto 10px;text-align:center;"><span class="servicetitle">Oil &amp; Filter Change</span></div>
					<a href="#contact">
						<div style="background-color:#7ac42a;color:#fff;margin:0px 0px 0px 35px;padding:10px;width:165px;text-align:center;">
							<span style="font-size:25px;">From</span> <span style="font-size:30px;font-weight:bold;">$44.95</span>
						</div>
					</a>
					<ul style="text-align:left;font-size:20px;margin-top:15px;">
					   <li>Oil Change Service</li>
					   <li>Filter Replacement</li>
					   <li>Oil Level Check</li>
					   <li>Inspection</li>
					</ul>

				</div>
			</div>
			<div class="col-lg-4 col-sm-6 sbcol" style="padding-top:15px;padding-bottom:15px;">
				<div class="servicebox" style="background-image:url('media/images/tires.png');">
					<div style="margin:0px auto 10px;text-align:center;"><span class="servicetitle">Tires &amp; Suspension</span></div>
					<a href="tel:13606566570">
						<div style="background-color:#DE5051;color:#fff;margin:0px 0px 0px 35px;padding:10px;width:165px;text-align:center;">
							<span style="font-size:25px;">Call for Prices</span>
						</div>
					</a>
					<ul style="text-align:left;font-size:20px;margin-top:15px;">
					   <li>Tire Rotation</li>
					   <li>Pressure Check</li>
					   <li>Rack &amp; Pinion</li>
					   <li>Suspension Repair</li>
					</ul>

				</div>
			</div>
			<div class="col-lg-4 col-sm-6 sbcol" style="padding-top:15px;padding-bottom:15px;">
				<div class="servicebox" style="background-image:url('media/images/engine.png');">
					<div style="margin:0px auto 10px;text-align:center;"><span class="servicetitle">Engine Services &amp; Repair</span></div>
					<a href="tel:13606566570">
						<div style="background-color:#4c88c1;color:#fff;margin:0px 0px 0px 35px;padding:10px;width:165px;text-align:center;">
							<span style="font-size:25px;">Call for Prices</span>
						</div>
					</a>
					<ul style="text-align:left;font-size:20px;margin-top:15px;">
					   <li>Fuel System Cleaning</li>
					   <li>Gasket Replacement</li>
					   <li>Belt Replacement</li>
					   <li>Spark Plug Replacements</li>
					</ul>

				</div>
			</div>
		<!--second row-->

			<div class="col-lg-4 col-sm-6 sbcol" style="padding-top:15px;padding-bottom:15px;">
				<div class="servicebox" style="background-image:url('media/images/wrench.png');">
					<div style="margin:0px auto 10px;text-align:center;"><span class="servicetitle">General Maintenance</span></div>
					<a href="tel:13606566570">
						<div style="background-color:#a677e0;color:#fff;margin:0px 0px 0px 35px;padding:10px;width:165px;text-align:center;">
							<span style="font-size:25px;">Call for Prices</span>
						</div>
					</a>
					<ul style="text-align:left;font-size:20px;margin-top:15px;">
					   <li>Fluids Check</li>
					   <li>Vehicle Inspection</li>
					   <li>Computer Diagnostics</li>
					   <li>Battery Replacement</li>
					</ul>

				</div>
			</div>
			<div class="col-lg-4 col-sm-6 sbcol" style="padding-top:15px;padding-bottom:15px;">
				<div class="servicebox" style="background-image:url('media/images/brakedisc.png');">
					<div style="margin:0px auto 10px;text-align:center;"><span class="servicetitle">Brake Check &amp; Repair</span></div>
					<a href="#contact">
						<div style="background-color:#ec7424;color:#fff;margin:0px 0px 0px 35px;padding:10px;width:165px;text-align:center;">
							<span style="font-size:25px;">From</span> <span style="font-size:30px;font-weight:bold;">$225</span>
						</div>
					</a>
					<ul style="text-align:left;font-size:20px;margin-top:15px;">
					   <li>Brake Inspections</li>
					   <li>Brake Disks/Pads</li>
					   <li>Brake Fluids Check</li>
					   <li>Calipers Replacement</li>
					</ul>

				</div>
			</div>
			<div class="col-lg-4 col-sm-6 sbcol" style="padding-top:15px;padding-bottom:15px;">
				<div class="servicebox" style="background-image:url('media/images/electrical.png');">
					<div style="margin:0px auto 10px;text-align:center;"><span class="servicetitle">Electrical Systems</span></div>
					<a href="tel:13606566570">
						<div style="background-color:#ecbf24;color:#333;margin:0px 0px 0px 35px;padding:10px;width:165px;text-align:center;">
							<span style="font-size:25px;">Call for Prices</span>
						</div>
					</a>
					<ul style="text-align:left;font-size:20px;margin-top:15px;">
					   <li>Electrical Troubleshooting</li>
					   <li>Lamp Replacement</li>
					   <li>Alternator Check</li>
					   <li>Ignition Work</li>
					   <li>Stereo Installation</li>
					</ul>

				</div>
			</div>
			<div style="width:100%;text-align:center;"> <a href="services.php" class="btn btn-primary btn-lg" style="">And Much More! &gt;&gt;</a></div>
		</div>
	</div>

	<!--<div class="thin-banner-2"></div>-->
	<div class="container-fluid" style="padding:0px;background-color:#769A72;color:white;">
		<div class="container">
			<h1 style="margin-bottom:20px;">Specials &amp; Discounts <small style="color:#eaeaea;"><br><i>Click any coupon to print. Must be presented in advance (mobile or printed)</i></small></h1>
		</div>
	</div>
	<div class="container-fluid" style="padding-top:25px;background-color:#D8ECD6;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="couponholder">
						<img src='media/graphics/specials/freetowing7-27-16_s.png' class='img-responsive' alt='towing coupon' title='Click to print'>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="couponholder">
						<img src='media/graphics/specials/50dollarsoffrepairs7-27-16_s.png' class='img-responsive' alt='repairs and maintenance coupon' title='Click to print'>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="couponholder">
						<img src='media/graphics/specials/25dollarsoffbrakeservice8-12-16_s.png' class='img-responsive' alt='brake service coupon' title='Click to print'>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="couponholder">
						<img src='media/graphics/specials/fullinspection8-13-16_s.jpg' class='img-responsive' alt='bumper to bumper inspection coupon' title='Click to print'>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="couponholder">
						<img src='media/graphics/specials/coldweatherspecial9-29-16_s.jpg' class='img-responsive' alt='bumper to bumper inspection coupon' title='Click to print'>
					</div>
				</div>
			</div>
		</div><!-- end container-->
		<br>
	</div><!-- end container fluid-->

	<div class="container-fluid" style="padding:15px;background-color:#2b2b2b;color:white;border-top: 5px solid #a6d040;border-bottom: 5px solid #a6d040;">
		<div class="row text-center py-0">
			<h2>Mission Statement</h2>
			<h2 style="font-style:italic;font-size:20px;font-weight:normal;">Earning your trust through precision, workmanship, knowledgeable and friendly personnel, 
				and an unwavering commitment to exceptional communication.</h2>
		</div>
	</div>
	
	<div class="container-fluid" style="padding:0px;background-color:#8fb98b;">
		<div class="row">
			<div class="col-md-5" style="background-color:#8fb98b;padding:10px 25px;font-size:18px;">
				<table id="lightsocial" style="text-align:center;margin:0px auto;width:100%;max-width:700px;">
					<tr>
						<td colspan="4" id="findusXS" style="padding:10px 0px 0px 0px;font-size:25px;line-height:20px;font-weight:bold;color:#444;">Find us on: </td>
					</tr>
					<tr>
						<td id="findusSM" style="padding:10px;font-size:35px;line-height:30px;font-weight:bold;color:#333;">Find us on: </td>
						<td style="padding:10px;"><a href="https://www.facebook.com/Luckys-Speed-Shop-206552329536726/" target="_blank" style="outline:none;border:0;"><img src="media/logos/FB-f-Logo__white_50.png" class="img-responsive"></a></td>
						<td style="padding:10px;"><a href="https://www.linkedin.com/in/lucky-sing-aa5651123/" target="_blank" style="outline:none;border:0;"><img src="media/logos/In-White-50px-TM.png" class="img-responsive"></a></td>
								<td style="padding:10px;"><a href="https://www.instagram.com/luckys_speed_shop_/?hl=en" target="_blank" style="outline:none;border:0;"><img src="media/logos/insta_100.png" class="img-responsive"></a></td>
						<td style="padding:10px;"><a href="http://www.yelp.com/biz/lucky-speed-shop-bellingham" target="_blank" style="outline:none;border:0;"><img src="media/logos/yelp-55.png" class="img-responsive"></a></td>
					</tr>
				</table>

				<div style="border-top:2px solid #eaeaea;padding:10px 0px 10px;">
					<div style="background: #f9f9f9;border-left:10px solid #ccc;border-right:10px solid #ccc;margin:10px;padding: 0.5em 10px;" class="testimonial">
						<div class="bigquotes" style="float:left;">&#x201c;</div>
						<div class="bigquotes" style="float:right;">&#x201d;</div>
						<img src="media/graphics/leftquote36.png" style="height:15px;margin:3px;vertical-align:bottom;" class="smbigquotes" alt="left quote">
						Probably the best private mechanic in town...Would recommend to anyone else and would definitely come again. Thanks Lucky!
						<img src="media/graphics/rightquote36.png" style="height:15px;margin:3px;vertical-align:bottom;" class="smbigquotes" alt="right quote">
						<p class="citename">&mdash;Ata Berdyev <span class="citevia">via Facebook</span><p>
					</div>
					<div style="background: #f9f9f9;border-left: 10px solid #ccc;border-right:10px solid #ccc;margin:10px;padding: 0.5em 10px;" class="testimonial">
						<div class="bigquotes" style="float:left;">&#x201c;</div>
						<div class="bigquotes" style="float:right;">&#x201d;</div>
						<img src="media/graphics/leftquote36.png" style="height:15px;margin:3px;vertical-align:bottom;" class="smbigquotes" alt="left quote">
						5 stars for this guy! He changed my transmission fluid for a really good price, he also did A Lot of fixing for my husbands car! Great service!
						<img src="media/graphics/rightquote36.png" style="height:15px;margin:3px;vertical-align:bottom;" class="smbigquotes" alt="right quote">
						<p class="citename">&mdash;Mary A. <span class="citevia">via Yelp</span><p>
					</div>
					<div style="background: #f9f9f9;border-left: 10px solid #ccc;border-right:10px solid #ccc;margin:10px;padding: 0.5em 10px;" class="testimonial">
						<div class="bigquotes" style="float:left;">&#x201c;</div>
						<div class="bigquotes" style="float:right;">&#x201d;</div>
						<img src="media/graphics/leftquote36.png" style="height:15px;margin:3px;vertical-align:bottom;" class="smbigquotes" alt="left quote">
						Great guy, he provides great repair services. Fixed my engine when no one else could. And did it fast!
						<img src="media/graphics/rightquote36.png" style="height:15px;margin:3px;vertical-align:bottom;" class="smbigquotes" alt="right quote">
						<p class="citename">&mdash;Kevin Michael Thomas Empson <span class="citevia">via Facebook</span><p>
					</div>
				</div>
			</div>

			<div class="col-md-7" style="background-color:#8fb98b;padding:10px 25px;font-size:18px;">	
				<h1 style="margin-bottom:20px;font-weight:bold;text-align:center;">Certified Professionals</h1>
				<div style="border-top:2px solid #eaeaea;padding:10px 0px 10px;">
					<div class="col-sm-5" style="margin:0px 0px 25px 0px;text-align:center;">
						<img src="media/logos/ase.jpg" id="aselogo" style="max-width:225px;margin-left:auto;margin-right:auto;" class="img-responsive"><br>
						<a href="http://www.bbb.org/northwest/business-reviews/auto-repair-and-service/lucky-s-speed-auto-shop-in-bellingham-wa-1000040534/#sealclick" class="text-center" style="display:block;margin:0 auto;max-width:153px;" target="_blank" rel="nofollow">
							<img class="img-responsive" src="https://seal-alaskaoregonwesternwashington.bbb.org/seals/blue-seal-153-100-bbb-1000040534.png" style="border: 0;width: 100%;" alt="Lucky's Speed Auto Shop BBB Business Review" />
						</a>
					</div>
					<div class="col-sm-7" style="padding: 0.5em 10px;">
						<p style="text-indent:0px;">Our courteous and professional team is ASE certified, so you can rest assured your car is being taken care of, and all maintenance is done right.</p>
						<p style="text-indent:0px;">We strive to stay up-to-date with the latest technologies and standards so that we can deliver the best service to all our customers.</p>
						<p style="text-indent:0px;">Customer satisfaction is our number-one priority and we work hard to get positive feedback.</p>
						<p style="text-indent:0px;">With our experience and skills, we are able to service both domestics and imports whether they are 20 years old or newer models.</p>
						<p style="text-indent:0px;">We also have experience in OEM, aftermarket and performance upgrades.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" style="background-color:#678a75;">
			<div class="col-md-6" style="padding:10px 25px;min-height;500px;">
				<div style="margin:0px auto;text-align:center;">
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<h2 style="color:#fff;font-weight:bold;">Lucky's Facebook Feed<span class="text-muted"></span></h2>
					<div style="border:5px solid #91BB8C;" class="fb-page" data-href="https://www.facebook.com/Luckys-Speed-Shop-206552329536726/" data-tabs="timeline" data-width="500" data-height="625" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Luckys-Speed-Shop-206552329536726/"><a href="https://www.facebook.com/Luckys-Speed-Shop-206552329536726/">Lucky's Speed Shop Auto Repair</a></blockquote></div></div>
				</div>
			</div>
			<div class="col-md-6" style="padding:10px 25px;min-height:625px;">
				<div style="max-height:500px;text-align:center;margin:0px auto;">
					<h2 style="color:#fff;font-weight:bold;">Lucky's Instagram<span class="text-muted"></span></h2>
					<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Bsqq8wIB0U1/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px auto; max-width:250px; min-width:400px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Bsqq8wIB0U1/?utm_source=ig_embed&amp;utm_medium=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Bsqq8wIB0U1/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Lucky’s Speed Shop RichMiller (@luckys_speed_shop_)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2019-01-15T19:20:59+00:00">Jan 15, 2019 at 11:20am PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
					<!--<blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Bjvky2nHqLM/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px auto; max-width:100px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Bjvky2nHqLM/?utm_source=ig_embed&amp;utm_medium=loading" style="background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Bjvky2nHqLM/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Lucky’s Speed Shop RichMiller (@luckys_speed_shop_)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-06-08T00:20:52+00:00">Jun 7, 2018 at 5:20pm PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>-->
				</div>
			</div>
			
			
		</div>
	</div>

<?php
//============================END PAGE CONTENT=============================//
$MAINCONTENT=ob_get_contents();
ob_end_clean();
include_once('template.php');
ob_end_flush();
?>