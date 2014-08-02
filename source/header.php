<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.pjax.js"></script>
<script type="text/javascript">
	var direction = "right";
	$(document).ready(function(){
		$(document).pjax('a', '#main');
		$(document).on('pjax:start', function() {
			$(this).addClass('loading')
		});
		$(document).on('pjax:end', function() {
			$(this).removeClass('loading')
		});
	});
</script>

<style> 
	#main {
		font-family:Helvetica,Arial,sans-serif;	
		width:30%;  
		opacity: 1;
		transition: opacity 0.20s linear;
	}
	#main.loading {
		opacity: 0.5;
	}	
	h2 {margin-left:200px;}
	ul{padding-left:15px; list-style:none;}
</style> 

</head>
<body>
<?php $date = date("Y-m-d H:i:s");
echo "<p ><strong style='color:green'> $date</strong> (Time should only change on refresh!)</p>";
?>