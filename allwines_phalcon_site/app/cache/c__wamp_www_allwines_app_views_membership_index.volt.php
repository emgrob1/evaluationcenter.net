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
	$getHeader->getHeader();
	
	?>
	<body >
<div id="wrapper">
<div id="header">
	<div id="label">all-wines.com</div>
<div id="headerbanner"><img src="http://localhost/allwines/images/banner1.png" width="900" height="118" /></div>
<?php
$menu = new MenuController();
$menu->getMenu();
?>

<div id="main">
<div id="content">
	
	
<p>
	List of Members
</p>
<div style="text-align:left;">
<?php foreach ($membership as $memberships) { ?>

First Name: <?= $memberships->firstname ?><br> Last Name: <?= $memberships->lastname ?><br> Email: <?= $memberships->email ?><br> Comment: <?= $memberships->comment ?><br><br>


<?php } ?>
</div>

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