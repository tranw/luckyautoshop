<?php

$metadesc="Lucky's Auto Repair is an automotive service shop offering towing, transmission, brake service in Bellingham, Ferndale, Everson, and onsite around Whatcom County.";

$pagetitle="Auto Detailing Bellingham | Towing Lynden | Lucky's Auto Shop";

$pagecss="
	#luckyletter{font-size:18px;margin:0px auto 0px;padding: 0.5em 0px 0px;}
	
	@media only screen and (max-width : 480px) {
		#luckyletter{font-size:16px;border-left:0;border-right:0;margin:0px auto 0px;padding: 0px 10px 0px;}
	}
";

$pagescripts="";

$additionheadcontent="";

//===========================CALLBACK FUNCTION============================//
function callback($buffer){return ($buffer);}  // return complete page
ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
	<div class="container" style="margin-top:50px;/*border-left:10px solid #ccc;border-right:10px solid #ccc;background: #f9f9f9;*/">
	
		<!--ROW 1 TESTIMONIALS-->

		<div class="row" style="margin:0px auto 0px auto;">
			<div class="col-md-12" style="padding:5px 5px 0px 5px;">
				<div id="luckyletter" style="background: #f9f9f9;">
					<img src="media/images/aboutluckybanner.jpg" class="img-responsive" style="margin:0px auto;">
				</div>
			</div>
		</div><!--end row-->
		<!--ROW 2 TESTIMONIALS-->
		<div class="row" style="margin:20px auto 0px auto;">
			<div class="col-sm-12" style="padding:0px 5px 0px 5px;">

				<div>
					<!--<img src="media/images/shop.jpg" class="img-responsive"><br><h1>About Lucky's<small></small></h1><hr class="featurette-divider">-->
					<h1>About Lucky's Auto Shop<small></small></h1><hr class="featurette-divider">

				</div>

			</div>
		</div>


		<div class="row" style="margin:0px auto 25px auto;">

			<div class="col-md-7" style="padding:0px 5px 0px 5px;">

				<div id="luckyletter" style="">
					<!--<p>I'm a first generation immigrant whose family moved to the United States from India when I was 7 years old.
					<p>Even before that time, I was taking things apart and putting them back together again. (Mom wasn't to thrilled about that...)
					<p>I grew up here in the the Pacific Northwest and went to a local tech school to get my AA in Automotive Technology.
					<p>I then worked as an auto tech at a local import dealership for a few years, gaining quality experience, knowledge and additional training.
					<p>Following this, I worked for an industrial farming company as a mechanic, aquiring even more knowledge about all things mechanical.
					<p>In that time I also earned my ASE Masters Certificate. Here I am in 2016 taking a huge leap by starting my own repair shop.
					<p>It's a small shop, but I have huge dreams and am willing to work as hard as I can for my customers. 
					<p>Give me a call and I'd love to meet a new customer and get your needs taken care of. -->
					<p>Lucky's Speed Shop is a family owned automotive business in Bellingham, Washingon that was started in January of 2016. Over the course of three years we have grown from one to a team of three automotive specialists.
					<p>We offer a wide variety of automotive services, from basic oil changes to complete engine replacements.
					<p>With our highly skilled ASE Certified Technicians trained in both foreign and domestic vehicles, your car will receive the best diagnostics and repairs available in Whatcom County and beyond.
					<p>You can rest assured that no matter what problem your car or truck is experiencing, we have the right equipment and highly qualified mechanics and staff to meet your needs.
					<p>We take pride in making sure your vehicle leaves our shop in optimum running condition, with safety being our number one priority. 
					<p> Our service advisors are very helpful and will explain to you the issues with your vehicle and the full repair process. Our goal is to make you comfortable enough to ask any questions that may arise.
					Lucky's Speed Shop would be honored to have you as a customer.
					<p>
					<p style="padding:30px;">Sincerely,<br>
					<span style="font-size:30px;font-style:italic;color:#555;">Lucky Sing</span><br><span style="font-size:15px;font-style:italic;color:#555;">Owner & Lead Mechanic</span>
					</p>
				</div>
			</div>
			<div class='col-md-5'>
				<img src="media/images/luckycrew2019.jpg" alt="lucky automotive team" class="img-responsive">
			</div>
			
		</div><!--end row-->
	</div><!--end container-->

<?php
//============================END PAGE CONTENT=============================//
$MAINCONTENT=ob_get_contents();
ob_end_clean();
include_once('template.php');
ob_end_flush();
?>
