<?php
/*
 * Developed with the power of phalcon php 2.0
 * Author: Evan Grob
 * Date: May 8, 2016
 */
?>
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

<div id="headerbanner"><a href="http://evangrob.com/allwines/"><img src="http://evangrob.com/allwines/images/banner1.png" width="1200" height="125" /></a></div><?php
$menu = new MenuController();
$menu->getMenu();
?>
<div id="main">
<div id="content">
	
	
<p>
	Tastings
</p>
<p>...Under Construction</p>
<?php 

echo '<img src="'.IMAGES_DIR.'/construction.jpe">';

?>
</div>
</div>
<div id="sidebar">
	

<h2 >Additional Information</h2>
 
</div>
<?php
	$getFooter = new FooterController();
	$getFooter->getFooter();
	
	?>

</div>
</body>

	
	
</html>