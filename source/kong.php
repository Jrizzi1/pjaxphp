<?php 
$title = 'King Kong';
$body = "<ul class='header'><li><a href='index.php' data-pjax='main'>back</a></li></ul><h2>$title</h2><img src='images/Kong1.jpg' />";

 if($_SERVER["HTTP_X_PJAX"]): 
	echo $body;

else: 
include("header.php");
	echo '<div id="main">'.$body.'</div>';
include("footer.php");	
endif;

echo "<pre>";
echo "Page loaded with PJAX: ".$_SERVER["HTTP_X_PJAX"];
echo "</pre>";
?>