<?php

$metadesc="Frequently asked car maintenance questions and some automotive tips on keeping your car in top shape, On site repairs, recommended mileage interval services";

$pagetitle="Automotive Services | Auto Maintenance | Lucky's Auto Shop";

$pagecss="
	ul#faqlist{padding-left: 0px;}
	ul#faqlist>li{
		list-style: none;
		font-size:20px;
		font-weight:bold;
		padding:10px 0px;
		cursor:pointer;
		border-left:8px solid #fff;
		text-indent: -45px;
  		padding-left: 45px;
	}
	ul#faqlist>li:before {
		content: \"?\";
		display: inline-block;
		text-indent:0;
		font-size:22px;
		width:25px;
		margin-right:10px;
		margin-left:10px;
		line-height:22px;
		color:#fff;
		text-align:center;
		background-color:#ccc;
	}
	ul#faqlist li>div{
		display: none;
		margin-top:10px;
		padding:8px 0px 5px 0px;
		margin-right:25px;
		font-weight:normal;
		border-top:2px solid #999;
		text-indent:0;
	}
	ul#faqlist li p{margin: 0 0 15px;}
	/*hover*/
	ul#faqlist>li:hover{background-color:#e8e8e8;border-left:8px solid #888;}
	ul#faqlist>li:hover:before{background-color:#999;}
";

$pagescripts="
<script>
$(function() {
	$( 'ul#faqlist>li' ).click(function() {
			$(this).children('div').slideToggle();
	});
	$('#collapseall' ).on('click', function(){
		if ($( '#collapseall ').attr( 'aria-pressed' ) == 'false') {
			$( 'ul#faqlist>li>div' ).slideDown();
		} else if ($( '#collapseall ').attr( 'aria-pressed' ) == 'true') {
			$( 'ul#faqlist>li>div' ).slideUp();
		}
	});
});
</script>
";

$additionheadcontent="";

//FAQ LOOPS

$faq['q'][]="What does a \"Check Engine\" light mean?";
$faq['a'][]="<p>The \"Check Engine\" light comes on in a vehicle when the onboard computer receives irregular readings from any of the sensors monitoring engine performance and other factors.
<p>If your \"Check Engine\" light, or any other warning message appears on your dashboard, it is important that you <a href='index.php#contact'>bring your car in</a> for an inspection <span style='text-decoration:underline;'>as soon as possible</span>. The warning could mean anything from serious and immediate engine trouble, to something that could cause long-term damage to your vehicle&mdash;despite it appearing to run normally. 
<p> With our diagnostic equipment, we will be able to quickly determine the origin of the issue and address the underlying causes.";

$faq['q'][]="My car is overheating, what should I do?";
$faq['a'][]="<p>Overheating should never occur with a properly maintained vehicle, and it means something is seriously wrong.
<p>Signs of overheating may include: 
<ul style='margin-bottom:12px;'>
 <li>If the needle in the temperature gauge <!--(examples: <a href='https://commons.wikimedia.org/wiki/File:Ci17250a_4.jpg#/media/File:Ci17250a_4.jpg' target='_blank'>#1</a>, <a href='https://commons.wikimedia.org/wiki/File:Ci177PSDa.jpg#/media/File:Ci177PSDa.jpg' target='_blank'>#2</a>) -->in your dashboard approaches the redline.</li>
 <li>Steam or vapor coming out of your engine. (May look like smoke).</li>
 <li>Warning message appears on your dashboard.</li>
 <li>Smell of burning plastic or oil coming from engine.</li>
</ul>
<p>If your car starts overheating <span style='text-decoration:underline;'>pull over immediately</span> when it is safe to do so, and <span style='text-decoration:underline;'>turn the car off</span>.
<p>It is very important that you do not allow the car to continue running when it overheats as this can cause serious and permanent damage to your engine.
<p>The underlying causes may be low coolant, low oil, fan or thermometer malfunctions, or some other factors. 
<p>We would recommend <a href='services.php'>towing your vehicle</a> in to our shop so we can determine the problem before it causes serious damage.";

$faq['q'][]="What regular maintenance should be done on my automobile?";
$faq['a'][]="<p><a href='services.php'>Regular maintenance</a> is very important for making sure your vehicle is safe, efficient, and fully operational.
<p>Every vehicle has recommended regular maintenance service intervals detailed in the owner's manual that <span style='text-decoration:underline;'>should not be ignored</span>!
<p>The exact intervals for checking/replacing different parts of your vehicle will vary from car to car. Below is a general recommendation that may not match your exact vehicle requirements.

<ul style='margin-bottom:12px;'>
 <li style='padding-bottom:12px;'>Oil change &amp; filter replacement
	<br><small><i>This should be done every 3,000-5,000 miles in order to keep your oil clean, preventing metal particles and other contaminants from damaging your engine's internal parts.</i></small>
 </li>
 <li style='padding-bottom:12px;'>Spark plug replacement
	<br><small><i>Properly firing spark plugs make sure your engine is running efficiently and not misfiring. It is generally recommended to check these every 30,000 miles.</i></small>
 </li>
 <li style='padding-bottom:12px;'>Timing &amp; other belt replacements
	<br><small><i>The timing belt allows for precision valve opening and closing, making sure your engine runs smoothly. Time and extreme temperatures can cause belts to degrade and stretch, resulting in a poor running engine and possible damage. These should be checked approx. every 60,000-100,000 miles.</i></small>
 </li>
 <li style='padding-bottom:12px;'>Fluids check &amp; flush
	<br><small><i>Fluids get dirty and dissipate over time. Dirty fluids can cause damage to internal parts. Lack of brake fluids means you can't stop properly, and lack of radiator fluids means your engine will overheat. Lack of oil will overheat and severely damage your engine. We recommend checking fluids every 3,000-10,000 miles, depending on the car model and type of oil.</i></small>
 </li>
 <li style='padding-bottom:12px;'>Tire inspections, rotation &amp; replacements
	<br><small><i>Tires are very important for fuel efficiency. That's why it is good to routinely check your tire pressure. Low tires will significantly reduce your miles/gallon. Tires should also be rotated approximately every 6,000-8,000 miles. Bring you car in for an inspection if you feel the car pulling in one direction or shuddering.</i></small>
 </li>
 <li style='padding-bottom:12px;'>Brake checks &amp; replacements
	<br><small><i>Brakes are one of the most important safety features on your car and should be treated appropriately.
	<br>Squeaky brakes may be a sign that your brake pads are worn out and need replacement. Shaky brakes might signify warped discs that need repair. 
	<br>You should get your brakes checked every 20,000 miles, especially if you do a lot of heavy braking or 'ride the brakes'.
	</i></small>
 </li>
 <li style='padding-bottom:12px;'>Air filter replacements
	<br><small><i>There are two main air filters in your car. One for the engine intake and one for cabin ventilation.
	<br>The engine air filter should probably be checked every 30,000 miles (or more if you drive in dusty/dirty conditions frequently).
	<br>The air filter for the cabin ventilation could be checked a little more often. It's not necessary to keep your car running, but will make your driving experience more comfortable and clean!
	</i></small>
 </li>
 <li style='padding-bottom:12px;'>Safety inspection
	<br><small><i>Safety inspections should be done periodically to make sure you car is in safe working order. Inspections are very important before you go on long road trip, to make sure you don't get stranded. It is also a good idea to have a newly purchased used car inspected, or even before you buy it!</i></small>
 </li>
</ul>

<p>Proper maintenance of your automobile is required to prevent you from being dangerously stranded and/or needing very expensive repairs in the future. It can also save your hundreds of dollars in fuel lost due to running inefficiently!";

$faq['q'][]="Do you perform the same recommended mileage interval services that dealerships provide (30K, 60K, 90K, 120K, etc.)?";
$faq['a'][]="<p>Absolutely! We provide the same service interval maintenance as dealerships, which keeps your factory warranty in effect.
<p>We use Original Equipment Manufacturer (OEM) parts if you require, and we are happy to fill out your maintenance log to document services performed.
";

$faq['q'][]="Does Lucky's Speed Shop do warranty repairs?";
$faq['a'][]="<p>We may be able to perform repairs for extended warranty policies, but we are not able to do new car warranty repairs.
<p>You will need to read your individual warranty policy for clarification.";

$faq['q'][]="How much do vehicle repairs/maintenance cost?";
$faq['a'][]="<p>Some  <a href='services.php'>regular maintenance</a> items have fixed prices, but in general we need to evaluate each individual issue in order to provide an accurate estimate. <a href='index.php#contact'>Give us a call</a> at <a href='tel:13606566570'>360-656-6570</a> to learn more. 
<p>We may be able to give you a ballpark estimate over the phone, but your vehicle will need to be brought in for an inspection for a more accurate price quote.";

$faq['q'][]="What form of payment do you accept?";
$faq['a'][]="<p>We accept cash, debit card, and all major credit cards.";

$faq['q'][]="Is an appointment necessary for repair or maintenance?";
$faq['a'][]="<p>We do recommend that you book an appointment for faster service. Some services that do not require an appointment include: tire air fill up, wiper blade replacement, and light bulb change.
<p>You can <a href='index.php#contact'>call us</a> at <a href='tel:13606566570'>360-656-6570</a> to schedule an appointment.
								<!--<script id=\"setmore_script\" type=\"text/javascript\" src=\"https://my.setmore.com/js/iframe/setmore_iframe.js\"></script><a id=\"Setmore_button_iframe\" style=\"float:none\" href=\"https://my.setmore.com/bookingpage/94e4a019-1b43-494a-b4e7-87d46fd0036f\"><img border=\"none\" src=\"https://my.setmore.com/images/bookappt/SetMore-book-button.png\" alt=\"Book an appointment with Lucky's Speed Shop Auto Repair using SetMore\" /></a>-->
";

$faq['q'][]="What times can I drop-off or pick-up my vehicle?";
$faq['a'][]="<p>Our <a href='index.php#contact'>hours</a> are 8:00am–5:00pm Monday–Friday, and Saturday by appointment only. You can pick-up your vehicle anytime during our regular working hours.
<p>We also have a dropbox to put keys in if we are not available when you drop off your vehicle. If you need to schedule a pick-up outside of our regular hours, please <a href='index.php#contact'>give us a call</a> at <a href='tel:13606566570'>360-656-6570</a>.";

$faq['q'][]="Does Lucky's Speed Shop guarantee parts &amp; labor?";
$faq['a'][]="<p>Lucky's Speed Shop guarantees labor workmanship for 2 years or 24,000 miles&mdash;whichever comes first.
<p>All parts come with a manufacturer warranty, which varies from part to part.
<p>We are proud of our work and do our best to make sure <a href='testimonials.php'>our customers are satisfied</a>.";

$faqlist="";
$faqi=0;
foreach($faq['q'] as $question){
	$faqlist.="\t<li><!--<span>?</span>-->".$question."\r\n\t<div>".$faq['a'][$faqi]."</div></li>\r\n\r\n";
        $faqi++;
}

//===========================CALLBACK FUNCTION============================//
function callback($buffer){return ($buffer);}  // return complete page
ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>
	<div class="container-fluid" style='padding-top:40px;border-bottom:20px solid #555;'>
		<div class="container">
			<div>
				<h1>Car Care Questions &amp; Tips<br>
				<small>Frequently&dash;asked car maintenance questions and some inside tips on keeping your car in top shape.</small>
				</h1>
			</div>
		</div><!--end container-->
	</div><!--end container fluid-->
	<div class="container">
		<br>
		<button type="button" id="collapseall" class="btn btn-secondary btn-lg" data-toggle="button" aria-pressed="false" autocomplete="off" style="padding: 5px 5px;font-size: 16px;"><span class="glyphicon glyphicon-th-list" ></span> View/Hide All</button>
	</div>
	<div class="container">
		<div style="padding:25px 0px;" id="faqholder">
			<ul id="faqlist">

<?php echo $faqlist; ?>

			</ul>
		</div>
	</div><!--end container fluid-->

<?php
//============================END PAGE CONTENT=============================//
$MAINCONTENT=ob_get_contents();
ob_end_clean();
include_once('template.php');
ob_end_flush();
?>
