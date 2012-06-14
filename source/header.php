<html>
<head>
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.pjax.js"></script>
<script type="text/javascript">


var direction = "right";
$(document).ready(function(){
  $('a').pjax({
    container: '#main'
  });
  	
$('#main').on('pjax:start', function() {
  $(this).addClass('loading')
})

$('#main').on('pjax:end', function() {
  $(this).removeClass('loading')
})


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
<? $date = date("Y-m-d H:i:s");
echo "<p ><strong style='color:green'> $date</strong> (Time should only change on refresh!)</p>";
?>