
<!-- Developed with the power of phalcon php 2.0
 * Author: Evan Grob
 * Date: May 8, 2016 -->
<!DOCTYPE html>
<html>
		
	<?php
	$getHeader = new HeaderController();
	$getHeader->getHeaderSub();
	
	?>
	<body >
<div id="wrapper">
<div id="header">
<div id="headerbanner"><a href="http://localhost/allwines/"><img src="http://localhost/allwines/images/banner1.png" width="1200" height="125" /></a></div>
<?php
$menu = new MenuController();
$menu->getMenu();
?>
</div>
<div id="main">
<div id="content">
<p>All Grapes</p>

{% for grape in grapes %}
	{{grape.Name}}
	{% endfor %}
</div>
</div>
<div id="sidebar">
	
<h2 >Additional Information</h2>


 
</div>
<div id="footer">
<?php
	$getFooter = new FooterController();
	$getFooter->getFooter();
	
	?>
	</div>

</div>
</body>

	
	
</html>