<?php
// Show if the page was loaded using Pjax

if($_SERVER["HTTP_X_PJAX"] == true) {
	$result = 'Yes! \o/';
} else {
	$result = 'No! ~O~';

	if($imhome == true) {
		$result .= "\n\r" . 'But you are at home, try to acess some page. =]';
	}
}

$what = "<pre>";
$what .= "Page loaded with PJAX: $result";
$what .= "</pre>";