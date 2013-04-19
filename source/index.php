<?php if($_SERVER["HTTP_X_PJAX"]): 
?>
<h1>PJAX using PHP</h1>
<ul class='header'>
      <li><a href='trex.php' data-pjax='main'>Tyrannosaurus</a></li>
      <li><a href='kong.php' data-pjax='main' >King Kong</a></li>
</ul>

<?php else: 
include("header.php");

?>
<div id="main">
<h1>PJAX using PHP</h1>

<ul class='header'>
      <li><a href='trex.php' data-pjax='main'>Tyrannosaurus</a></li>
      <li><a href='kong.php' data-pjax='main' >King Kong</a></li>
</ul>
</div>
<?php
include("footer.php");	
endif; ?>