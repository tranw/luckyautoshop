<?php
	$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo $metadesc; ?>">
		<?php echo $additionheadcontent; ?>
		<title><?php echo $pagetitle; ?></title>
		<link rel="shortcut icon" href="favicon.ico?v=2016-06-26" type="image/x-icon" /> 
		<link href='//fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
		<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/lucky.css?v=2019-01-23" rel="stylesheet">
		<style>
		<?php echo $pagecss;?>
		</style>
	</head>
	<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#81A97E;color:black;box-shadow:0px 0px 2px #666;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/" class="h1" style="color:white;text-decoration:none;">
					<img src="media/logos/logo_whiteonly_auto_sm.png" alt="Luckys Speed Shop Logo" style="max-height:90px;margin:9px;" class="img-responsive hidden-xs hidden-sm">
					<img src="media/logos/logo_whiteonly_auto_sm.png" alt="Luckys Speed Shop Logo" style="max-height:60px;margin:9px;"  class="img-responsive hidden-xs visible-sm-block hidden-md hidden-lg">
					<img src="media/logos/logo_whiteonly_auto_sm.png" alt="Luckys Speed Shop Logo" style="max-height:70px;margin:0px;padding:10px;"  class="img-responsive visible-xs-block hidden-sm hidden-md hidden-lg">
				</a>
			</div>
			  <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
					<li class="<?= ($activePage == 'services') ? 'active':''; ?>"><a href="services.php">Services</a></li>
					<li class="<?= ($activePage == 'testimonials') ? 'active':''; ?>"><a href="testimonials.php">Testimonials</a></li>
					<li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php">About</a></li>
					<li class="<?= ($activePage == 'faqs') ? 'active':''; ?>"><a href="faqs.php">FAQs</a></li>
					<li><a href="index.php#contact">Contact</a></li>		
				</ul>
			</div>
		</div>
	</nav><!--END NAV BAR-->

<?php echo $MAINCONTENT;?>

	<!-- Footer -->
	<div style="width:100%;background-color:#2d2d2d;min-height:100px;">
		<div class="container" style="padding:10px;">
			<div class="row" style="color:#fff;">
				<div class="col-md-12 text-left" style="padding:10px;font-size:20px;">
					<img src="media/logos/logo_white_auto.png" id="ftrlogo" class="img-responsive">		
					<div style="padding-top:10px;">
						<div id="ftrcontact">
						503 W Laurel Rd<br>
						Bellingham, WA 98226<br>
						Phone: <a style="color:inherit;text-decoration:none;" href="tel:13606566570">360-656-6570</a>
						</div>
						<div style="margin-top:1em;"><strong>&copy; <?php date_default_timezone_set('America/Los_Angeles'); echo date('Y');?> Lucky's Auto Shop</strong></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php echo $pagescripts; ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-81652496-1', 'auto');
	  ga('send', 'pageview');

	</script>
	</body>
</html>
