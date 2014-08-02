<?php 
$title = 'Tyrannosaurus';
include("status.php");
$body = "<ul class='header'><li><a href='index.php' data-pjax='main'>back</a></li></ul><h2>$title</h2><img src='images/Trex.jpg' />" . $what;

if($_SERVER["HTTP_X_PJAX"]): 

// If the page is being loaded using Pjax
echo $body;
echo "<title>{$title}</title>";

else: 

// If not
include("header.php");
echo '<div id="main">'.$body.'</div>';
include("footer.php");	

endif;
?>