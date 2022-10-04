<?php

$metadesc="Special offer at Lucky's Auto Shop for our first-time customers!";

$pagetitle="Special Offer Discounts | Lucky's Auto Shop";

$pagecss="
#welcome-coupon-1, #welcome-coupon-2 {
	border: 20px solid #555;
	cursor: pointer;
	background-color: #999;
}
#welcome-coupon-1, #welcome-coupon-2 {
	padding: 30px;
	font-size: 25px;
}
#welcome-coupon-1 h2, #welcome-coupon-2 h2 {
	color: #fff;
}
.welcome-coupon-container {
	margin-top: 50px;
}
.welcome-coupon-container .row {
	margin: 25px;
}
";

$pagescripts="	<script>
	$(function() {
		$( '#welcome-coupon-1' ).click(function() {
			w=window.open();
			w.document.write($(this).html());
			w.print();
			w.close();
		});
		$( '#welcome-coupon-2' ).click(function() {
			w=window.open();
			w.document.write($(this).html());
			w.print();
			w.close();
		});
	});
	</script>
";

$additionheadcontent="<META NAME=\"ROBOTS\" CONTENT=\"NOINDEX, NOFOLLOW\">
";

//===========================CALLBACK FUNCTION============================//
function callback($buffer){return ($buffer);}  // return complete page
ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>

<div class="container welcome-coupon-container">
	<div class="row text-center" id="welcome-coupon-1">
		<h1>Special Offer for First-Time Customers! (Click to Print)</h1>
		<h3>Must be presented in advance (mobile or printed)</h3>
		<h2>$55 off any $400 service or more.</h2>
		<p>Not valid with other offers or specials. Must be presented in advance. Some limitations may apply. One per customer.</p>
	</div>
	<div class="row text-center" id="welcome-coupon-2">
		<h1>Special Offer for First-Time Customers! (Click to Print)</h1>
		<h3>Must be presented in advance (mobile or printed)</h3>
		<h2>Free vehicle inspection for first-time customers</h2>
		<p>Not valid with other offers or specials. Must be presented in advance. Some limitations may apply. One per customer.</p>
	</div>
	<div class="row text-center">
		<a class="btn btn-primary btn-lg" href="/" role="button">Proceed to Lucky's Auto Shop &gt;&gt;</a>
	</div>
</div>

<?php
//============================END PAGE CONTENT=============================//
$MAINCONTENT=ob_get_contents();
ob_end_clean();
include_once('template.php');
ob_end_flush();
?>