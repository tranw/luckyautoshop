<?php

$metadesc="Purchase Lucky's Auto Shop merchandise online or in-store.";

$pagetitle="Lucky's Speed Shop Auto Repair | Merchandise";

$pagecss="
	#luckyletter{font-size:18px;border-left:10px solid #ccc;border-right:10px solid #ccc;margin:0px auto 0px;padding: 0.5em 10px 0px;}
	
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
	<div class="container">
	
		<!--ROW 1 TESTIMONIALS-->

		<div class="row" style="margin:0px auto 0px auto;">
			<div class="col-md-12" style="padding:5px 5px 0px 5px;">
				<div id="my-store-10216083"></div>
				<div>
				<script type="text/javascript" src="https://app.ecwid.com/script.js?10216083&data_platform=code&data_date=2016-09-29" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(3,3) list(10) table(20)","categoryView=grid","searchView=list","id=my-store-10216083");</script>
				</div>
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
