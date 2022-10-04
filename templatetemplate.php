<?php

$metadesc="";

$pagetitle="";

$pagecss="";

$pagescripts="";

//===========================CALLBACK FUNCTION============================//
function callback($buffer){return ($buffer);}  // return complete page
ob_start("callback");
//===========================BEGIN PAGE CONTENT============================//
?>


<?php
//============================END PAGE CONTENT=============================//
$MAINCONTENT=ob_get_contents();
ob_end_clean();
include_once('template.php');
ob_end_flush();
?>
